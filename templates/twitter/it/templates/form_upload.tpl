{include file='header.tpl'}
<div class="container">
<script type="text/javascript">
function onSubmitButton(){
        document.getElementById("submitButtonDiv").style.display = "none";	
	document.getElementById("progressBar").style.display = "block";		
}
</script>

<form class="form-horizontal" action="index.php?action=upload" method="post" enctype="multipart/form-data" onsubmit="return onSubmitButton()">
<label>Visibilità file:<label>
<select name="visibility">
<option value="public">Pubblico</option>
<option value="private">Privato</option>
</select><br/>
<label>File (dimensione max: {$max_file_size}):<label>
<input type="file" name="file" /><br />
<label>Password:</label>
<input type="password" name="password" /><br/>
<br/>
<div id="submitButtonDiv">
<input class = "btn btn-primary" type="submit" name="submit" value="Upload" id="submitButton"/>
</div>

<div id="progressBar" style="display:none">
{html_image file="{$smarty.const.DIR_TEMPLATE_IMGS}/progress_bar.gif"}
</div>

</form>
<br/>
I campi contrassegnati da &bull; sono obbligatori.
</div>
{include file='footer.tpl'}
