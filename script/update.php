<?php
$user = $login->whois_logged();

// Setto i giusti menù
if($user != false){
    $smarty->assign('print_user_panel', 'true');
}

// Controllo se è loggiato se no stampo un errore!
if(!$user){
    $smarty->assign('error', $string['access_denied'].' '.$string['required_login']);
    $smarty->display('header.tpl');
    $smarty->display('footer.tpl');
    exit;
}

// Controllo che l'utente non sia admin
if($user['rule'] !== 'admin'){
    $smarty->assign('error', $string['access_denied']);
    $smarty->display('header.tpl');
    $smarty->display('footer.tpl');
    exit;
}

// Setto il titolo
$smarty->assign('title', $string['title_update']);

// Prelevo la nostra versione
$_ = file(ROOT.'/version.txt');
$our_version = str_replace(PHP_EOL, null, $_[0]);

// Prelevo la versione attuale, se ce un errore lo stampo
$_ = file('https://bitbucket.org/marcomg/simple-file-sharing/raw/master/version.txt');

if(!$_){
    $smarty->assign('error', $string['error_check_updates']);
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

$smarty->display('update.tpl');
?>
