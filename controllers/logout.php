<?php

    unset($_SESSION['User'], $_COOKIE['token']);
    setcookie('token', '', -1, '/'); 
    header("Location:index.php");
    die();

?>