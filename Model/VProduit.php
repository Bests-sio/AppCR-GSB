<?php

    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));


    $queryProduit = "SELECT * FROM Echantillon";
    $Produit = $bdd->prepare($queryProduit);
    $Produit->execute();

?>