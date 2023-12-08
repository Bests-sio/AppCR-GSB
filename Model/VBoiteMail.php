<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));

try {

    // Requête pour récupérer les infos du CR
    $idvisiteur = $_SESSION["Id_user"];
    $requeteMail = $bdd->query("SELECT * FROM Mail m INNER JOIN Visiteur v WHERE v.Id_user = $idvisiteur");
    $resultatsMail = $requeteMail->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Erreur de récupération dans la base de données : " . $e->getMessage();
}

?>

