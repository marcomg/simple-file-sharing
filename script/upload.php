<?php


$user = $login->whois_logged();

if($user != false){
    $smarty->assign('print_user_panel', 'true');
}

// Controllo se è loggiato se no stampo un errore!
if(!$user){
    $smarty->assign('error', $string['access_denied'].' '.$string['required_login']);
    $smarty->display('header.tpl');
    $smarty->display('footer.tpl');
    exit;
}


// Se non è settato il post allora stampo il form
if(!isset($_POST['visibility']) or !isset($_FILES['file'])){
    $smarty->assign('max_file_size', return_human_value(MAX_FILE_SIZE));
    $smarty->assign('title', $string['title_upload']);
    $smarty->display('form_upload.tpl');
    exit;
}

// Se arrivo a questo punto il form è stato inviato
// Controllo se il form sia stato inviato correttamente eche il file sia corretto
if(empty($_POST['visibility']) or $_FILES['file']['error'] > 0){
    $smarty->assign('error', $string['upload_error']);
    $smarty->display('header.tpl');
    $smarty->display('footer.tpl');
    exit;
}

// Controllo che il file abbia una dimensione inferiore a quella impostata
if ($_FILES['file']['size'] > MAX_FILE_SIZE){
    $smarty->assign('error', $string['upload_error_file_too_big']);
    $smarty->assign('max_file_size', return_human_value(MAX_FILE_SIZE));
    $smarty->display('form_upload.tpl');
    exit;
}

// Controllo che non si abbia superato il limite di dati consentiti nel server
if(MAX_DATA_FOR_USER != 0){
    // Prendo lo spazio occupato dall'utente $user['idu']
        // Recupero le dimensioni dei file dell'utente
    $result = $db->query('SELECT `file_size` FROM `files` WHERE `idu` = '.$user['idu']);
    
    // Setto per non generare notice
    $space_occuped = 0;
    
    // Inseriscp il file occupato nella variabile $space_occuped
    while($result_f = $db->fetch_array($result)){
        $space_occuped = $space_occuped + $result_f['file_size'];
    }
    //$space_occuped = space_occuped($user['idu']);//disattivato poiché non va.
    
    // Lo sommo allo spazio occupato dal file appena uplodato.
    $space_occuped = $space_occuped + $_FILES['file']['size'];
    
    // Controllo che lo spazio occupato non sia superiore a quello impostato. Se lo è genero e stampo l'errore.
    // lo scritp si ferma qui nel caso ci sia errore
    if($space_occuped >= MAX_DATA_FOR_USER){
        $smarty->assign('error', $string['upload_error_too_file']);
        $smarty->assign('max_file_size', return_human_value(MAX_FILE_SIZE));
        $smarty->display('form_upload.tpl');
        exit;
    }
}

// Se arrivo qui tutto è andato per il verso giusto. Si può procedere con il salvataggio del file.

// Se la password del file è vuota la setto io con null
if(empty($_POST['password']) or $_POST['visibility'] == 'private'){
    $_POST['password'] = null;
}

// Scelgo un nome per il file. Se esso esiste allora ne scelgo un'altro
$filename = null; // Dichiaro una variabile
while(file_exists(ROOT.'/uploads/'.$filename)){// Se 
    $filename = string_gen(LONG_FILE_NAME);
}

// Carico nel database il file
$db->query('INSERT INTO `files` (`idf` ,`idu` ,`file_name` ,`file_size` ,`file_type`, `file_new_name`, `file_password`, `file_visibility`)VALUES (NULL , \''.$user['idu'].'\', \''.$_FILES['file']['name'].'\', \''.$_FILES['file']['size'].'\', \''.$_FILES['file']['type'].'\', \''.$filename.'\', \''.$db->escape_string($_POST['password']).'\', \''.$db->escape_string($_POST['visibility']).'\')');

// Sposto il file nella cartella corretta. Se ciò avviene stampo l'ok.
if(move_uploaded_file($_FILES['file']['tmp_name'], ROOT.'/uploads/'.$filename)){
    $smarty->assign('file_name', $_FILES['file']['name']);
    $smarty->assign('file_weight', return_human_value($_FILES['file']['size']));
    $smarty->assign('file_password', $_POST['password']);
    $smarty->assign('file_visibility', $_POST['visibility']);
    $smarty->assign('link_file', 'http://'.SCRIPT_URL.DIR_INSTALL.'/index.php?action=download&file='.$filename);
    
    $smarty->assign('title', $string['title_upload']);
    
    $smarty->display('upload.tpl');
}

/*Se arrivo qui si è verificato un errore molto grave:
il server non è riuscito a spostare il file.
Per ora non mi preoccupo di segnalare l'errore.
In seguito, forse, me ne occuperò.
*/
?>
