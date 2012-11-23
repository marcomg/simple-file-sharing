<?php /* Smarty version Smarty-3.1.11, created on 2012-10-05 10:26:48
         compiled from "/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/login_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2080128688506e99c88e01f0-10044921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da15fd385d52572f2ae308390ae027117a013956' => 
    array (
      0 => '/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/login_login.tpl',
      1 => 1348920183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2080128688506e99c88e01f0-10044921',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_506e99c890c099_15146875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506e99c890c099_15146875')) {function content_506e99c890c099_15146875($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

Login effettuato con successo :-)<br/>
Sarete reindirizzati a breve alla home page ;-) <br/>
<meta http-equiv="refresh" content="3;url=index.php"> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>