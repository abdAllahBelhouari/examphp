<?php
    $host 		= "localhost";
    $dbname 	= "examphp";
    $root 		= "root";
    $password 	= "";

    try {
        $db = new PDO (
            "mysql:host=$host;dbname=$dbname;charset=utf8", "$root", "$password",
            array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES 'utf8'")
        );
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $db->exec("SET CHARACTER SET utf8");
    } catch ( Exception $e ) {
        echo "Désolé ! Erreur de connexion.<br>La base des données est inaccessible.";
        die();
    }
?>