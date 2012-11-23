<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>{if isset($title)}{$title}{/if}</title>
</head>
<body>
<br/>

{* Menù perenne *}
<a href="./">Home Page</a>

{* Menù utente *}
{if !isset($print_user_panel)}
{* Questo menù appare solo a chi non ha effettuato il login *}

&bull; <a href="./index.php?action=register">Registrati</a> &bull; <a href="./index.php?action=login">Login</a><br/>

{else}

{* Questo solo a chi lo ha effettuato *}

&bull;  <a href="./index.php?action=upload">Upload</a> &bull; <a href="./index.php?action=file_browser">File Browser</a> &bull; <a href="./index.php?action=ucp&user_action=overview">Pannello di controllo utente</a> &bull; <a href="./index.php?action=logout">Logout</a><br/>

{/if}



{* Menù amministratore *}



<br/>
{if isset($error)}{$error}{/if}
<br/>
