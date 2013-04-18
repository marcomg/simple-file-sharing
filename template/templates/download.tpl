{include file='header.tpl'}{strip}
        <div class="container">
{if isset($file_name)}
            <p>{t}File name{/t}: {$file_name}</p>
            <p>{t}File size{/t}: {$file_size}</p>
            <p>{t}Required password{/t}: {if isset($password_form)}{t}Yes{/t}.</p>
            <form action="index.php?action=download&amp;file={$file_new_name}&amp;info=no" method="post" enctype="multipart/form-data">
                <label>{t}Insert password{/t}:</label>
                <input type="password" name="password" />
                <label></label>
                <input class="btn btn-primary" type="submit" name="submit" value="{t}Download{/t}" />
            </form>
    {else}
            {t}No{/t}.
            <form action="index.php?action=download&amp;file={$file_new_name}&amp;info=no" method="post" enctype="multipart/form-data">
                <input class="btn btn-primary" type="submit" name="submit" value="{t}Download{/t}" />
            </form>
{/if}
{/if}
</div>
{/strip}{include file='footer.tpl'}
