{include file='header.tpl'}{strip}
        <div class="container">
            <form method="post" action="index.php?action=register" name="regitration">
                <h2>Per favore registrati</h2>
                <label>Nome utente:</label>
                <input type="text" name="username" />
                <label>Password:</label>
                <input type="password" name="password" />
                <label></label>
                <input class="btn btn-primary" type="submit" value="Invia" name="send"/>
           </form>
        </div>
{/strip}{include file='footer.tpl'}
