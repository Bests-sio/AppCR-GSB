<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));

if (isset($_GET['id_echantillon'])) {
    $id_echantillon = $_GET['id_echantillon'];

    /* query info du produit */
    $queryProduitDetail = "SELECT id_echantillon, nom, dateDistribution, quantite, description, sortie FROM Echantillon WHERE id_echantillon = :id";
    $ProduitDetail = $bdd->prepare($queryProduitDetail);
    $ProduitDetail->bindParam(':id', $id_echantillon);
    $ProduitDetail->execute();
}

if (isset($_POST['button_produit'])) {
    // Validation et récupération des données POST
    $nouveau_nom = $_POST['nouveau_nom'];
    $nouvelle_date = $_POST['nouvelle_date'];
    $nouvelle_Quantité = $_POST['nouvelle_Quantité'];
    $nouvelle_sortie = ($_POST['nouvelle_sortie'] !== 'zero') ? $_POST['nouvelle_sortie'] : 0;
    $nouvelle_description = $_POST['nouvelle_description'];

    if ($nouveau_nom && $nouvelle_date && $nouvelle_Quantité && $nouvelle_description) {
        // Requête pour mettre à jour les détails du produit
        $queryUpdatePraticien = "UPDATE Echantillon SET nom = ?, dateDistribution = ?, quantite = ?, description = ?, sortie = ? WHERE id_echantillon = ?";
        $UpdatePraticien = $bdd->prepare($queryUpdatePraticien);
        $UpdatePraticien->execute(array($nouveau_nom, $nouvelle_date, $nouvelle_Quantité, $nouvelle_description, $nouvelle_sortie, $id_echantillon));

        header('Location: index.php?page=ModifProduit&id_echantillon=' . $id_echantillon);
        exit();
    }
}
?>