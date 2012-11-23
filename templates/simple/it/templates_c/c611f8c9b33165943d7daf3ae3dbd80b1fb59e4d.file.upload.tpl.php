<?php /* Smarty version Smarty-3.1.11, created on 2012-10-05 13:52:07
         compiled from "/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166227355506ec9e7b8cd84-61942199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c611f8c9b33165943d7daf3ae3dbd80b1fb59e4d' => 
    array (
      0 => '/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/upload.tpl',
      1 => 1347114611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166227355506ec9e7b8cd84-61942199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'file_name' => 0,
    'file_weight' => 0,
    'file_password' => 0,
    'file_visibility' => 0,
    'link_file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_506ec9e7bcf523_97462702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506ec9e7bcf523_97462702')) {function content_506ec9e7bcf523_97462702($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<br/>
File uplodato con successo:<br/>
Dettagli file:<br/>
&bull; Nome file: <?php echo $_smarty_tpl->tpl_vars['file_name']->value;?>
<br/>
&bull; Dimensione file: <?php echo $_smarty_tpl->tpl_vars['file_weight']->value;?>
<br/>
&bull; Password di download per gli utenti non registrati: <?php echo $_smarty_tpl->tpl_vars['file_password']->value;?>
<br/>
&bull; Visibilità file: <?php echo $_smarty_tpl->tpl_vars['file_visibility']->value;?>
<br/>
<br/>
Link download file: <?php echo $_smarty_tpl->tpl_vars['link_file']->value;?>
<br/>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>