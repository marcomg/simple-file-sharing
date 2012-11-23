<?php /* Smarty version Smarty-3.1.11, created on 2012-10-04 15:20:39
         compiled from "./templates/simple/it/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1684419023506d8d27a19e02-04509389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ab3669938bb8ca0f9118b206d72c4ebc0b69c07' => 
    array (
      0 => './templates/simple/it/templates/header.tpl',
      1 => 1349091255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1684419023506d8d27a19e02-04509389',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'print_user_panel' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_506d8d27a3c116_81212938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506d8d27a3c116_81212938')) {function content_506d8d27a3c116_81212938($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }?></title>
</head>
<body>
<br/>


<a href="./">Home Page</a>


<?php if (!isset($_smarty_tpl->tpl_vars['print_user_panel']->value)){?>


&bull; <a href="./index.php?action=register">Registrati</a> &bull; <a href="./index.php?action=login">Login</a><br/>

<?php }else{ ?>



&bull;  <a href="./index.php?action=upload">Upload</a> &bull; <a href="./index.php?action=file_browser">File Browser</a> &bull; <a href="./index.php?action=ucp&user_action=overview">Pannello di controllo utente</a> &bull; <a href="./index.php?action=logout">Logout</a><br/>

<?php }?>







<br/>
<?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?>
<br/>
<?php }} ?>