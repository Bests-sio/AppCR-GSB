<?php
$bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));
try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST["email"];
        $newPassword = password_hash($_POST["new-password"], PASSWORD_DEFAULT);

        $task = $bdd->prepare("UPDATE user SET Password = ? WHERE Email = ?");
        $task->execute([$newPassword, $email]);

        header("Location: Index.php?page=connexion");
        exit();
    }
} catch (PDOException $e) {
    echo "Erreur de récupération dans la base de données : " . $e->getMessage();
}
?>

