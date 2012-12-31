{include file='header.tpl'}
Register compiling this form:<br/>
<form method="post" action="index.php?action=register" name="regitration">
	&bull;User name:<br/>
	<input type="text" name="username" /><br/><br/>
	&bull;Password:<br/>
	<input type="password" name="password" /><br/><br/>

	<input type="submit" value="Invia" name="send"/>
<small>Fields marked by &bull; are required.</small>
</form>
{include file='footer.tpl'}
