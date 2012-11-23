<?php /* Smarty version Smarty-3.1.11, created on 2012-10-08 18:19:05
         compiled from "/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/download.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12974836255072fcf90a3065-42665829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '758631db2d934c251c68047277cc2ed1819c30db' => 
    array (
      0 => '/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/download.tpl',
      1 => 1347819016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12974836255072fcf90a3065-42665829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'file_name' => 0,
    'file_size' => 0,
    'password_form' => 0,
    'file_new_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5072fcf91774f6_35252025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5072fcf91774f6_35252025')) {function content_5072fcf91774f6_35252025($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['file_name']->value)){?>
    Nome file: <?php echo $_smarty_tpl->tpl_vars['file_name']->value;?>
<br/>
    Dimensione file: <?php echo $_smarty_tpl->tpl_vars['file_size']->value;?>
<br/>
    Password richiesta: <?php if (isset($_smarty_tpl->tpl_vars['password_form']->value)){?>Si.<br>
    Inserisci la password:
    <form action="index.php?action=download&file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value;?>
&info=no" method="post" enctype="multipart/form-data">
    <input type="password" name="password" /><br/>
    <input type="submit" name="submit" value="Download" />
    </form>
    <?php }else{ ?>
    No.
    <form action="index.php?action=download&file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value;?>
&info=no" method="post" enctype="multipart/form-data">
    <input type="submit" name="submit" value="Download" />
    </form>
    <?php }?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>