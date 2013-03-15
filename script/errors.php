<?php
$user = $login->whois_logged();

if($user != false){
    $smarty->assign('print_user_panel', 'true');
}

switch($_GET['error']){
    case '404':
        $smarty->display('error404.tpl');
    break;
    
    default:
        header('Location: index.php');
    break;
}
?>