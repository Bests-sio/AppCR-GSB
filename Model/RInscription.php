<?php

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));

if (isset($_POST['boutton'])) {
    if (!empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['prénom']) && !empty($_POST['type']) && !empty($_POST['région']) && !empty($_POST['password']) && !empty($_POST['confirmation'])) {
        $email = htmlspecialchars($_POST['email']);
        $nom = htmlspecialchars($_POST['nom']);
        $prénom = htmlspecialchars($_POST['prénom']);
        $région = htmlspecialchars($_POST['région']);
        $type = $_POST['type'];
        $password = $_POST['password'];
        $confirmation = $_POST['confirmation'];

        // Vérification si l'email existe déjà
        $checkEmail = $bdd->prepare('SELECT COUNT(*) AS count FROM user WHERE Email = ?');
        $checkEmail->execute(array($email));
        $result = $checkEmail->fetch(PDO::FETCH_ASSOC);

        if ($result['count'] > 0) {
            echo "<script> alert('Cette adresse e-mail est déjà utilisée.') </script>";
        } else {
            // Vérification de la correspondance des mots de passe
            if ($password === $confirmation) {
                // Hashage du mot de passe
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                // Insertion de l'utilisateur dans la table "user"
                $insertUsers = $bdd->prepare('INSERT INTO user (Nom, Prenom, Email, password, type, Region) VALUES (?, ?, ?, ?, ?, (SELECT id_region FROM Region WHERE nom = ?))');
                $insertUsers->execute(array($nom, $prénom, $email, $passwordHash, $type, $région));
                $userId = $bdd->lastInsertId();

                // Stockage des données de l'utilisateur en session
                $_SESSION['email'] = $email;
                $_SESSION['prénom'] = $prénom;
                $_SESSION['id'] = $userId;

                echo "<script> alert('Inscription réussie !') </script>";

                // Si l'utilisateur est de type 'delegue', mettre à jour la table "Region"
                if ($type == 'delegue') {
                    $updateRegion = $bdd->prepare('UPDATE Region SET id_delegue = ? WHERE nom = ?');
                    $updateRegion->execute(array($userId, $région));
                    $insertVisiteur = $bdd->prepare('INSERT INTO Visiteur (nom, prenom, id_user) VALUES (?, ?, ?)');
                    $insertVisiteur->execute(array($nom, $prénom, $userId));

                    header('location: index.php?page=Inscription');
                }

                // Si l'utilisateur est de type 'visiteur', insérer dans la table "Visiteur"
                if ($type == 'visiteur') {
                    $insertVisiteur = $bdd->prepare('INSERT INTO Visiteur (nom, prenom, id_user) VALUES (?, ?, ?)');
                    $insertVisiteur->execute(array($nom, $prénom, $userId));
                    header('location: index.php?page=Inscription');
                }
            } else {
                echo "<script> alert('La confirmation du mot de passe ne correspond pas.') </script>";
            }
        }
    } else {
        echo "<script> alert('Veuillez remplir tous les champs.') </script>";
    }
}

$QueryRegion = "SELECT nom FROM REGION";
$nomRegion = $bdd->prepare($QueryRegion);
$nomRegion->execute();
?>
