{include file='header.tpl'}

{if isset($file_name)}
<h2>Panoramica file:</h2>
Nome file: {$file_name}<br/>
Dimensione file: {$file_size}<br/>
Tipo file: {$file_type}<br/>
Identificativo file: {$file_new_name}<br/>
Password file: {if !empty($file_password)}{$file_password}{else}Non è stata settata alcuna password{/if}<br/>
Visibilità file: {$file_visibility}<br/>
Condividi file: <input type="text" value="http://{$smarty.const.SCRIPT_URL}{$smarty.const.DIR_INSTALL}/index.php?action=download&file={$file_new_name}"/> (Ricorda che se il file è impostato come privato nessuno, al di fuori di te potrà scaricarlo. Per limitarne l'accesso puoi impostare una password.)
<br/>
<h2>Modifica file</h2>
Cambia password: <form action="index.php?action=file_manipulator&action_file=password_change&file={$file_new_name}" method="post" enctype="multipart/form-data">
    <input type="password" name="password" />
    <input type="submit" name="submit" value="Cambia Password" />
</form><br/>
<a href="index.php?action=file_manipulator&action_file=delete&file={$file_new_name}" onclick="return confirm('Attenzione! Questa operazione sarà irreversibile. Il file {$file_name} verrà eliminato dal sistema. Continuare? ')">Cancella file</a><br/>
<a href="index.php?action=file_manipulator&action_file=visibility_change&file={$file_new_name}">{if ($file_visibility == 'public')}Rendi il file privato{else}Rendi il file pubblico{/if}</a>
{/if}

{include file='footer.tpl'}