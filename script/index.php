<?php
$user = $login->is_logged();

if($user != false){
    $smarty->assign('print_user_panel', 'true');
}

$smarty->display('index.tpl');
?>
