<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>{if isset($title)}{$title}{/if}</title>
<link rel="icon" href="{$smarty.const.DIR_TEMPLATE_IMGS}/favicon.ico" />
<link href="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<script src="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/jquery.js"></script>
<script src="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/js/bootstrap.min.js"></script>
<br/>

<div class="navbar navbar-static-top">
<ul class="nav">
{* Menù perenne *}
<li><a href="./">Home Page</a></li>

{* Menù utente *}
{if !isset($print_user_panel)}
{* Questo menù appare solo a chi non ha effettuato il login *}

<li><a href="./index.php?action=register">Registrati</a></li><li><a href="./index.php?action=login">Login</a></li>

{else}

{* Questo solo a chi lo ha effettuato *}

<li><a href="./index.php?action=upload">Upload</a></li><li><a href="./index.php?action=file_browser">File Browser</a></li><li><a href="./index.php?action=ucp&user_action=overview">Pannello di controllo utente</a></li><li><a href="./index.php?action=logout">Logout</a></li>

{/if}
</ul>
</div>
<br/>

{* Menù amministratore *}



<br/>
<p class="text-error">{if isset($error)}{$error}{/if}</p>
<br/>
