{include file='header.tpl'}{strip}
{if !isset($error)}
        <div class="container">
{if ($available)== (true)}
            <div class="alert alert-info"><p>{t 1=$version}There are updates available, the latest available version is %1, click{/t}<a href="https://bitbucket.org/marcomg/simple-file-sharing">{t}here{/t}</a>{t}to go to the official website and download the latest version. Remember to read the guide on how to install the software!}</p></div>
{else}
            <div class="alert alert-success"><p>{t}You have the latest version available{/t}</p></div>
{/if}
        </div>
{/if}
{/strip}{include file='footer.tpl'}
