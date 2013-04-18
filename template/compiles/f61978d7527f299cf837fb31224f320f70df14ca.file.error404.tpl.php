<?php /* Smarty version Smarty-3.1.13, created on 2013-04-18 14:25:48
         compiled from "/opt/lampp/htdocs/simple-file-sharing/template/templates/error404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96007464516fe64cd06220-10491934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f61978d7527f299cf837fb31224f320f70df14ca' => 
    array (
      0 => '/opt/lampp/htdocs/simple-file-sharing/template/templates/error404.tpl',
      1 => 1366224820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96007464516fe64cd06220-10491934',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_516fe64cd45b74_98543149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516fe64cd45b74_98543149')) {function content_516fe64cd45b74_98543149($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/opt/lampp/htdocs/simple-file-sharing/includes/classes/smarty/plugins/block.t.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="container"><h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
404 Error!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1><p><p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Reality is appearance, mistakes are always in wait.<br/>This page doesn't exist, now, one day it might.<br/>Come back to a safer harbour:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <a href="./">home page</a></p></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>