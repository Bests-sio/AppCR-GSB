<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));

$requeteEchantillionT = $bdd->prepare("SELECT count(id_echantillon) 'count' FROM Echantillon");
$requeteEchantillionT->execute();
$echantillonT = $requeteEchantillionT->fetchAll();

$requeteEchantillionS = $bdd->prepare("SELECT count(id_echantillon) 'count' FROM Echantillon where sortie=1");
$requeteEchantillionS->execute();
$echantillonS = $requeteEchantillionS->fetchAll();

$requeteEchantillionTEST = $bdd->prepare("SELECT count(id_echantillon) 'count' FROM Echantillon where sortie=0");
$requeteEchantillionTEST->execute();
$echantillonTEST = $requeteEchantillionTEST->fetchAll();

$requetevisiteur = $bdd->prepare("SELECT count(id_visiteur) 'count' FROM Visiteur ");
$requetevisiteur->execute();
$visiteurT = $requetevisiteur->fetchAll();

$requetepraticien = $bdd->prepare("SELECT count(id_praticien) 'count' FROM Praticien ");
$requetepraticien->execute();
$praticienT = $requetepraticien->fetchAll();

$requeteCRT = $bdd->prepare("SELECT count(id_compteRendu) 'count' FROM CompteRendu ");
$requeteCRT->execute();
$CRT = $requeteCRT->fetchAll();

$requeteEchantillion = $bdd->prepare("SELECT * FROM Echantillon");
$requeteEchantillion->execute();
$echantillons = $requeteEchantillion->fetchAll();

$requeteYear = $bdd->prepare("SELECT DISTINCT YEAR(date) AS annee FROM CompteRendu");
$requeteYear->execute();
$years = $requeteYear->fetchAll();

$labels = [];
$data = [];


if (isset($_POST['button'])) {

    $selectedYear = $_POST['annee'];

    $requeteDate = $bdd->prepare("SELECT MONTH(date) as mois, COUNT(*) as nb_compteRendu FROM CompteRendu WHERE YEAR(date) = :selectedYear GROUP BY mois ORDER BY mois");
    $requeteDate->bindParam(':selectedYear', $selectedYear, PDO::PARAM_INT);
    $requeteDate->execute();
    $resultats = $requeteDate->fetchAll();

    foreach ($resultats as $row) {
        $labels[] = $row['mois'].'/'. $selectedYear;
        $data[] = $row['nb_compteRendu'];
    }

}

$query = "SELECT E.nom, COUNT(C.id_compteRendu) 'count'
FROM Echantillon E
LEFT JOIN CompteRendu C ON E.id_echantillon = C.id_echantillon_1 OR E.id_echantillon = C.id_echantillon_2
GROUP BY E.nom";

$result = $bdd->query($query);
$data = $result->fetchAll(PDO::FETCH_ASSOC);

/*
$queryV = "//SELECT V.nom 'nomV', COUNT(CR.id_compteRendu) 'count2'
FROM CompteRendu CR
LEFT JOIN Visiteur V ON CR.id_visiteur = V.id_visiteur
GROUP BY V.nom";

$result1 = $bdd->query($queryV);
$data1 = $result1->fetchAll(PDO::FETCH_ASSOC);*/
?>