{include file='header.tpl'}{strip}
        <div class="container">
            <p>File uplodato con successo:</p>
            <p>Dettagli file:</p>
            <ul>
                <li>Nome file: {$file_name}</li>
                <li>Dimensione file: {$file_weight}</li>
                <li>Password di download per gli utenti non registrati: {$file_password}</li>
                <li>Visibilità file: {$file_visibility}</li>
            </ul>
            <p>Link download file: <input type="text" value="{$link_file}"/></p>
        </div>
{/strip}{include file='footer.tpl'}
