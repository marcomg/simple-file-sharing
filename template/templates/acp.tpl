{include file='header.tpl'}{strip}
        <div class="container">
            <h1>{t}Admin control panel{/t}</h1>
            <h3>{t}Welcome admin!{/t}</h3>
            <p>{t}Welcome admin in the admin control panel, here you can perform tasks from admin!{/t}</p>
            <p>
                <ul>
                    <li><a href="index.php?action=acp&admin_action=check_for_updates">{t}Check for updates{/t}</a></li>
                </ul>
            </p>
        </div>
{/strip}{include file='footer.tpl'}
