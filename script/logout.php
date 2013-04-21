<?php
// Effettuo il logout
$login->logout();

// Informo del risultato
$smarty->assign('title', T_('Logout'));
$smarty->display('login_logout.tpl');
?>
