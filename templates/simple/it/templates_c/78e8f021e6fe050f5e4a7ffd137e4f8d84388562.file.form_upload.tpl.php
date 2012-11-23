<?php /* Smarty version Smarty-3.1.11, created on 2012-10-04 15:21:01
         compiled from "./templates/simple/it/templates/form_upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:846748283506d8d279daa63-89902648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78e8f021e6fe050f5e4a7ffd137e4f8d84388562' => 
    array (
      0 => './templates/simple/it/templates/form_upload.tpl',
      1 => 1349356859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '846748283506d8d279daa63-89902648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_506d8d27a17024_04714864',
  'variables' => 
  array (
    'max_file_size' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506d8d27a17024_04714864')) {function content_506d8d27a17024_04714864($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_image')) include '/opt/lampp/htdocs/file_sharing/includes/classes/smarty/plugins/function.html_image.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<br/>

<script type="text/javascript">
function onSubmitButton(){
        document.getElementById("submitButtonDiv").style.display = "none";	
	document.getElementById("progressBar").style.display = "block";		
}
</script>

<form action="index.php?action=upload" method="post" enctype="multipart/form-data" onsubmit="return onSubmitButton()">
&bull;Visibilità file:<br/>
<select name="visibility">
<option value="public">Pubblico</option>
<option value="private">Privato</option>
</select><br/>
&bull;File (dimensione max: <?php echo $_smarty_tpl->tpl_vars['max_file_size']->value;?>
):<br/>
<input type="file" name="file" /><br />
<br/>
Password:<br/>
<input type="password" name="password" /><br/>
<br/>

<div id="submitButtonDiv">
<input type="submit" name="submit" value="Upload" id="submitButton"/>
</div>

<div id="progressBar" style="display:none">
<?php echo dirname($_smarty_tpl->source->filepath);?>

<?php echo smarty_function_html_image(array('file'=>((string)dirname($_smarty_tpl->source->filepath))."/images/progress_bar.gif"),$_smarty_tpl);?>

</div>

</form>
<br/>
I campi contrassegnati da &bull; sono obbligatori.
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>