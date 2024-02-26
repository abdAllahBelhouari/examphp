<?php
    // Page inaccessible si la personne est connecté
    
    if ( isset($_COOKIE['token']) && isset($_SESSION['User']) ) {
        header("Location:index.php");
        die();
    } else {
        if ( isset($_POST['subFormLogin']) ) {
            $email = $db->quote($_POST['username']);
            $password = $db->quote(password_hash($_POST['password'], PASSWORD_DEFAULT));

            $User = $db->query("SELECT * FROM utilisateurs WHERE email = $email ")->fetch();
            if ( $User ) {
                if ( password_verify($_POST['password'], $User['password']) ) {
                    setcookie("token", substr(md5(time() . mt_rand()), 0, 120), time()+900); // pour 15 mn
                    $_SESSION['User'] = $User;
                    header("Location:index.php");
                    die();
                } else {
                    echo 'Mot de passe est invalide.';
                }
            } else {
                echo "Aucun compte correspondant n'a été trouvé.";   
            }
        }

        $fichier = file_get_contents('template/login.tpl');
        echo $fichier;
    }

?>