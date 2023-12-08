<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));

$queryProduit = "SELECT id_echantillon, nom, DATE_FORMAT(dateDistribution, '%d/%m/%Y') as 'dateDistribution', quantite, description FROM Echantillon";
$Produit = $bdd->prepare($queryProduit);
$Produit->execute();
?>