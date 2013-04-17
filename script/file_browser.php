<?php

$user = $login->whois_logged();

if($user != false){
    $smarty->assign('print_user_panel', 'true');
}

// Controllo se è loggiato se no stampo un errore!
if(!$user){
    $smarty->assign('error', _('Error: you do not have permission to access this page').' '._('Login!'));
    $smarty->display('header.tpl');
    $smarty->display('footer.tpl');
    exit;
}

// Setto i giusti menù
if($user['rule'] == 'admin'){
    $smarty->assign('print_admin_panel', 'true');
}

// Prendo tutti i file dell'utente
$query = $db->query('SELECT * FROM `files` WHERE `idu` = '.$user['idu'].' ORDER BY `file_name` ASC');

// Li inserisco uno ad uno in un array
while ($result = $db->fetch_array($query)){
    $idf[] = $result['idf'];
    $file_name[] = $result['file_name'];
    $file_size[] = return_human_value($result['file_size']);
    $file_type[] = $result['file_type'];
    $file_new_name[] = $result['file_new_name'];
    $file_password[] = $result['file_password'];
    $file_visibility[] = $result['file_visibility'];
}
if(empty($idf)){
    $idf = null;
    $file_name = null;
    $file_size = null;
    $file_type = null;
    $file_new_name = null;
    $file_name = null;
    $file_password = null;
    $file_visibility = null;
}

// Li do in pasto a smarty in modo che li possa copiare
$smarty->assign('idf', $idf);
$smarty->assign('file_name', $file_name);
$smarty->assign('file_size', $file_size);
$smarty->assign('file_type', $file_type);
$smarty->assign('file_new_name', $file_new_name);
$smarty->assign('file_name', $file_name);
$smarty->assign('file_password', $file_password);
$smarty->assign('file_visibility', $file_visibility);

$smarty->assign('title', _('File browser'));

$smarty->display('file_browser.tpl');
?>