<?php
// Se è inviato il form
if(isset($_POST['username']) and isset($_POST['username']) and !empty($_POST['username']) and !empty($_POST['username'])){

	// Se il login non è valido stampo il l'errore
	if(!$login->login($_POST['username'], $_POST['password'])){
		$smarty->assign('error', T_('Error: username or password is incorrect'));
        	$smarty->assign('title', T_('Login wrong'));
		$smarty->display('login_form_login.tpl');
		exit;
	}

	else{
		// Se non c'è alcun errore sono stato loggiato e stampo a video l'informazione
        $smarty->assign('title', T_('Login successful'));
		$smarty->display('login_login.tpl');

	}
}
// Altrimenti stampo il form
else{
    $smarty->assign('title', T_('Login'));
	$smarty->display('login_form_login.tpl');
}
?>
