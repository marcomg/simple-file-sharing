<?php
###########################################
###File di commons per la configurazione###
###########################################

//Prendo upload_max_filesize configurato da me, nel file di configurazione e quello configurato nel php.ini e setto in una costante il minore.
if(return_bytes(ini_get('upload_max_filesize')) < return_bytes($max_file_size)){
    define('MAX_FILE_SIZE', return_bytes(ini_get('upload_max_filesize')));
}
else{
    define('MAX_FILE_SIZE', return_bytes($max_file_size));
}

// Configurazione massimo peso di dati che un utente puù memorizzare nel server
define('MAX_DATA_FOR_USER', return_bytes($max_data_for_user));

?>
