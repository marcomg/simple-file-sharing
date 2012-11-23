<?php /* Smarty version Smarty-3.1.11, created on 2012-10-05 10:26:44
         compiled from "/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/login_form_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1397442351506e99c4b93588-49407051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7cb35b453e05c0d4a8838ab73ca49558b750595' => 
    array (
      0 => '/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/login_form_login.tpl',
      1 => 1347114571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1397442351506e99c4b93588-49407051',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_506e99c4bdc251_96763834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506e99c4bdc251_96763834')) {function content_506e99c4bdc251_96763834($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

Loggiati compilando il seguente form:<br/>
<form method="post" action="index.php?action=login" name="login">
	Nome utente:<br/>
	<input type="text" name="username" /><br/><br/>
	Password:<br/>
	<input type="password" name="password" /><br/><br/>

	<input type="submit" value="Invia" name="send"/>
</form>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>