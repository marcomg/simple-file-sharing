{strip}
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>{if isset($title)}{$title}{elseif isset($error)}{$error}{else}Unknow title{/if}</title>
<link rel="icon" href="{$smarty.const.DIR_TEMPLATE_IMGS}/favicon.ico" />
<link href="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="{$smarty.const.DIR_TEMPLATE_VAR}/js/jquery.js"></script>
<script src="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<br/>

<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-inner">
<div class="container">
<a class="brand" href="https://code.google.com/p/simple-file-sharing/">simple-file-sharing</a>
<ul class="nav">
{* Menù perenne *}
<li><a href="./">Home Page</a></li>

{if !isset($print_user_panel)}
{* Questo menù utente anonimo*}

<li><a href="./index.php?action=register">Registrati</a></li><li><a href="./index.php?action=login">Login</a></li>

{else}

{* Manù utente loggiato *}

<li><a href="./index.php?action=upload">Upload</a></li><li><a href="./index.php?action=file_browser">File Browser</a></li><li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Utente<b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="index.php?action=ucp&amp;user_action=overview">Pannello di controllo utente</a></li>
<li class="divider"></li>
<li><a href="index.php?action=logout">Logout</a></li>
</ul>
</li>

{/if}
</ul>
</div>
</div>
</div>
<br/>
<br/>
{if isset($error)}
<div class="container">
<div class="alert alert-error">
<p class="text-error">{$error}</p>
</div>
</div>
{/if}
{if isset($success)}
<div class="container">
<div class="alert alert-success">
<p class="text-error">{$success}</p>
</div>
</div>
{/if}
{if isset($info)}
<div class="container">
<div class="alert alert-info">
<p class="text-error">{$info}</p>
</div>
</div>
{/if}
<br/>
{/strip}
