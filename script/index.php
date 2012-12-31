<?php
$user = $login->is_logged();

if($user != false){
    $smarty->assign('print_user_panel', 'true');
}
$smarty->assign('title', $string['title_home_page']);
$smarty->display('index.tpl');
?>
