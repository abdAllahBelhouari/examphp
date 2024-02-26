<?php

    $action = isset($_GET['route']) && $_GET['route'] ? $_GET['route'] : null;

    switch($action){
        case 'register':
            require('controllers/register-form.php');
        break;
        case 'login':
            require('controllers/login-form.php');
        break;
        case 'upload':
            require('controllers/upload-form.php');
        break;
        
        case 'logout':
            require('controllers/logout.php');
        break;
        default:
            require('controllers/index.php');
        break;
    }
?>