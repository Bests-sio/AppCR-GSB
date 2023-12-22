<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredCode = $_POST["code"];

    $db = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));
    $task = $db->prepare("SELECT * FROM reset WHERE code = ? AND expiration_date > NOW()");
    $task->execute([$enteredCode]);

    if ($task->rowCount() > 0) {
        header("Location: Index.php?page=Change");
        exit();
    } else {
        echo "<script> alert('Le code est invalide.') </script>";
    }
}
?>