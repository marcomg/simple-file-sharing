<?php /* Smarty version Smarty-3.1.13, created on 2013-04-18 14:32:48
         compiled from "/opt/lampp/htdocs/simple-file-sharing/template/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173132028516fe7f07799c4-45033378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '934af0bd25331b94e7e7c5590619c82948ffaeb0' => 
    array (
      0 => '/opt/lampp/htdocs/simple-file-sharing/template/templates/header.tpl',
      1 => 1366225605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173132028516fe7f07799c4-45033378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'error' => 0,
    'print_user_panel' => 0,
    'success' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_516fe7f07f40b1_91542762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516fe7f07f40b1_91542762')) {function content_516fe7f07f40b1_91542762($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/opt/lampp/htdocs/simple-file-sharing/includes/classes/smarty/plugins/block.t.php';
?><!DOCTYPE html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title><?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['error']->value)){?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }else{ ?>Unknow title<?php }?></title><!-- FAVICON================================================== --><link rel="icon" href="<?php echo @constant('DIR_TEMPLATE_IMGS');?>
/favicon.ico" /><!-- STYLES================================================== --><link href="<?php echo @constant('DIR_TEMPLATE_VAR');?>
/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"><style>body {padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */}</style><link href="<?php echo @constant('DIR_TEMPLATE_VAR');?>
/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen"><!-- JAVASCRIPTS================================================== --><script src="<?php echo @constant('DIR_TEMPLATE_VAR');?>
/js/jquery.js"></script><script src="<?php echo @constant('DIR_TEMPLATE_VAR');?>
/bootstrap/js/bootstrap.min.js"></script></head><body><!-- NAVBAR================================================== --><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="brand" href="https://code.google.com/p/simple-file-sharing/">simple-file-sharing</a><div class="nav-collapse collapse"><ul class="nav"><li><a href="./"><i class="icon-home"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Home Page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li></ul><?php if (!isset($_smarty_tpl->tpl_vars['print_user_panel']->value)){?><ul class="nav pull-right"><li><a href="./index.php?action=login"><i class="icon-eye-open"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li><li><a href="./index.php?action=register"><i class="icon-pencil"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Register<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li></ul><?php }else{ ?><ul class="nav"><li><a href="./index.php?action=upload"><i class="icon-upload"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li><li><a href="./index.php?action=file_browser"><i class="icon-folder-open"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
File Browser<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li></ul><!-- NAVBAR 2================================================== --><ul class="nav pull-right"><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<b class="caret"></b></a><!-- aggiungere  icon-white?? --><ul class="dropdown-menu"><li><a href="index.php?action=ucp&amp;user_action=overview"><i class="icon-wrench"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User control panel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li><li class="divider"></li><li><a href="index.php?action=logout"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Logout<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li></ul></li></ul><?php }?></div><!--/.nav-collapse --></div></div></div><?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?><div class="container"><div class="alert alert-error"><p class="text-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p></div></div><?php }?><?php if (isset($_smarty_tpl->tpl_vars['success']->value)){?><div class="container"><div class="alert alert-success"><p class="text-error"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</p></div></div><?php }?><?php if (isset($_smarty_tpl->tpl_vars['info']->value)){?><div class="container"><div class="alert alert-info"><p class="text-error"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</p></div></div><?php }?>
<?php }} ?>