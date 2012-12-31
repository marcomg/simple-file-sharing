{include file='header.tpl'}
Login compiling the form:<br/>
<form method="post" action="index.php?action=login" name="login">
	User name:<br/>
	<input type="text" name="username" /><br/><br/>
	Password:<br/>
	<input type="password" name="password" /><br/><br/>

	<input type="submit" value="Login" name="send"/>
</form>
{include file='footer.tpl'}
