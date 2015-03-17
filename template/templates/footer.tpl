{strip}
        <br/>
        <div class="container">
            <div class="text-center">
{* Link all' apc *}
{if isset($print_admin_panel)}
                <p><a href="index.php?action=acp&amp;admin_action=overview">Pannello di controllo amministratore</a></p>
{/if}
                <p><small class="muted">{t}Powered by{/t} <a href="https://bitbucket.org/marcomg/simple-file-sharing/">simple-file-sharing</a> {t}created by{/t} marcomg</small></p>
            </div>
        </div>
    </body>
</html>
{/strip}
