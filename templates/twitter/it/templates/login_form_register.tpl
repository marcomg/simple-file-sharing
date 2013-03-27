{include file='header.tpl'}{strip}
<div class="container">
Registrati compilando il seguente form:<br/>
<form method="post" action="index.php?action=register" name="regitration">
	<label>Nome utente:</label>
	<input type="text" name="username" /><br/>
	<label>Password:</label>
	<input type="password" name="password" /><br/>
	<input class="btn btn-primary" type="submit" value="Invia" name="send"/><br/>
<small>Tutti i campi sono obbligatori</small>
</form>
</div>
{/strip}{include file='footer.tpl'}
