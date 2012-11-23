<?php /* Smarty version Smarty-3.1.11, created on 2012-10-04 14:43:07
         compiled from "/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1781991192506d845b08b600-66587817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14a8867a9b76d28f53871c1994cd204490f4dd47' => 
    array (
      0 => '/opt/lampp/htdocs/file_sharing/templates/simple/it/templates/index.tpl',
      1 => 1349348728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1781991192506d845b08b600-66587817',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_506d845b0b99c6_66184547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506d845b0b99c6_66184547')) {function content_506d845b0b99c6_66184547($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<br/>
<p>
Questo è un programma scritto in php che ha lo scopo di permettere agli utente registrati di condividere file. Questo è solo un testo poiché questo script non è stato ancora finito di programmare!</p>
<p>
Il programma verrà rilasciato sotto licenza GPLv3
</p>
<p>
In questa fase di test tutti gli utenti che si registrano possono caricare i propri file. Tutti i file che verranno caricati sono file di testo o immagini o archivi zippati senza licenza o con licenza libera.
</p>
<p>
Al fine di evitare che questo portale di test venga utilizzato come veicolo di condivisione di file protetti da copyright i file verranno cancellati spesso (almeno una volta al giorno) e si avrà pochissimo spazio di archiviazione.</p>
<p>
<b>Per poter caricare file o condividerli bisogna registrarsi. Una volta effettuato il login si avrà accesso ad un menù che permetterà di accedere alle funzionalità di upload</b></p>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>