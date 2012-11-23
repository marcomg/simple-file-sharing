<?php /* Smarty version Smarty-3.1.11, created on 2012-10-05 13:51:51
         compiled from "/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/login_form_register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1984858364506ec9d7ba9987-48015180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02621b1d72a12c544af48aaeb40ff55cea8edabd' => 
    array (
      0 => '/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/login_form_register.tpl',
      1 => 1347114580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1984858364506ec9d7ba9987-48015180',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_506ec9d7bf17f8_31163651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506ec9d7bf17f8_31163651')) {function content_506ec9d7bf17f8_31163651($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

Registrati compilando il seguente form:<br/>
<form method="post" action="index.php?action=register" name="regitration">
	&bull;Nome utente:<br/>
	<input type="text" name="username" /><br/><br/>
	&bull;Password:<br/>
	<input type="password" name="password" /><br/><br/>

	<input type="submit" value="Invia" name="send"/>
<small>I campi contrassegnati da &bull; sono obbligatori.</small>
</form>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>