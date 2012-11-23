{include file='header.tpl'}

{if !empty($idf)}
<table border=1>
<tr>
    <td>Nome file</td>
    <td>Dimensione file</td>
    <td>Tipo file</td>
    <td>Password file</td>
    <td>Visibilità file</td>
    <td>Operazioni sul file</td>
</tr>
{/if}
{* idf, file_name, file_size, file_type, file_new_name, file_name, file_password, file_visibility *}
{section name=id loop=$idf}
<tr>
    <td>{$file_name[id]}</td>
    <td>{$file_size[id]}</td>
    <td>{$file_type[id]}</td>
    <td>{$file_password[id]}</td>
    <td>{$file_visibility[id]}</td>
    <td><a href='index.php?action=file_manipulator&action_file=overview&file={$file_new_name[id]}'>Modifica</a></td>
</tr>
{sectionelse}
Non c'è nessun file di tua proprietà nel nostro database. Per vederne uno devi caricarlo.
{/section}

{if !empty($idf)}
</table>
{/if}

{include file='footer.tpl'}