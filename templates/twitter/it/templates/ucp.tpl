{include file='header.tpl'}
{if isset($username)}
<h1>Ciao {$username}!</h1>
<p>
    Ciao <b>{$username}</b>,<br/>
    benvenuto nel pannello di controllo utente! Qui puoi leggere tutto ciò che riguarda te e puoi modificarlo. L'unica cosa che non puoi modificare è il tuo nome utente.
</p>

<h2>Resoconto sullo stato</h2>
<p>
    Password: <i>{$password}</i>
</p>
<p>
    Totale spazio occupato dai vari file: <i>{$space_occuped}</i> su un totale di {$space_max}
</p>


<h2>Modifiche utente</h2>
Cambia la password:<form action="index.php?action=ucp&user_action=change_password" method="post" enctype="multipart/form-data">
    <input type="password" name="password" />
    <input type="submit" name="submit" value="Cambia Password" />
</form>

<a href="./index.php?action=ucp&user_action=delete_user" onclick="return confirm('Sei sicuro di voler cancellare completamente il tuo account e tutti i file ad esso associati? Attenzione! Questa operazione è irreversibile!')">Cancella l'account</a>
{/if}
{* <h1>Questa sezione non è stata ancora programmata.<br/>
Lavori in corso ...</h1> *}
{include file='footer.tpl'}
