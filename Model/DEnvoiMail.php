<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '',array(PDO::ATTR_PERSISTENT => true));
if(isset($_POST['button'])) {

    $objet = htmlspecialchars($_POST['objet']);
    $visiteur = $_POST['visiteur'];
    $commentaire = htmlspecialchars($_POST['commentaire']);
    $delegue = $_SESSION['Id_user'];
    $date = date("Y-m-d H:i:s");

    $requete = $bdd->prepare("INSERT INTO Mail (objet, date, message, id_visiteur, id_delegue, lu) VALUES (?, ?, ?, ?, ?, ?)");
    $requete->execute([$objet, $date, $commentaire, $visiteur, $delegue, 0]);

}

$requete = $bdd->query('SELECT * FROM Visiteur');
$VisiteurAll = $requete->fetchAll();

?>