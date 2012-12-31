{include file='header.tpl'}

{if isset($file_name)}
    File name: {$file_name}<br/>
    File size: {$file_size}<br/>
    Password required: {if isset($password_form)}Yes.<br>
    Enter the password:
    <form action="index.php?action=download&file={$file_new_name}&info=no" method="post" enctype="multipart/form-data">
    <input type="password" name="password" /><br/>
    <input type="submit" name="submit" value="Download" />
    </form>
    {else}
    No.
    <form action="index.php?action=download&file={$file_new_name}&info=no" method="post" enctype="multipart/form-data">
    <input type="submit" name="submit" value="Download" />
    </form>
    {/if}
{/if}

{include file='footer.tpl'}
