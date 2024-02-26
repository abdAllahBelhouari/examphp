<?php
/* Smarty version 3.1.48, created on 2024-02-26 12:58:37
  from 'C:\laragon\www\examphp\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65dc8afdbe8035_35096555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6f91e92b8cf0f63b9d8b495a3d005750ea98f11' => 
    array (
      0 => 'C:\\laragon\\www\\examphp\\template\\index.tpl',
      1 => 1708952298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dc8afdbe8035_35096555 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des fichiers</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="files-container">
    <nav>
      <a href="?route=logout">Se déconnecter</a>
    </nav>
    <h2>Liste des fichiers</h2>
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fichiers']->value, 'fichier');
$_smarty_tpl->tpl_vars['fichier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fichier']->value) {
$_smarty_tpl->tpl_vars['fichier']->do_else = false;
?>
        <li class="Link">
          <a href="fichiers/<?php echo $_smarty_tpl->tpl_vars['fichier']->value['fichier'];?>
" target='_blank'><?php echo $_smarty_tpl->tpl_vars['fichier']->value['fichier'];?>
</a>
        </li>
      <?php
}
if ($_smarty_tpl->tpl_vars['fichier']->do_else) {
?>
        Pas de fichier
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </ul>
    <a href="?route=upload" class='button'>Ajouter des fichiers</a>
  </div>
</body>

</html><?php }
}
