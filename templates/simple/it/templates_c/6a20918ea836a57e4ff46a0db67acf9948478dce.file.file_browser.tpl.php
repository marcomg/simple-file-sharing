<?php /* Smarty version Smarty-3.1.11, created on 2012-10-05 13:15:36
         compiled from "/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/file_browser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:760599132506ec1583eab52-13294217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a20918ea836a57e4ff46a0db67acf9948478dce' => 
    array (
      0 => '/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/file_browser.tpl',
      1 => 1347900356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '760599132506ec1583eab52-13294217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'idf' => 0,
    'file_name' => 0,
    'file_size' => 0,
    'file_type' => 0,
    'file_password' => 0,
    'file_visibility' => 0,
    'file_new_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_506ec1584dce19_16882829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506ec1584dce19_16882829')) {function content_506ec1584dce19_16882829($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (!empty($_smarty_tpl->tpl_vars['idf']->value)){?>
<table border=1>
<tr>
    <td>Nome file</td>
    <td>Dimensione file</td>
    <td>Tipo file</td>
    <td>Password file</td>
    <td>Visibilità file</td>
    <td>Operazioni sul file</td>
</tr>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['idf']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['file_name']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['file_size']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['file_type']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['file_password']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['file_visibility']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</td>
    <td><a href='index.php?action=file_manipulator&action_file=overview&file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
'>Modifica</a></td>
</tr>
<?php endfor; else: ?>
Non c'è nessun file di tua proprietà nel nostro database. Per vederne uno devi caricarlo.
<?php endif; ?>

<?php if (!empty($_smarty_tpl->tpl_vars['idf']->value)){?>
</table>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>