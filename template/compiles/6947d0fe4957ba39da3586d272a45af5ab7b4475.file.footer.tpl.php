<?php /* Smarty version Smarty-3.1.13, created on 2013-04-18 14:32:48
         compiled from "/opt/lampp/htdocs/simple-file-sharing/template/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:637678069516fe7f07f9725-16684898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6947d0fe4957ba39da3586d272a45af5ab7b4475' => 
    array (
      0 => '/opt/lampp/htdocs/simple-file-sharing/template/templates/footer.tpl',
      1 => 1366224718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '637678069516fe7f07f9725-16684898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'print_admin_panel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_516fe7f080c795_72275995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516fe7f080c795_72275995')) {function content_516fe7f080c795_72275995($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/opt/lampp/htdocs/simple-file-sharing/includes/classes/smarty/plugins/block.t.php';
?><br/><div class="container"><div class="text-center"><?php if (isset($_smarty_tpl->tpl_vars['print_admin_panel']->value)){?><p><a href="index.php?action=acp&amp;admin_action=overview">Pannello di controllo amministratore</a></p><?php }?><p><small class="muted"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Powered by<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <a href="https://code.google.com/p/simple-file-sharing/">simple-file-sharing</a> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
created by<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <a href="http://www.marcomg.tk/">marcomg</a></small></p></div></div></body></html>
<?php }} ?>