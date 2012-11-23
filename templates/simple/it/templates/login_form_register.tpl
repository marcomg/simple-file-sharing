{include file='header.tpl'}
Registrati compilando il seguente form:<br/>
<form method="post" action="index.php?action=register" name="regitration">
	&bull;Nome utente:<br/>
	<input type="text" name="username" /><br/><br/>
	&bull;Password:<br/>
	<input type="password" name="password" /><br/><br/>

	<input type="submit" value="Invia" name="send"/>
<small>I campi contrassegnati da &bull; sono obbligatori.</small>
</form>
{include file='footer.tpl'}
