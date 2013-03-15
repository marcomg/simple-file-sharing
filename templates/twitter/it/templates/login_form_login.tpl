{include file='header.tpl'}
<div class="container">
Loggiati compilando il seguente form:<br/>
<form method="post" action="index.php?action=login" name="login">
	Nome utente:<br/>
	<input type="text" name="username" /><br/><br/>
	Password:<br/>
	<input type="password" name="password" /><br/><br/>

	<input class="btn btn-primary" type="submit" value="Invia" name="send"/>
</form>
</div>
{include file='footer.tpl'}
