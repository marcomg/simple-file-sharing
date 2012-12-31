<?php
// Effettuo il logout
$login->logout();

// Informo del risultato
$smarty->assign('title', $string['title_logout']);
$smarty->display('login_logout.tpl');
?>
