{include file='header.tpl'}{strip}
        <div class="container">
{if isset($file_name)}
            <h3>Panoramica file</h3>
            <p>Nome file: {$file_name}</p>
            <p>Dimensione file: {$file_size}</p>
            <p>Tipo file: {$file_type}</p>
            <p>Identificativo file: {$file_new_name}</p>
            <p>Password file: {if !empty($file_password)}{$file_password}{else}Non è stata settata alcuna password{/if}</p>
            <p>Visibilità file: {$file_visibility}</p>
            <p>Condividi file: <input type="text" value="http://{$smarty.const.SCRIPT_URL}{$smarty.const.DIR_INSTALL}/index.php?action=download&amp;file={$file_new_name}"/> (Ricorda che se il file è impostato come privato nessuno, al di fuori di te potrà scaricarlo. Per limitarne l'accesso puoi impostare una password.)</p>

            <h3>Modifica file</h3>
            <form class="form-horizontal" action="index.php?action=file_manipulator&amp;action_file=password_change&amp;file={$file_new_name}" method="post" enctype="multipart/form-data">
                <label>Cambia password:<label> 
                <input type="password" name="password" />
                <input class="btn" type="submit" name="submit" value="Cambia Password" />
            </form>

            <label></label>
            <p><a class="btn" href="index.php?action=file_manipulator&amp;action_file=visibility_change&amp;file={$file_new_name}">{if ($file_visibility == 'public')}Rendi il file privato{else}Rendi il file pubblico{/if}</a></p>

            <div class="alert alert-error">
                <h3>Zona pericolosa!</h3>
                <p><a class="btn btn-danger" href="index.php?action=file_manipulator&amp;action_file=idf_change&amp;file={$file_new_name}" onclick="return confirm('Attenzione! Questa operazione sarà irreversibile. Il file {$file_name} non avrà più lo stesso codice identificativo e quindi tutti i link ad esso associati porteranno ad un errore e dovranno essere aggiornati. Continuare? ')">Cambia l'identificativo del file</a>
                <p><a class="btn btn-danger" href="index.php?action=file_manipulator&amp;action_file=delete&amp;file={$file_new_name}" onclick="return confirm('Attenzione! Questa operazione sarà irreversibile. Il file {$file_name} verrà eliminato dal sistema. Continuare? ')">Cancella file</a></p>
            </div>
{/if}
        </div>
{/strip}{include file='footer.tpl'}
