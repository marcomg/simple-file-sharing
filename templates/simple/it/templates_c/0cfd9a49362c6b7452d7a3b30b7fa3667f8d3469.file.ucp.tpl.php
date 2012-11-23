<?php /* Smarty version Smarty-3.1.11, created on 2012-11-19 12:14:36
         compiled from "/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/ucp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1680176872506e999e151ed5-41878650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cfd9a49362c6b7452d7a3b30b7fa3667f8d3469' => 
    array (
      0 => '/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/ucp.tpl',
      1 => 1353323507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1680176872506e999e151ed5-41878650',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_506e999e3a9005_79029383',
  'variables' => 
  array (
    'username' => 0,
    'password' => 0,
    'space_occuped' => 0,
    'space_max' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506e999e3a9005_79029383')) {function content_506e999e3a9005_79029383($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['username']->value)){?>
<h1>Ciao <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
!</h1>
<p>
    Ciao <b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</b>,<br/>
    benvenuto nel pannello di controllo utente! Qui puoi leggere tutto ciò che riguarda te e puoi modificarlo. L'unica cosa che non puoi modificare è il tuo nome utente.
</p>

<h2>Resoconto sullo stato</h2>
<p>
    Password: <i><?php echo $_smarty_tpl->tpl_vars['password']->value;?>
</i>
</p>
<p>
    Totale spazio occupato dai vari file: <i><?php echo $_smarty_tpl->tpl_vars['space_occuped']->value;?>
</i> su un totale di <?php echo $_smarty_tpl->tpl_vars['space_max']->value;?>

</p>


<h2>Modifiche utente</h2>
Cambia la password:<form action="index.php?action=ucp&user_action=change_password" method="post" enctype="multipart/form-data">
    <input type="password" name="password" />
    <input type="submit" name="submit" value="Cambia Password" />
</form>

<a href="./index.php?action=ucp&user_action=delete_user" onclick="return confirm('Sei sicuro di voler cancellare completamente il tuo account e tutti i file ad esso associati? Attenzione! Questa operazione è irreversibile!')">Cancella l'account</a>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>