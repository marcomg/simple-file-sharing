<?php /* Smarty version Smarty-3.1.11, created on 2012-10-04 14:43:07
         compiled from "/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:320207356506d845b0bcc37-92750081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6efe095a61af9892b5cecbc5504ccb84526927dc' => 
    array (
      0 => '/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/header.tpl',
      1 => 1349091255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320207356506d845b0bcc37-92750081',
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
  'unifunc' => 'content_506d845b0e1559_13691586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506d845b0e1559_13691586')) {function content_506d845b0e1559_13691586($_smarty_tpl) {?><!DOCTYPE html>
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