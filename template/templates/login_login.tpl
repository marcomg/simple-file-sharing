{include file='header.tpl'}{strip}
        <div class="container">
            <p class="alert alert-success">
                {t}Login successful :-){/t}<br/>
                {t}You will be redirected to the home page short ;-){/t}<br/>
            </p>
            <meta http-equiv="refresh" content="3;url=index.php"> 
        </div>
{/strip}{include file='footer.tpl'}
