{include file='header.tpl'}{strip}
<div class="container">
Loggiati compilando il seguente form:<br/>
<form method="post" action="index.php?action=login" name="login">
	<label>Nome utente:</label>
	<input type="text" name="username" /><br/>
	<label>Password:</label>
	<input type="password" name="password" /><br/>

	<input class="btn btn-primary" type="submit" value="Invia" name="send"/>
</form>
</div>
{/strip}{include file='footer.tpl'}
