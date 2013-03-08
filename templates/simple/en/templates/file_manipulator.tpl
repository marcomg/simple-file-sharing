{include file='header.tpl'}

{if isset($file_name)}
<h2>Overview file:</h2>
File name: {$file_name}<br/>
File size: {$file_size}<br/>
File type: {$file_type}<br/>
File ID: {$file_new_name}<br/>
Password file: {if !empty($file_password)}{$file_password}{else}There was no password set{/if}<br/>
File visibility: {$file_visibility}<br/>
Share file: <input type="text" value="http://{$smarty.const.SCRIPT_URL}{$smarty.const.DIR_INSTALL}/index.php?action=download&file={$file_new_name}"/> (Remember that if the file is set to private no one outside of you can download it. To restrict access you can set a password.)
<br/>
<h2>File edit</h2>
Change password: <form action="index.php?action=file_manipulator&action_file=password_change&file={$file_new_name}" method="post" enctype="multipart/form-data">
    <input type="password" name="password" />
    <input type="submit" name="submit" value="Change Password" />
</form><br/>
<a href="index.php?action=file_manipulator&action_file=delete&file={$file_new_name}" onclick="return confirm('Warning! This operation is irreversible. The file {$file_name} will be removed from the system. Continue?')">Delete file</a><br/>

<a href="index.php?action=file_manipulator&action_file=idf_change&file={$file_new_name}" onclick="return confirm('Warning! This operation is irreversible. The file {$file_name} will not have the same identification code and then all the links associated with it will result in an error age and must be updated. Continue?')">Change file id</a><br/>

<a href="index.php?action=file_manipulator&action_file=visibility_change&file={$file_new_name}">{if ($file_visibility == 'public')}Make private file {else} Make the file public{/if}</a>
{/if}

{include file='footer.tpl'}
