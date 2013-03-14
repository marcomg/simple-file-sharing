<?php
// Setto le variabili per la configurazione

// Setto le variabili per il database
$sql_logins = 'DROP TABLE IF EXISTS `logins`;
CREATE TABLE IF NOT EXISTS `logins` (
  `idl` int(11) NOT NULL AUTO_INCREMENT,
  `idl_casual` text COLLATE utf8_unicode_ci NOT NULL,
  `idu` int(11) NOT NULL,
  `ip` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idl`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;';

$sql_users = 'DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `rule` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;';

$sql_files = 'DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `idf` int(11) NOT NULL AUTO_INCREMENT,
  `idu` int(11) NOT NULL,
  `file_name` text COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(11) NOT NULL,
  `file_type` text COLLATE utf8_unicode_ci NOT NULL,
  `file_new_name` text COLLATE utf8_unicode_ci NOT NULL,
  `file_password` text COLLATE utf8_unicode_ci NOT NULL,
  `file_visibility` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idf`),
  KEY `idu` (`idu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;';


// Setto i template
$template_header = '<!DOCTYPE html><html><head><meta charset="utf-8"><title>Installing</title></head><body><br/>';
$template_footer = '<br/></body></html>';
//$template_install_form = '<h1>Configurazione</h1><form method="post" action="install.php?action=install" name="installing"><!-- Configurazione php -->Quali errori stampare? Inserire <i>0</i> per non stampare alcun errore. Inserire <i>6143</i> per stampare tutti gli errori.<br/><input type="text" value="0" name="error_reporting" /><br/><br/><!-- Configurazione database -->Indirizzo del server mysql<br/><input type="text" value="localhost" name="db_hostname" /><br/><br/>Il nome utente per il server mysql<br/><input type="text" value="root" name="db_username" /><br/><br/>La password per il database mysql<br/><input type="text" value="password" name="db_password" /><br/><br/>Il database mysql<br/><input type="text" value="dario" name="db_database" /><br/><br/><!-- Configurazione dello script php -->Inserire l\'url del sito senza <i>http://</i> e senza slash <i>/</i> finale<br/><input type="text" value="tuosito.it" name="SCRIPT_URL" /><br/><br/>Cartella dove si trovano i template. Se non sai cosa stai facendo lascia così come è<br/><input type="text" value="templates/simple" name="TEMPLATE_FOLDER" /><br/><br/>Cartella nella quale è stato installato il sito. Ad esempio se tu raggiungi questa pagina dall\'indirizzo <i>http://tuosito.it/mia_cartella</i> allora inserire solamente <i>/mia_cartella</i>. Nel caso sia installata nella root lasciare vuoto<br/><input type="text" name="DIR_INSTALL" /><br/><br/>Lingua nella quale bisogna far girare lo script. Le lingue supportate sono <i>it</i><br/><input type="text" value="it" name="LENGUAGE" /><br/><br/><!-- Invio --><input type="submit" value="Invia" name="send"/></form>';
$template_install_ok = '<h1>Installazione completata con successo</h1><br/><form action="install.php?action=register"><input type="submit" value="Prosegui" name="send"/></form>';
$template_register_form = '<h1>Registrazione account admin</h1><br/><form method="post" action="install.php?action=register" name="installing">Nome utente dell\'admin<br/><input type="text" value="admin" name="username" /><br/><br/>Password<br/><input type="password" value="password" name="password" /><br/><br/><input type="submit" value="Invia" name="send"/>';
$template_register_ok = '<h1>Registrazione completata con successo</h1><br/><form method="post" action="install.php?action=clean"><input type="submit" value="Prosegui" name="send"/></form>';


// Inizio
define('ROOT', getcwd());

// Includo le classi
require(ROOT.'/includes/classes/mysql.class.php');

// Se non esiste la configurazione allora passo alla installazione
if(!file_exists(ROOT.'/includes/config.php')){
    $_GET['action'] = 'install';
}


// Stampo il template header
echo($template_header);
switch($_GET['action']){
    case 'install':
        if(isset($_POST['error_reporting']) or !empty($_POST['error_reporting'])
        or isset($_POST['db_hostname']) or !empty($_POST['db_hostname'])
        or isset($_POST['db_username']) or !empty($_POST['db_username'])
        or isset($_POST['db_database']) or !empty($_POST['db_database'])
        or isset($_POST['SCRIPT_URL']) or !empty($_POST['SCRIPT_URL'])
        or isset($_POST['TEMPLATE_FOLDER']) or !empty($_POST['TEMPLATE_FOLDER'])
        or isset($_POST['LENGUAGE']) or !empty($_POST['LENGUAGE'])
        ){
            // Posso proseguire
            
            //Dichiario el costanti per la connessione
            define('db_hostname', $_POST['db_hostname']);
            define('db_username', $_POST['db_username']);
            define('db_password', $_POST['db_password']);
            define('db_database', $_POST['db_database']);
            
            // Istanzio la classe per il database
            $db = new MYSQL();// Si ricorda che nel caso non ci si riesca a connettere si stamperà un errore
            
            // Inizializzo il database
            $db->query($sql_logins) or die('Impossibile popolare il database 1/4');
            $db->query($sql_users) or die('Impossibile popolare il database 2/4');
            $db->query($sql_diaries) or die('Impossibile popolare il database 3/4');
            $db->query($sql_diaries_pages) or die('Impossibile popolare il database 4/4');
            
            // Scrivo le variabili per metterle nel file di configurazione
            $error_reporting = $_POST['error_reporting'];
            $db_hostname = $_POST['db_hostname'];
            $db_username = $_POST['db_username'];
            $db_password = $_POST['db_password'];
            $db_database = $_POST['db_database'];
            $SCRIPT_URL = $_POST['SCRIPT_URL'];
            $TEMPLATE_FOLDER = $_POST['TEMPLATE_FOLDER'];
            $LANGUAGE = $_POST['LENGUAGE'];
            $DIR_INSTALL = $_POST['DIR_INSTALL'];
            
            // Scrivo il file di configurazione
            $config_url = fopen(ROOT.'/includes/config.php', 'w');
            fwrite($config_url, <<<EOF
<?php
/*
File di configurazione php
*/
error_reporting ($error_reporting);//Quali errori stampare? 6143 tutti gli errori, 0 nessun errore

/*
File di configurazione del database. Serve per gestire il basso livello dello script
*/
define('db_hostname', '$db_hostname');// Indirizzo del server mysql
define('db_username', '$db_username');// Nome utente del server mysql
define('db_password', '$db_password');// Password del nome utente del server mysql
define('db_database', '$db_database');// Database mysql


/*
File di configurazione dello script php
*/

define('SCRIPT_URL', '$SCRIPT_URL'); // Url sito senza slash finale
define('TEMPLATE_FOLDER', '$TEMPLATE_FOLDER'); // Url dove si trovano i template senza slash finale
define('DIR_INSTALL', '$DIR_INSTALL'); // cartella nella quale è lo script Es '/cartella' (serve solo per i template) non mettere lo slash finale!! Mettere quello iniziale. Nel caso di installazione nella root non mettere nulla!
define('LENGUAGE', '$LANGUAGE'); // Lingua nella quale visualizzare lo script
define('DIR_TEMPLATE', ROOT.'/'.TEMPLATE_FOLDER.'/'.LENGUAGE);// La cartella del template
define('DIR_TEMPLATE_IMGS', './'.TEMPLATE_FOLDER.'/'.LENGUAGE.'/templates/images');// La cartella delle immagini nel template relativa
define('USER_CAN_REGISTER', 'true');// Gli utenti possono registrarsi?
define('RENDIRICT_DELAY', 5);// Tempo di attesa per il rendirict

/*
Configurazioni che verranno completate nel file commons.php
*/

?>
EOF
);
            // Stampo il successo dell'operazione
            echo($template_install_ok);
        }
        else{
            echo($template_install_form);
        }
        
    break;
    
    case 'register':
        // Includo il file di configurazione
        require(ROOT.'/includes/config.php');
        
        // Dichiaro la classe per il database
        $db = new MYSQL();// Si ricorda che nel caso non ci si riesca a connettere si stamperà un errore
        
        if(isset($_POST['username']) and !empty($_POST['username']) and isset($_POST['password']) and !empty($_POST['password'])){
            // Inserisco l'utente
            $db->query('TRUNCATE `users`');
            $username = $db->escape_string($_POST['username']);
            $password = $db->escape_string($_POST['password']);
            $db->query("INSERT INTO `users` (`idu`, `username`, `password`, `rule`) VALUES (NULL, '$username', '$password', 'admin')");
            
            // Stampo il successo
            echo($template_register_ok);
        }
        else{
            // Stampo il form
            echo($template_register_form);
        }
        
    break;
    
    case 'clean':
        // Cancello l'index modificato
        unlink('index.php');
        
        // Sposto il file index in includes/ nella root
        rename('includes/index.php', 'index.php');
        
        // Cancello il file di installazione ovvero questo file
        unlink('install.php');
        
        // Reindirizzo alla home page
        header('Location: ./index.php');
    break;
    
    default:
        header('Location: ./install.php?action=install');
    break;
}

// Stampo il template footer
echo($template_footer);
?>
