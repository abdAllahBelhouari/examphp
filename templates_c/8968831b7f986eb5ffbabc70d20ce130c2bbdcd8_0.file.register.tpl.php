<?php
/* Smarty version 3.1.48, created on 2024-02-26 09:39:17
  from 'C:\laragon\www\examphp\template\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65dc5c45d5ff24_28925171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8968831b7f986eb5ffbabc70d20ce130c2bbdcd8' => 
    array (
      0 => 'C:\\laragon\\www\\examphp\\template\\register.tpl',
      1 => 1708940357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dc5c45d5ff24_28925171 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="register-container">
        <form action="?route=register" method="POST">
            <h2>Inscription</h2>
            <label for="username">Email:</label>
            <input type="email" id="username" name="username" >

            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" >

            <label for="confirm-password">Confirmer mot de passe:</label>
            <input type="password" id="confirm-password" name="confirm-password" >

            <button type="submit" name='subformRegister' >Inscription</button>

            <a href="?route=login" class="button">Se connecter</a>
        </form>
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    </div>
</body>
</html>
<?php }
}
