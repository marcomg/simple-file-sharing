<?php
/*
File di configurazione php
*/
error_reporting (6143);//Quali errori stampare? 6143 tutti gli errori, 0 nessun errore

/*
File di configurazione del database. Serve per gestire il basso livello dello script
*/
define('db_hostname', 'localhost');// Indirizzo del server mysql
define('db_username', 'root');// Nome utente del server mysql
define('db_password', '');// Password del nome utente del server mysql
define('db_database', 'file_manager');// Database mysql


/*
File di configurazione dello script php
*/

define('SCRIPT_URL', 'localhost'); // Url sito senza slash finale
define('TEMPLATE_FOLDER', 'templates/simple'); // Url dove si trovano i template senza slash finale
define('DIR_INSTALL', '/simple-file-sharing'); // cartella nella quale è lo script Es '/cartella' (serve solo per i template) non mettere lo slash finale!! Mettere quello iniziale. Nel caso di installazione nella root non mettere nulla!
define('LANGUAGE', 'it'); // Lingua nella quale visualizzare lo script
define('LONG_FILE_NAME', 5); // Lunghezza del nome del file.
define('DIR_TEMPLATE', ROOT.'/'.TEMPLATE_FOLDER.'/'.LANGUAGE);
define('DIR_TEMPLATE_IMGS', './'.TEMPLATE_FOLDER.'/'.LANGUAGE.'/templates/images');
define('USER_CAN_REGISTER', 'true');

/*
Configurazioni che verranno completate nel file commons.php
*/

// Massima dimensione di un file espressa in bytes oppure in kilobytes col suffisso 'K' o in megabytes col suffisso 'M'. Attenzione, se la configurazione del php.ini setta un numero minore il numerò sarà quello minore.
$max_file_size='5M';// La si legge con la costante MAX_FILE_SIZE che è in byte

// Massimo peso di file contenuto nel server per utente
$max_data_for_user='1024M';// La si legge con la costante MAX_DATA_FOR_USER che è in byte
?>
