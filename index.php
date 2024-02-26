<?php
    session_start();
    
    require_once('autoload.php');
    require_once('routers/index.php');

    if ( !file_exists( "fichiers/" ) && !is_dir( "fichiers/" ) ) {
        mkdir("fichiers/", 0777);
    } 

?>