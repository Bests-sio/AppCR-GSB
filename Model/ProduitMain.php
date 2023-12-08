<?php

    session_start();

    $bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));

    $queryProduit = "SELECT * FROM Echantillon WHERE sortie = 1";
    $Produit = $bdd->prepare($queryProduit);
    $Produit->execute();

?>