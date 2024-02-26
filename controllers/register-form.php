<?php
    // Page inaccessible si la personne est connecté
    
    if ( isset($_COOKIE['token']) && isset($_SESSION['User']) ) {
        header("Location:index.php");
        die();
    } else {
        require_once('phpmailer.php');
        
        if ( isset($_POST['subformRegister']) ) {
            if ( !empty($_POST['username']) && ($_POST['password'] == $_POST['confirm-password'])) {
                $email = $db->quote($_POST['username']);
                $password = $db->quote(password_hash($_POST['password'], PASSWORD_DEFAULT));
                $Existe = $db->query("SELECT * FROM utilisateurs WHERE email = $email")->fetch();
                if ( $Existe ) {
                    echo "Email est déjà utilisée.";
                } else {
                    $Sql = $db->prepare("INSERT INTO utilisateurs SET 
                                            email = $email,
                                            password = $password
                                        ");
                    if ( $Sql->execute() ) {
                        sendEmail ("Confirmation d'enregistrement.", "Vous êtes bien enregistré sur notre site.", $_POST['username']);
                        unset($_POST);
                        header("Location:?route=login");
                        die();
                    }                                    
                }
            } else {
                echo "erreur de saisie du mot de passe";
            }
        }
        
        $file = file_get_contents('template/register.tpl');
        echo $file;
    }

?>