{include file='header.tpl'}{strip}
        <div class="container">
{if isset($file_name)}
            <h3>{t}File overview{/t}</h3>
            <p>{t}File name{/t}: {$file_name}</p>
            <p>{t}File size{/t}: {$file_size}</p>
            <p>{t}File type{/t}: {$file_type}</p>
            <p>{t}File ID{/t}: {$file_new_name}</p>
            <p>{t}File password{/t}: {if !empty($file_password)}{$file_password}{else}{t}There is no password{/t}{/if}</p>
            <p>{t}File visibility{/t}: {$file_visibility}</p>
            <p>Condividi file: <input type="text" value="http://{$smarty.const.SCRIPT_URL}{$smarty.const.DIR_INSTALL}/index.php?action=download&amp;file={$file_new_name}"/> ({t}Remember that if the file is set to private anyone outside of you can download it. To restrict access you can set a password.{/t})</p>

            <h3>{t}File edit{/t}</h3>
            <form class="form-horizontal" action="index.php?action=file_manipulator&amp;action_file=password_change&amp;file={$file_new_name}" method="post" enctype="multipart/form-data">
                <label>{t}Change password{/t}:<label> 
                <input type="password" name="password" />
                <input class="btn" type="submit" name="submit" value="{t}Change password{/t}" />
            </form>

            <label></label>
            <p><a class="btn" href="index.php?action=file_manipulator&amp;action_file=visibility_change&amp;file={$file_new_name}">{if ($file_visibility == 'public')}{t}Mark the file as private{/t}{else}{t}Mark the file as public{/t}{/if}</a></p>

            <div class="alert alert-error">
                <h3>{t}Dangerous zone!{/t}</h3>
                <p><a class="btn btn-danger" href="index.php?action=file_manipulator&amp;action_file=idf_change&amp;file={$file_new_name}" onclick="return confirm('{t 1=$file_name}Caution! This operation is irreversible. The file %1 will no longer have the same identification code and then all the links associated with it will lead to an error and must be upgraded. Continue?{/t}')">{t}Change file ID{/t}</a>
                <p><a class="btn btn-danger" href="index.php?action=file_manipulator&amp;action_file=delete&amp;file={$file_new_name}" onclick="return confirm('{t 1=$file_name}Caution! This operation is irreversible. The file %1 is removed from the system. Continue?{/t}')">{t}Delete file{/t}</a></p>
            </div>
{/if}
        </div>
{/strip}{include file='footer.tpl'}
