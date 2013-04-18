{include file='header.tpl'}{strip}
        <div class="container">
            <form method="post" action="index.php?action=register" name="regitration">
                <h2>{t}Please sign up{/t}</h2>
                <label>{t}Username{/t}:</label>
                <input type="text" name="username" />
                <label>{t}Password{/t}:</label>
                <input type="password" name="password" />
                <label></label>
                <input class="btn btn-primary" type="submit" value="{t}Send{/t}" name="send"/>
           </form>
        </div>
{/strip}{include file='footer.tpl'}
