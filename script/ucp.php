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

// Setto i giusti menù
if($user['rule'] == 'admin'){
    $smarty->assign('print_admin_panel', 'true');
}

// A seconda dell'azione settata la eseguo
switch($_GET['user_action']){
    case 'change_password':
        if(!empty($_POST['password']))
        $login->change_password($user['username'], $_POST['password']);
        header('Location: ./index.php?action=ucp&user_Action=overview');
    break;
    
    case 'delete_user':
        $login->logout();
        $result = $db->query('SELECT `file_new_name` FROM `files` WHERE `idu` = \''.$user['idu'].'\'');
        // Metto i file in un array
        while($result_ = $db->fetch_array($result)){
            $files[] = $result_['file_new_name'];
        }
        // Cancello l'elenco dei file nel database
        $db->query('DELETE FROM `files` WHERE `idu` = \''.$user['idu'].'\'');
        // Cancello i file dall'archivio
        foreach($files as $file){
            echo(ROOT.'/uploads/'.$file);
            unlink(ROOT.'/uploads/'.$file);
        }
        // Cancello l'utente
        $login->unregister($user['username']);
        header('Location: ./index.php?action=ucp&user_action=overview');
    break;
    
    // Questa azione prevede di recuperare i dati necessarei a smarty per essere visualizzati a video.
    case 'overview':
        $smarty->assign('username', $user['username']);
        $smarty->assign('password', $user['password']);
        $smarty->assign('space_occuped', return_human_value(space_occuped($user['idu'])));
        $smarty->assign('space_max', return_human_value(MAX_DATA_FOR_USER));
    break;
    
    default:
        header('Location: ./index.php?action=ucp&user_action=overview');
    break;
    
}

$smarty->assign('title', T_('User control panel'));

$smarty->display('ucp.tpl');
?>
