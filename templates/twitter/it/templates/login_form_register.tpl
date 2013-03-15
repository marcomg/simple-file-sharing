{include file='header.tpl'}
<div class="container">
Registrati compilando il seguente form:<br/>
<form method="post" action="index.php?action=register" name="regitration">
	Nome utente:<br/>
	<input type="text" name="username" /><br/><br/>
	Password:<br/>
	<input type="password" name="password" /><br/><br/>

	<input class="btn btn-primary" type="submit" value="Invia" name="send"/><br/>
<small>Tutti i campi sono obbligatori</small>
</form>
</div>
{include file='footer.tpl'}
