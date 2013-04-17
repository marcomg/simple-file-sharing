<?php
// Effettuo il logout
$login->logout();

// Informo del risultato
$smarty->assign('title', _('Logout'));
$smarty->display('login_logout.tpl');
?>
