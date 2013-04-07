{include file='header.tpl'}{strip}
        <div class="container">
            <div class="alert alert-success">
                <p>Registrazione completata con successo!</p>
            </div>
            <p>Ecco il riassunto dei tuoi dati. Ti consigliamo di stampare questa pagina.</p>
            <p>Username: {$username}</p>
            <p>Password: {$password}</p>
        </div>
{/strip}{include file='footer.tpl'}
