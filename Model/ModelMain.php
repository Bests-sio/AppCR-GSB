<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));
$id_region = $_SESSION['Region'];

$requeteEchantillion = $bdd->prepare("SELECT * FROM Echantillon");
$requeteEchantillion->execute();
$echantillons = $requeteEchantillion->fetchAll(PDO::FETCH_ASSOC);

$requeteYear = $bdd->prepare("SELECT DISTINCT YEAR(date) AS annee FROM CompteRendu WHERE id_region = :id_region");
$requeteYear->bindParam(':id_region', $id_region, PDO::PARAM_INT);
$requeteYear->execute();
$years = $requeteYear->fetchAll(PDO::FETCH_ASSOC);

$labels = [];
$data = [];


if (isset($_POST['button'])) {

    $selectedYear = $_POST['annee'];

    $requeteDate = $bdd->prepare("SELECT MONTH(date) as mois, COUNT(*) as nb_compteRendu FROM CompteRendu WHERE id_region = :id_region AND YEAR(date) = :selectedYear GROUP BY mois ORDER BY mois");
    $requeteDate->bindParam(':id_region', $id_region, PDO::PARAM_INT);
    $requeteDate->bindParam(':selectedYear', $selectedYear, PDO::PARAM_INT);
    $requeteDate->execute();
    $resultats = $requeteDate->fetchAll(PDO::FETCH_ASSOC);

    foreach ($resultats as $row) {
        $labels[] = $row['mois'].'/'. $selectedYear;
        $data[] = $row['nb_compteRendu'];
    }

}

?>