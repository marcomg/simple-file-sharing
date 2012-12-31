{include file='header.tpl'}

{if !empty($idf)}
<table border=1>
<tr>
    <td>File name</td>
    <td>File size</td>
    <td>File type</td>
    <td>File password</td>
    <td>File visibility</td>
    <td>Operations on the file</td>
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
There are no files of your property in our database. To see one you have to load it.
{/section}

{if !empty($idf)}
</table>
{/if}

{include file='footer.tpl'}
