<?php
if(USER_CAN_REGISTER == 'false'){
    $smarty->assign('error', _('Error, registration has been disabled.'));
    $smarty->assign('title', _('Register'));
    $smarty->display('login_form_register.tpl');
    exit;
}

// Se è inviato il form e tutti i campi sono stati inviati:
if(isset($_POST['username']) and isset($_POST['username']) and !empty($_POST['username']) and !empty($_POST['password'])){

	// Se c'è un qualche errore (es: username già registrato) allora stampo l'errore:
	if(!$login->register($_POST['username'], $_POST['password'])){
		$smarty->assign('error', _('There was an error:<br/><ul><li>check that you have entered all the fields;</li><li>Could it be that the username you specified has already been used by someone else, try a different one!</li></ul>'));
        $smarty->assign('title', _('Registration is not carried out'));
		$smarty->display('login_form_register.tpl');
	}

	else{
		// Se non c'è alcun errore proseguo stampando a video i risultati
		$smarty->assign('username', $_POST['username']);
		$smarty->assign('password', $_POST['password']);
        $smarty->assign('title', _('Registered successfully'));
		$smarty->display('login_register.tpl');
	}
}

// Altrimenti stampo il form
else{
    $smarty->assign('title', _('Register'));
	$smarty->display('login_form_register.tpl');
}
?>
