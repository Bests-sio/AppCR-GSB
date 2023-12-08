<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));

$idUser = $_SESSION['Id_user'];
$region = $_SESSION['Region'];


$queryRegion = $bdd->query("SELECT u.Region, r.nom as 'RNom' FROM user as u JOIN Region as r ON u.Region = r.id_region WHERE u.Id_user = $idUser");
$nomRegion = $queryRegion->fetchAll();

?>
