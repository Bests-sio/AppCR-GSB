<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));

if (isset($_GET['Id_user'])) {
    $Id_user = $_GET['Id_user'];

    $queryUserDetail = "SELECT Id_user, Nom, Prenom, Email, Type FROM user WHERE Id_user = :id";
    $UserDetail = $bdd->prepare($queryUserDetail);
    $UserDetail->bindParam(':id', $Id_user);
    $UserDetail->execute();
}

if (isset($_POST['button_user'])) {
    $Id_user = $_POST['Id_user'];
    $nouveau_nom = $_POST['nouveau_nom'];
    $nouveau_prenom = $_POST['nouveau_prenom'];
    $nouvelle_email = $_POST['nouvelle_email'];
    $nouveau_mdp = $_POST['nouveau_mdp'];
    $confirmation = $_POST['confirmation'];

    if ($nouveau_nom && $nouveau_prenom && $nouvelle_email) {
        if ($nouveau_mdp === $confirmation) {
            if (!empty($nouveau_mdp)) {
                $passwordHash = password_hash($nouveau_mdp, PASSWORD_DEFAULT);

                $queryUpdateUser = "UPDATE user SET Nom = ?, Prenom = ?, Email = ?, Password = ? WHERE Id_user = ?";
                $UpdateUser = $bdd->prepare($queryUpdateUser);
                $UpdateUser->execute(array($nouveau_nom, $nouveau_prenom, $nouvelle_email, $passwordHash, $Id_user));
            } else {
                $queryUpdateUser = "UPDATE user SET Nom = ?, Prenom = ?, Email = ? WHERE Id_user = ?";
                $UpdateUser = $bdd->prepare($queryUpdateUser);
                $UpdateUser->execute(array($nouveau_nom, $nouveau_prenom, $nouvelle_email, $Id_user));
            }

            header('Location: index.php?page=ModifUser&Id_user=' . $Id_user);
            exit();
        } else {
            echo "Les mots de passe ne correspondent pas.";
        }
    } else {
        echo "Veuillez remplir tous les champs du formulaire.";
    }
}
?>