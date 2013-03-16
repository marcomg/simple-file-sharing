{include file='header.tpl'}
<div class="container">
Loggiati compilando il seguente form:<br/>
<form class="form-horizontal" method="post" action="index.php?action=login" name="login">
	<label>Nome utente:</label>
	<input type="text" name="username" /><br/>
	<label>Password:</label>
	<input type="password" name="password" /><br/>

	<input class="btn btn-primary" type="submit" value="Invia" name="send"/>
</form>
</div>
{include file='footer.tpl'}
