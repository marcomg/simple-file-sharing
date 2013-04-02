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

// Setto i giusti menù
if($user['rule'] == 'admin'){
    $smarty->assign('print_admin_panel', 'true');
}

switch($_GET['action_file']){
    case 'delete':
        $query = $db->query('SELECT * FROM `files` WHERE `idu` = '.$user['idu'].' AND `file_new_name` = \''.$db->escape_string($_GET['file']).'\'');        
        if(empty($query)){
            header('Location: ./index.php?action=file_browser');
            exit;
        }
        // Cancello il file
        $result = $db->fetch_array($query);
        $filename = $result['file_new_name'];
        unlink(ROOT.'/uploads/'.$filename);
        $db->query('DELETE FROM `files` WHERE `file_new_name` = \''.$db->escape_string($_GET['file']).'\'');
        header('Location: ./index.php?action=file_browser');
        exit;
    break;
    
    case 'visibility_change':
        $query = $db->query('SELECT * FROM `files` WHERE `idu` = '.$user['idu'].' AND `file_new_name` = \''.$db->escape_string($_GET['file']).'\'');        
        if(empty($query)){
            header('Location: ./index.php?action=file_browser');
            exit;
        }
        $result = $db->fetch_array($query);
        if($result['file_visibility'] == 'public'){
            $file_visibility = 'private';
        }
        else{
            $file_visibility = 'public';
        }
        
        $db->query('UPDATE `files` SET `file_visibility` = \''.$file_visibility.'\' WHERE `idf` = '.$result['idf']);
        
        header('Location: ./index.php?action=file_browser');
        exit;
    break;
        
    case 'password_change':
        $query = $db->query('SELECT * FROM `files` WHERE `idu` = '.$user['idu'].' AND `file_new_name` = \''.$db->escape_string($_GET['file']).'\'');        
        if(empty($query)){
            header('Location: ./index.php?action=file_browser');
            exit;
        }
        $result = $db->fetch_array($query);
        
        $db->query('UPDATE `files` SET `file_password` = \''.$db->escape_string($_POST['password']).'\' WHERE `idf` = '.$result['idf']);
        
        header('Location: ./index.php?action=file_browser');
        exit;
    break;
    
    case 'idf_change':
        $query = $db->query('SELECT * FROM `files` WHERE `idu` = '.$user['idu'].' AND `file_new_name` = \''.$db->escape_string($_GET['file']).'\'');        
        if(empty($query)){
            header('Location: ./index.php?action=file_browser');
            exit;
        }
        
        $filename = null;
        while(file_exists(ROOT.'/uploads/'.$filename)){// Se 
            $filename = string_gen(LONG_FILE_NAME);
        }
        $db->query('UPDATE `files` SET `file_new_name` = \''.$filename.'\' WHERE `file_new_name` = \''.$db->escape_string($_GET['file']).'\'');
        if(copy(ROOT.'/uploads/'.$db->escape_string($_GET['file']), ROOT.'/uploads/'.$filename)){
            header('Location: ./index.php?action=file_browser');
        }
        unlink(ROOT.'/uploads/'.$db->escape_string($_GET['file']));
    break;
    
    case 'overview':
        $query = $db->query('SELECT * FROM `files` WHERE `idu` = '.$user['idu'].' AND `file_new_name` = \''.$db->escape_string($_GET['file']).'\'');        
        if(empty($query)){
            $smarty->assign('error', $string['file_not_found']);
            break;
        }
        $result = $db->fetch_array($query);//idf, idu, file_name, file_size, file_type, file_new_name, file_password, file_visibility
        
        //$smarty->assign('idf', $result['idf']);
        $smarty->assign('file_name', $result['file_name']);
        $smarty->assign('file_size', return_human_value($result['file_size']));
        $smarty->assign('file_type', $result['file_type']);
        $smarty->assign('file_new_name', $result['file_new_name']);
        $smarty->assign('file_password', $result['file_password']);
        $smarty->assign('file_visibility', $result['file_visibility']);
    break;
    
    default:
        header('Location: ./index.php?action=file_browser');
        exit;
    break;
}
$smarty->assign('title', $string['title_file_overview']);

$smarty->display('file_manipulator.tpl');

?>