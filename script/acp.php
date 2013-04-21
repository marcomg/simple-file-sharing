<?php
$user = $login->whois_logged();

// Setto i giusti menù
if($user != false){
    $smarty->assign('print_user_panel', 'true');
}

// Controllo se è loggiato se no stampo un errore!
if(!$user){
    $smarty->assign('error', T_('Error: you do not have permission to access this page').' '.T_('Login!'));
    $smarty->display('header.tpl');
    $smarty->display('footer.tpl');
    exit;
}

// Controllo che l'utente non sia admin e in tal caso errore
if($user['rule'] !== 'admin'){
    $smarty->assign('error', T_('Error: you do not have permission to access this page'));
    $smarty->display('header.tpl');
    $smarty->display('footer.tpl');
    exit;
}

// Setto i giusti menù
if($user['rule'] == 'admin'){
    $smarty->assign('print_admin_panel', 'true');
}

switch($_GET['admin_action']){
    case 'check_for_updates':
        $smarty->assign('title', T_('Check for updates'));
        
        // Prelevo la nostra versione
        $_ = file(ROOT.'/version.txt');
        $our_version = str_replace(PHP_EOL, null, $_[0]);
        
        // Prelevo la versione attuale, se ce un errore lo stampo
        $_ = file('https://bitbucket.org/marcomg/simple-file-sharing/raw/master/version.txt');
        
        if(!$_){
            $smarty->assign('error', T_('It is impossible to check for updates'));
            $version = 0;
        }
        else{
            $version = str_replace(PHP_EOL, null, $_[0]);
        }
        
        // Controllo se è da aggiornare solo se la pagina è stata scaricata
        if($_ !== false){
            $_ = version_compare($our_version, $version);
            // Se sono disponibili aggiornamenti
            if($_ == -1){
                $smarty->assign('available', true);
                $smarty->assign('version', $version);
            }
            // altrimenti
            else{
                $smarty->assign('available', false);
            }
        }
        $smarty->display('acp_check_for_updates.tpl');
    break;
    
    case 'overview':
        $smarty->assign('title', T_('Admin control panel'));
        $smarty->display('acp.tpl');
    break;
    
    default:
        header('Location: index.php?action=acp&user_action=overview');
    break;
}

?>
