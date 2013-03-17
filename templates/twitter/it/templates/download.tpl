{include file='header.tpl'}
<div class="container">
{if isset($file_name)}
    Nome file: {$file_name}<br/>
    Dimensione file: {$file_size}<br/>
    Password richiesta: {if isset($password_form)}Si.<br>
    Inserisci la password:
    <form action="index.php?action=download&amp;file={$file_new_name}&amp;info=no" method="post" enctype="multipart/form-data">
    <input type="password" name="password" /><br/>
    <input class="btn btn-primary" type="submit" name="submit" value="Download" />
    </form>
    {else}
    No.
    <form action="index.php?action=download&amp;file={$file_new_name}&amp;info=no" method="post" enctype="multipart/form-data">
    <input class="btn btn-primary" type="submit" name="submit" value="Download" />
    </form>
    {/if}
{/if}
</div>
{include file='footer.tpl'}
