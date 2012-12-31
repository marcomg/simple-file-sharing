<?php
// Se è inviato il form
if(isset($_POST['username']) and isset($_POST['username']) and !empty($_POST['username']) and !empty($_POST['username'])){

	// Se il login non è valido stampo il l'errore
	if(!$login->login($_POST['username'], $_POST['password'])){
		$smarty->assign('error', $string['error_incorrect_username_or_password']);
        $smarty->assign('title', 'title_login_false');
		$smarty->display('header.tpl');
		$smarty->display('footer.tpl');
		exit;
	}

	else{
		// Se non c'è alcun errore sono stato loggiato e stampo a video l'informazione
        $smarty->assign('title', 'title_login_true');
		$smarty->display('login_login.tpl');

	}
}
// Altrimenti stampo il form
else{
    $smarty->assign('title', 'title_login');
	$smarty->display('login_form_login.tpl');
}
?>
