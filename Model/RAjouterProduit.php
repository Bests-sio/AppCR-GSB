<?php

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));

if (isset($_POST['boutton'])) {
    if (!empty($_POST['nom']) && !empty($_POST['dateDistribution']) && !empty($_POST['quantite']) && !empty($_POST['description'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $dateDistribution = htmlspecialchars($_POST['dateDistribution']);
        $quantite = htmlspecialchars($_POST['quantite']);
        $description = htmlspecialchars($_POST['description']);
        $alertMessages = array();


        if (empty($alertMessages)) {
            $insertPrduit = $bdd->prepare('INSERT INTO Echantillon (Nom, dateDistribution, quantite, description, sortie) VALUES (?, ?, ?, ?, ?)');
            $insertPrduit->execute(array($nom, $dateDistribution, $quantite, $description, 0));

            echo "<script> alert('Inscription réussie !') </script>";
        }
    } else {
        echo "<script> alert('Veuillez remplir tous les champs.') </script>";
    }
}
?>