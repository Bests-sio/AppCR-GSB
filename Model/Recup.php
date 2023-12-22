<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST["email"];

    $db = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));
    $stmt = $db->prepare("SELECT * FROM user WHERE Email = ?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
        $code = rand(100000, 999999);

        $stmtInsertCode = $db->prepare("INSERT INTO reset (email, code, expiration_date) VALUES (?, ?, DATE_ADD(NOW(), INTERVAL 1 HOUR))");
        $stmtInsertCode->execute([$email, $code]);

        $to = $email;
        $subject = "Code de Récupération de Mot de Passe";
        $message = "Votre code de récupération de mot de passe est : $code";
        $headers = "From: support@gsb.fr"; // Remplacez par votre adresse e-mail

        mail($to, $subject, $message, $headers);

        header("Location: Index.php?page=Reset");
        exit();
    } else {
        echo "L'adresse e-mail n'existe pas dans notre système. Veuillez réessayer.";
    }
}
?>
