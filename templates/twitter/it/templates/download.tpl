{include file='header.tpl'}{strip}
        <div class="container">
{if isset($file_name)}
            <p>Nome file: {$file_name}</p>
            <p>Dimensione file: {$file_size}</p>
            <p>Password richiesta: {if isset($password_form)}Si.</p>
            <form action="index.php?action=download&amp;file={$file_new_name}&amp;info=no" method="post" enctype="multipart/form-data">
                <label>Inserisci la password:</label>
                <input type="password" name="password" />
                <label></label>
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
{/strip}{include file='footer.tpl'}
