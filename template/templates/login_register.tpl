{include file='header.tpl'}{strip}
        <div class="container">
            <div class="alert alert-success">
                <p>{t}Registration completed successfully!{/t}</p>
            </div>
            <p>{t}Here is the summary of your data. We suggest that you print this page.{/t}</p>
            <p>{t}Username{/t}: {$username}</p>
            <p>{t}Password{/t}: {$password}</p>
        </div>
{/strip}{include file='footer.tpl'}
