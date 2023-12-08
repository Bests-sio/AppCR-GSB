<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));

$QueryRegion = "SELECT nom FROM REGION";
$nomRegion = $bdd->prepare($QueryRegion);
$nomRegion->execute();

$QueryNomCabinet = "SELECT nom FROM Cabinet";
$NomCabinet = $bdd->prepare($QueryNomCabinet);
$NomCabinet->execute();

if (isset($_POST['boutton'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['specialité']) && !empty($_POST['NomCabinet']) && !empty($_POST['description'])) {
        // Récupération des données du formulaire
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $specialité = htmlspecialchars($_POST['specialité']);
        $NomCabinetInput = htmlspecialchars($_POST['NomCabinet']);
        $description = htmlspecialchars($_POST['description']);
        $NouveauNom = htmlspecialchars($_POST['NouveauNom']);
        $NouvelleVille = htmlspecialchars($_POST['NouvelleVille']);
        $NouveauCP = htmlspecialchars($_POST['NouveauCP']);
        $NouvelleRue = htmlspecialchars($_POST['NouvelleRue']);
        $region = htmlspecialchars($_POST['région']);

        if ($NomCabinetInput == 'autre') {
            $insertCabinet = $bdd->prepare('INSERT INTO Cabinet (nom, ville, codePostal, rue, id_region) VALUES (?, ?, ?, ?, (SELECT id_region FROM Region WHERE nom = ?))');
            $insertCabinet->execute(array($NouveauNom, $NouvelleVille, $NouveauCP, $NouvelleRue, $region));
            $idCabinetInsere = $bdd->lastInsertId();
            $insertPraticien = $bdd->prepare('INSERT INTO Praticien (Nom, Prenom, specialité, id_cabinet, description) VALUES (?, ?, ?, ?, ?)');
            $insertPraticien->execute(array($nom, $prenom, $specialité, $idCabinetInsere, $description));

            echo "<script> alert('Inscription réussie !') </script>";
            header('Location: index.php?page=AjouterPraticien');
        } else {
            $insertPraticien = $bdd->prepare('INSERT INTO Praticien (Nom, Prenom, specialité, id_cabinet, description) VALUES (?, ?, ?, (SELECT id_cabinet FROM Cabinet WHERE nom=?), ?)');
            $insertPraticien->execute(array($nom, $prenom, $specialité, $NomCabinetInput, $description));
            echo "<script> alert('Inscription réussie !') </script>";
            header('Location: index.php?page=AjouterPraticien');
        }
    } else {
        echo "<script> alert('Veuillez remplir tous les champs.') </script>";

}}
?>

