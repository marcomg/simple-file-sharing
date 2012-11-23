<?php /* Smarty version Smarty-3.1.11, created on 2012-10-05 13:51:56
         compiled from "/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/login_register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1189413697506ec9dc2c0032-00153644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd310cc8eaa31ca8e5d845d4e8bdcdac94d3caaa9' => 
    array (
      0 => '/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/login_register.tpl',
      1 => 1349351303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1189413697506ec9dc2c0032-00153644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'password' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_506ec9dc2fa965_13655003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506ec9dc2fa965_13655003')) {function content_506ec9dc2fa965_13655003($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

Registrazione completata con successo!<br/>
Ecco il riassunto dei tuoi dati. Ti consigliamo di stampare questa pagina.<br/>
Username: <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<br/> 
Password: <?php echo $_smarty_tpl->tpl_vars['password']->value;?>
<br/>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>