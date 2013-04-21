<?php
// Dichiaro le costanti
define('ROOT', getcwd());

// Includo i file di configurazione e le classi
require(ROOT.'/includes/config.php');
require(ROOT.'/includes/classes/mysql.class.php');
require(ROOT.'/includes/functions/various_functions.php');
require(ROOT.'/includes/functions/script_functions.php');
require(ROOT.'/includes/classes/login_manager.class.php');
require(ROOT.'/includes/classes/smarty/Smarty.class.php');
require(ROOT.'/includes/classes/gettext/gettext.inc');

// Dichiaro le classi
$db = new MYSQL();
$login = new LOGIN_MANAGER();
$smarty = new Smarty();

// Includo il file per la configurazione di smarty
require(ROOT.'/includes/config_smarty.php');

// GETTEXT
T_setlocale(LC_MESSAGES, $locale);
T_bindtextdomain($domain, LOCALE_DIR);
T_textdomain($domain);

// Includo il file di commons. Contiene molte cose tra cui la traduzione in byte di alcune variabili nel file di configurazione.
require(ROOT.'/includes/commons.php');


// Ora avvio lo script a seconda di come è settata la variabile $_GET['action']
// Se non è settata action reindirizzo con la page settata
if(!isset($_GET['action']) or empty($_GET['action'])){
    header("location: index.php?action=index");
}
elseif(file_exists(ROOT.'/script/'.$_GET['action'].'.php')){
    include(ROOT.'/script/'.$_GET['action'].'.php');
}
else{
    $_GET['error'] = 404;
    include(ROOT.'/script/errors.php');
}

?>
