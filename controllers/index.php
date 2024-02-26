<?php
    // Page accessible uniquement aux personnes connectées

    require_once('autoload.php');
    
    require_once('smarty/libs/Smarty.class.php');

    $smarty = new Smarty;

    $smarty->setTemplateDir('./template/');
    $smarty->setCompileDir("./template_c/");

    if ( isset($_COOKIE['token']) && isset($_SESSION['User']) ) {
        $id_utilisateur = $db->quote($_SESSION['User']['id']);

        $Sql = $db->query("SELECT fichier FROM fichiers WHERE id_utilisateur = $id_utilisateur")->fetchAll();

        $smarty->assign('fichiers', $Sql);
        $smarty->display('template/index.tpl');
    } else {
        header("Location:?route=login");
        die();
    }
?>