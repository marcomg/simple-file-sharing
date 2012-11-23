<?php /* Smarty version Smarty-3.1.11, created on 2012-10-08 18:17:57
         compiled from "/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/file_manipulator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4123533285072fcb52e8be5-93101486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe0b2108056c4c99c6744e2805b5b430f5d7ecd3' => 
    array (
      0 => '/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/file_manipulator.tpl',
      1 => 1347816804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4123533285072fcb52e8be5-93101486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'file_name' => 0,
    'file_size' => 0,
    'file_type' => 0,
    'file_new_name' => 0,
    'file_password' => 0,
    'file_visibility' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5072fcb54be204_72564304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5072fcb54be204_72564304')) {function content_5072fcb54be204_72564304($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['file_name']->value)){?>
<h2>Panoramica file:</h2>
Nome file: <?php echo $_smarty_tpl->tpl_vars['file_name']->value;?>
<br/>
Dimensione file: <?php echo $_smarty_tpl->tpl_vars['file_size']->value;?>
<br/>
Tipo file: <?php echo $_smarty_tpl->tpl_vars['file_type']->value;?>
<br/>
Identificativo file: <?php echo $_smarty_tpl->tpl_vars['file_new_name']->value;?>
<br/>
Password file: <?php if (!empty($_smarty_tpl->tpl_vars['file_password']->value)){?><?php echo $_smarty_tpl->tpl_vars['file_password']->value;?>
<?php }else{ ?>Non è stata settata alcuna password<?php }?><br/>
Visibilità file: <?php echo $_smarty_tpl->tpl_vars['file_visibility']->value;?>
<br/>
Condividi file: <input type="text" value="http://<?php echo @SCRIPT_URL;?>
<?php echo @DIR_INSTALL;?>
/index.php?action=download&file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value;?>
"/> (Ricorda che se il file è impostato come privato nessuno, al di fuori di te potrà scaricarlo. Per limitarne l'accesso puoi impostare una password.)
<br/>
<h2>Modifica file</h2>
Cambia password: <form action="index.php?action=file_manipulator&action_file=password_change&file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value;?>
" method="post" enctype="multipart/form-data">
    <input type="password" name="password" />
    <input type="submit" name="submit" value="Cambia Password" />
</form><br/>
<a href="index.php?action=file_manipulator&action_file=delete&file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value;?>
" onclick="return confirm('Attenzione! Questa operazione sarà irreversibile. Il file <?php echo $_smarty_tpl->tpl_vars['file_name']->value;?>
 verrà eliminato dal sistema. Continuare? ')">Cancella file</a><br/>
<a href="index.php?action=file_manipulator&action_file=visibility_change&file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value;?>
"><?php if (($_smarty_tpl->tpl_vars['file_visibility']->value=='public')){?>Rendi il file privato<?php }else{ ?>Rendi il file pubblico<?php }?></a>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>