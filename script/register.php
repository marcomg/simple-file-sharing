<?php
if(USER_CAN_REGISTER == 'false'){
    $smarty->assign('error', $string['registration_disabled']);
    $smarty->display('title', 'title_register');
    $smarty->display('login_form_register.tpl');
    exit;
}

// Se è inviato il form e tutti i campi sono stati inviati:
if(isset($_POST['username']) or isset($_POST['username']) or !empty($_POST['username']) or !empty($_POST['password'])){

	// Se c'è un qualche errore (es: username già registrato) allora stampo l'errore:
	if(!$login->register($_POST['username'], $_POST['password'])){
		$smarty->assign('error', $string['registration_error']);
        $smarty->display('title', 'title_register_false');
		$smarty->display('login_form_register.tpl');
	}

	else{
		// Se non c'è alcun errore proseguo stampando a video i risultati
		$smarty->assign('username', $_POST['username']);
		$smarty->assign('password', $_POST['password']);
        $smarty->display('title', 'title_register_true');
		$smarty->display('login_register.tpl');
	}
}

// Altrimenti stampo il form
else{
    $smarty->display('title', 'title_register');
	$smarty->display('login_form_register.tpl');
}
?>
