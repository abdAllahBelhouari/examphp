<?php
    if ( isset($_COOKIE['token']) ) {
        if ( isset($_POST['subFormUpload']) ) {
            $id_utilisateur = $db->quote($_SESSION['User']['id']);

            $Supports = $_FILES['files'];
            
            for ( $f=0 ; $f < count($Supports['name']) ; $f++) {
                $pathinfo = pathinfo($Supports['name'][$f]);
                
                $Supports['name'][$f] = str_replace("'", "’", $Supports['name'][$f]);

                if ( !file_exists("fichiers/".$Supports['name'][$f]) ) {
                    if ( move_uploaded_file( $Supports['tmp_name'][$f], "fichiers/".$Supports['name'][$f]) ) {
                        $fichier = $db->quote($Supports['name'][$f]);
                        $Sql = $db->query("INSERT INTO fichiers SET 
                                                id_utilisateur = $id_utilisateur,
                                                fichier = $fichier
                                            ");
                    }
                }
            }
            header("Location:index.php");
            die();
        }
        
        $fichier = file_get_contents('template/upload.tpl');
        echo $fichier;
    } else {
        header("Location:index.php");
        die();
    }
?>