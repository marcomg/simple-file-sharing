{include file='header.tpl'}{strip}
        <div class="container">
            <p>{t}File succesfull uploaded{/t}:</p>
            <p>{t}File details{/t}:</p>
            <ul>
                <li>{t}File name{/t}: {$file_name}</li>
                <li>{t}File size{/t}: {$file_weight}</li>
                <li>{t}Password for download{/t}: {$file_password}</li>
                <li>{t}Visibility file{/t}: {$file_visibility}</li>
            </ul>
            <p>{t}Link download file{/t}: <input type="text" value="{$link_file}"/></p>
        </div>
{/strip}{include file='footer.tpl'}
