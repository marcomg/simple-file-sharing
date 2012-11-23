{include file='header.tpl'}
Loggiati compilando il seguente form:<br/>
<form method="post" action="index.php?action=login" name="login">
	Nome utente:<br/>
	<input type="text" name="username" /><br/><br/>
	Password:<br/>
	<input type="password" name="password" /><br/><br/>

	<input type="submit" value="Invia" name="send"/>
</form>
{include file='footer.tpl'}
