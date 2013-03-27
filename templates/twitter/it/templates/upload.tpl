{include file='header.tpl'}{strip}
<div class="container">
File uplodato con successo:<br/>
Dettagli file:<br/>
&bull; Nome file: {$file_name}<br/>
&bull; Dimensione file: {$file_weight}<br/>
&bull; Password di download per gli utenti non registrati: {$file_password}<br/>
&bull; Visibilità file: {$file_visibility}<br/>
<br/>
Link download file: <input type="text" value="{$link_file}"/><br/>
</div>
{/strip}{include file='footer.tpl'}
