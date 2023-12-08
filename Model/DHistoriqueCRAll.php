<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));

try {
    $region = $_SESSION["Region"];
    $requeteCR = $bdd->prepare(" SELECT CR.id_compteRendu, CR.date, CR.motif, E1.nom AS 'Enom1', E2.nom AS 'Enom2', CR.bilan, U.nom AS 'Unom', U.Prenom AS 'Uprenom',P.nom AS 'Pnom', P.prenom AS 'Pprenom', CR.note, Cab.nom AS 'Cnom' 
            FROM CompteRendu CR
            JOIN Cabinet Cab ON CR.id_cabinet = Cab.id_cabinet 
            JOIN Praticien P ON CR.id_praticien = P.id_praticien 
            JOIN user U ON CR.id_visiteur = U.Id_user 
            LEFT JOIN Echantillon E1 ON CR.id_echantillon_1 = E1.id_echantillon 
            LEFT JOIN Echantillon E2 ON CR.id_echantillon_2 = E2.id_echantillon
            WHERE CR.id_region = :region order by date desc");

    $requeteCR->bindParam(':region', $region, PDO::PARAM_INT);
    $requeteCR->execute();
    $resultatsCR = $requeteCR->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur de récupération dans la base de données : " . $e->getMessage();
}

?>