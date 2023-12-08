<?php

    session_start();
    $_SESSION = array();
    session_destroy();

    $bdd = NULL;

    header('Location: Index.php?page=IndexMain');

?>