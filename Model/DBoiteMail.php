<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));

$id_delegue = $_SESSION['Id_user'];
$requete = $bdd->prepare("SELECT v.nom as 'nom_visiteur', v.prenom as 'prenom_visiteur', m.date, m.objet,m.message FROM Mail m INNER JOIN Visiteur v On m.id_visiteur = v.id_visiteur WHERE id_delegue = ?");
$requete->execute([$id_delegue]);
$mails = $requete->fetchAll(PDO::FETCH_ASSOC);

?>