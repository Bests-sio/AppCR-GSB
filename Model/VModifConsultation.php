<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));


$requeteRegionAll = $bdd->query("SELECT id_region, nom as 'RNom' FROM Region");
$RegionAll = $requeteRegionAll->fetchAll();

$idUser = $_SESSION['Id_user'];
$region = $_SESSION['Region'];

$queryRegion = $bdd->query("SELECT u.Region, r.nom as 'RNom' FROM user as u JOIN Region as r ON u.Region = r.id_region WHERE u.Id_user = $idUser");
$nomRegion = $queryRegion->fetchAll();

if (isset($_POST['BtnModifInfoPerso'])) {

    $nouveau_nom = $_POST['nom'];
    $nouveau_prenom = $_POST['prenom'];
    $nouveau_mail = $_POST['mail'];
    $nouvelle_region = $_POST['region'];
    $idUser = $_SESSION['Id_user'];

    if ($nouveau_nom && $nouveau_prenom && $nouveau_mail && $nouvelle_region) {

        $queryUpdateInfo = "UPDATE user SET Nom = ?, Prenom = ?, Email = ?, Region = ? WHERE Id_user = ?";
        $UpdateInfo = $bdd->prepare($queryUpdateInfo);
        $UpdateInfo->execute(array($nouveau_nom, $nouveau_prenom, $nouveau_mail, $nouvelle_region, $idUser));

        header('Location: index.php?page=Consultation');
        exit();
    }
}

?>