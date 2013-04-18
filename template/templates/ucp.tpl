{include file='header.tpl'}{strip}
        <div class="container">
{if isset($username)}
            <h1>{t 1=$username}Hallo %1!{/t}</h1>
            <p>{t 1=$username}Hallo <b>%1</b>,<br/>welcome to the user control panel! Here you can real all regards you and you can edit it.{/t} {t}The only one thing you can't edit is your username.{/t}
            </p>

            <h2>{t}Status report{/t}</h2>
            <p>{t}Password{/t}: <b>{$password}</b></p>
            <p>{t}Total space of files{/t}: <b>{$space_occuped}</b> {t}of a total of{/t} <b>{$space_max}</b></p>

            <h2>{t}User changes{/t}</h2>
            <form class="form-horizontal" action="index.php?action=ucp&amp;user_action=change_password" method="post" enctype="multipart/form-data">
                <label>{t}Change password{/t}:</label>
                <input type="password" name="password" />
                <input class="btn btn-primary" type="submit" name="submit" value="{t}Change password{/t}" />
            </form>

            <div class="alert alert-error">
                <h3>{t}Dangerous zone!{/t}</h3>
                <p><a class="btn btn-danger" href="./index.php?action=ucp&amp;user_action=delete_user" onclick="return confirm('{t}Are you sure you want to delete your account and all files associated with it? Caution! This operation is irreversible!{/t}')">{t}Delete your account{/t}</a></p>
            </div>
{/if}
    </div>
{/strip}{include file='footer.tpl'}
