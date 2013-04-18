<?php /* Smarty version Smarty-3.1.13, created on 2013-04-18 14:31:51
         compiled from "/opt/lampp/htdocs/simple-file-sharing/template/templates/login_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1231605931516fe7b760b9c6-06346878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7b75cdf4873263b6a5f5448af835048060fc6bb' => 
    array (
      0 => '/opt/lampp/htdocs/simple-file-sharing/template/templates/login_login.tpl',
      1 => 1366283880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1231605931516fe7b760b9c6-06346878',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_516fe7b766a973_91982683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516fe7b766a973_91982683')) {function content_516fe7b766a973_91982683($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/opt/lampp/htdocs/simple-file-sharing/includes/classes/smarty/plugins/block.t.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="container"><p class="alert alert-success"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Login successful :-)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br/><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You will be redirected to the home page short ;-)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br/></p><meta http-equiv="refresh" content="3;url=index.php"></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>