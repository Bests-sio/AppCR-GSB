<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));

$queryUser = "SELECT Id_user, user.Nom,Prenom, Email, Region.nom  'nomR', Type FROM user left join Region on user.Region=Region.id_region order by Id_user";
$User = $bdd->prepare($queryUser);
$User->execute();
?>