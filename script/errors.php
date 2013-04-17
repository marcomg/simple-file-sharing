<?php
$user = $login->whois_logged();

if($user != false){
    $smarty->assign('print_user_panel', 'true');
}

// Setto i giusti menù
if($user['rule'] == 'admin'){
    $smarty->assign('print_admin_panel', 'true');
}

switch($_GET['error']){
    case '404':
        header("Status: 404 Not Found");
        $smarty->assign('title', _('Error 404'));
        $smarty->display('error404.tpl');
    break;
    
    default:
        header('Location: index.php');
    break;
}
?>
