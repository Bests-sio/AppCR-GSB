<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));

/* Début de la connexion*/
if (isset($_POST['button'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = $_POST['password'];
        $getUser = $bdd->prepare('SELECT * FROM user WHERE email = ?');
        $getUser->execute(array($email));
        $user = $getUser->fetch();
/*Début de la redirection vers les différents index*/
        if ($user && password_verify($password, $user['Password'])) {
            if ($user['Type'] == "admin") {
                header('Location: index.php?page=IndexAdmin');
                exit();
            } else if ($user['Type'] == "responsable") {
                getUserInfo($bdd, $email, 'Id_user');
                getUserInfo($bdd, $email, 'Nom');
                getUserInfo($bdd, $email, 'Prenom');
                getUserInfo($bdd, $email, 'Email');
                getUserInfo($bdd, $email, 'Region');
                getUserInfo($bdd, $email, 'Type');
                header('Location: index.php?page=IndexResponsable');
                exit();
            } else if ($user['Type'] == "delegue") {
                getUserInfo($bdd, $email, 'Id_user');
                getUserInfo($bdd, $email, 'Nom');
                getUserInfo($bdd, $email, 'Prenom');
                getUserInfo($bdd, $email, 'Email');
                getUserInfo($bdd, $email, 'Region');
                getUserInfo($bdd, $email, 'Type');
                header('Location: index.php?page=IndexDelegue');
                exit();
            } else if ($user['Type'] == "visiteur") {
                getUserInfo($bdd, $email, 'Id_user');
                getUserInfo($bdd, $email, 'Nom');
                getUserInfo($bdd, $email, 'Prenom');
                getUserInfo($bdd, $email, 'Email');
                getUserInfo($bdd, $email, 'Region');
                getUserInfo($bdd, $email, 'Type');
                header('Location: index.php?page=IndexVisiteur');
                exit();
            } else {
                echo "<script> alert('Type d utilisateur non reconnu !') </script>";
            }
        } else {
            echo "<script> alert('Mot de passe incorrect !') </script>";
        }
    } else {
        echo "<script> alert('Veuillez remplir tous les champs...') </script>";
    }
}

function getUserInfo($bdd, $mail, $x){
    $recup = $bdd->prepare("SELECT $x FROM user WHERE Email = ?");
    $recup->execute(array($mail));
    $utilisateur = $recup->fetch();
    $_SESSION[$x] = $utilisateur[$x];
}


?>
