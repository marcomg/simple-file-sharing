{include file='header.tpl'}
<div class="container">
{if isset($username)}
<h1>Ciao {$username}!</h1>
<p>
    Ciao <b>{$username}</b>,<br/>
    benvenuto nel pannello di controllo utente! Qui puoi leggere tutto ciò che riguarda te e puoi modificarlo. L'unica cosa che non puoi modificare è il tuo nome utente.
</p>

<h2>Resoconto sullo stato</h2>
<p>
    Password: <b>{$password}</b>
</p>
<p>
    Totale spazio occupato dai vari file: <b>{$space_occuped}</b> su un totale di <b>{$space_max}</b>
</p>


<h2>Modifiche utente</h2>
<form action="index.php?action=ucp&user_action=change_password" method="post" enctype="multipart/form-data">
    <label>Cambia la password:</label>
    <input type="password" name="password" />
    <input class="btn btn-primary" type="submit" name="submit" value="Cambia Password" />
</form>

<a class="btn btn-danger" href="./index.php?action=ucp&user_action=delete_user" onclick="return confirm('Sei sicuro di voler cancellare completamente il tuo account e tutti i file ad esso associati? Attenzione! Questa operazione è irreversibile!')">Cancella l'account</a>
{/if}
</div>
{include file='footer.tpl'}
