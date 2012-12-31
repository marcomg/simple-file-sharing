{include file='header.tpl'}
<br/>

<script type="text/javascript">
function onSubmitButton(){
        document.getElementById("submitButtonDiv").style.display = "none";	
	document.getElementById("progressBar").style.display = "block";		
}
</script>

<form action="index.php?action=upload" method="post" enctype="multipart/form-data" onsubmit="return onSubmitButton()">
&bull;File visibility:<br/>
<select name="visibility">
<option value="public">Public</option>
<option value="private">Private</option>
</select><br/>
&bull;File (max size: {$max_file_size}):<br/>
<input type="file" name="file" /><br />
<br/>
Password:<br/>
<input type="password" name="password" /><br/>
<br/>

<div id="submitButtonDiv">
<input type="submit" name="submit" value="Upload" id="submitButton"/>
</div>

<div id="progressBar" style="display:none">
{html_image file="{$smarty.const.DIR_TEMPLATE_IMGS}/progress_bar.gif"}
</div>

</form>
<br/>
Fields marked with &bull; are mandatory.
{include file='footer.tpl'}
