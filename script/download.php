<?php
$user = $login->whois_logged();

if($user != false){
    $smarty->assign('print_user_panel', 'true');
}

// Se non è settato alcun file da scaricare stampo un errore.
if(!isset($_GET['file']) or empty($_GET['file'])){
    $smarty->assign('error', $string['file_not_isset']);
    $smarty->display('download.tpl');
    exit;
}
else{
    $_GET['file'] = $db->escape_string($_GET['file']);
}

$query = $db->query('SELECT * FROM `files` WHERE `file_new_name` = \''.$_GET['file'].'\'');
$result = $db->fetch_array($query);

if(empty($result)){
    $smarty->assign('error', $string['file_not_exist']);
    $smarty->display('download.tpl');
    exit;
}

// Se il file è salvato come privato e chi lo sta scaricando non è il proprietario blocco il download
if($result['file_visibility'] == 'private' and $result['idu'] != $user['idu']){
    $smarty->assign('error', $string['downloader_not_proprietary']);
    $smarty->display('download.tpl');
    exit;
}

// Controllo per sicurezza che il file esista, se non esiste il database non è integro
if(!file_exists(ROOT.'/uploads/'.$result['file_new_name'])){
    $smarty->assign('error', $string['error_integry_database']);
    $smarty->display('download.tpl');
    exit;
}

//Altri controlli che attualmente non ci sono
//
//

// Tutti i controlli sono stati superati con successo, chi scarica è autorizzato e stampo una pagina con le info sul file
if(!isset($_GET['info']) or empty($_GET['info']) or $_GET['info'] == 'yes'){
    if(!empty($result['file_password'])){
        $smarty->assign('password_form', 'yes');
    }
    $smarty->assign('file_name', $result['file_name']);
    $smarty->assign('file_size', return_human_value($result['file_size']));
    $smarty->assign('file_new_name', $result['file_new_name']);
}

if(isset($_GET['info']) and $_GET['info'] == 'no'){
    if(!empty($result['file_password']) and isset($_POST['password']) and $result['file_password'] == $_POST['password']){
        $can_download = 'yes';
    }
    else{
        $can_download = 'no';
        $smarty->assign('error', $string['file_password_wrong']);
    }
    if(empty($result['file_password'])){
        $can_download = 'yes';
    }
}
if(isset($can_download) and $can_download == 'yes'){    
    header('Cache-Control: public');
    header('Content-Description: File Transfer');
    header('Content-type: '.$result['file_type']);
    header('Content-Disposition: attachment; filename= ' . $result['file_name']);
    header('Content-Length: '.$result['file_size']);
    header('Content-Transfer-Encoding: binary');
    readfile(ROOT.'/uploads/'.$_GET['file']);
    exit;
}
$smarty->assign('title', $string['title_download']);
$smarty->display('download.tpl');
?>
