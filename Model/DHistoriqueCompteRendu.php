<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));

try {

    // Requête pour récupérer les infos du CR
    $iddelegue = $_SESSION["Id_user"];
    $requeteCR = $bdd->query("SELECT c.*, p.nom as nom_praticien FROM CompteRendu c INNER JOIN Praticien p ON c.id_praticien = p.id_praticien WHERE c.id_visiteur = $iddelegue");
    $resultatsCR = $requeteCR->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Erreur de récupération dans la base de données : " . $e->getMessage();
}

?>