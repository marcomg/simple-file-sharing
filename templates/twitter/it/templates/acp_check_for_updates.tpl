{include file='header.tpl'}{strip}
{if !isset($error)}
        <div class="container">
{if ($available)== (true)}
            <div class="alert alert-info"><p>Ci sono aggiornamenti disponibili, l'ultima versione disponibile è la {$version}, clicca <a href="https://bitbucket.org/marcomg/simple-file-sharing">qui</a> per andare al sito ufficiale e scaricare l'ultima versione. Ricordati di leggere la guida su come installare il software!</p></div>
{else}
            <div class="alert alert-success"><p>Hai l'ultima versione disponibile</p></div>
{/if}
        </div>
{/if}
{/strip}{include file='footer.tpl'}
