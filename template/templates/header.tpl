{strip}
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{if isset($title)}{$title}{elseif isset($error)}{$error}{else}Unknow title{/if}</title>
        <!-- FAVICON
            ================================================== -->
        <link rel="icon" href="{$smarty.const.DIR_TEMPLATE_IMGS}/favicon.ico" />

        <!-- STYLES
            ================================================== -->
        <link href="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>
        <link href="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        
        <!-- JAVASCRIPTS
            ================================================== -->
        <script src="{$smarty.const.DIR_TEMPLATE_VAR}/js/jquery.js"></script>
        <script src="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/js/bootstrap.min.js"></script>
    </head>

    <body>
        <!-- NAVBAR
            ================================================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="https://code.google.com/p/simple-file-sharing/">simple-file-sharing</a>
                    <div class="nav-collapse collapse">
{* Menù perenne *}
                        <ul class="nav">
                            <li><a href="./"><i class="icon-home"></i> {t}Home Page{/t}</a></li>
                        </ul>
                        
{if !isset($print_user_panel)}
{* Questo menù utente anonimo*}
                        <ul class="nav pull-right">
                            <li><a href="./index.php?action=login"><i class="icon-eye-open"></i> {t}Login{/t}</a></li>
                            <li><a href="./index.php?action=register"><i class="icon-pencil"></i> {t}Register{/t}</a></li>
                        </ul>
{else}

{* Manù utente loggiato *}
                        <ul class="nav">
                            <li><a href="./index.php?action=upload"><i class="icon-upload"></i> {t}Upload{/t}</a></li>
                            <li><a href="./index.php?action=file_browser"><i class="icon-folder-open"></i> {t}File Browser{/t}</a></li>
                        </ul>
                    <!-- NAVBAR 2
                        ================================================== -->
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> {t}User{/t}<b class="caret"></b></a><!-- aggiungere  icon-white?? -->
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?action=ucp&amp;user_action=overview"><i class="icon-wrench"></i> {t}User control panel{/t}</a></li>
                                    <li class="divider"></li>
                                    <li><a href="index.php?action=logout">{t}Logout{/t}</a></li>
                                </ul>
                            </li>
                        </ul>
{/if}
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
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
{/strip}
