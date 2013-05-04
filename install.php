<?php
define('ROOT', getcwd());
require(ROOT.'/includes/classes/mysql.class.php');
require(ROOT.'/includes/functions/various_functions.php');
require(ROOT.'/includes/functions/script_functions.php');
require(ROOT.'/install/functions.php');

if(!isset($_GET['clear']))
    $_GET['clear'] = false;

// Controllo se esiste il file di configurazione
if(!file_exists(ROOT.'/includes/config.php')){
    $todo = 'make_config';
}
// Controllo che non sia stato già installato il database
elseif($_GET['clear']==true){
    $todo = 'clear';
}
// Controllo se esiste il file .htaccess in uploads/
elseif(!file_exists(ROOT.'/uploads/.htaccess')){
    $todo = 'make_files';
}
// Controllo se esiste il database
elseif(file_exists(ROOT.'/includes/config.php') and !file_exists(ROOT.'/install/db.txt')){
    $todo = 'make_database';
}
elseif(file_exists(ROOT.'/install/db.txt')){
    $todo = 'make_admin';
}
else{
    $todo = '?';
}

//$todo = 'make_config';

// Ora faccio quello che devo fare
switch($todo){
    case 'make_config':
        require(ROOT.'/install/make_config.tpl');
    break;
    
    case 'make_files':
        // Se non esiste già creo la cartella per gli uploads con il file .htaccess
        if(!file_exists(ROOT.'/upload/.htaccess')){
            mkdir(ROOT.'/uploads/', 0777);
            $htaccess = fopen(ROOT.'/uploads/.htaccess', 'w');
            $c_htaccess = fwrite($htaccess, 'deny from all');
            fclose($htaccess);
        }
        require(ROOT.'/install/make_files.tpl');
    break;
    
    case 'make_database':
        require(ROOT.'/includes/config.php');
        $db = new MYSQL();
        if(sql_import(ROOT.'/includes/mysql.database.sql')){
            $success = true;
        }
        else{
            $success = false;
        }
        fopen(ROOT.'/install/db.txt', 'w');
        require(ROOT.'/install/make_database.tpl');
    break;
    
    case 'make_admin':
        require(ROOT.'/includes/config.php');
        $db = new MYSQL();
        $db->query("INSERT INTO `users` (`idu`, `username`, `password`, `rule`) VALUES (NULL, 'admin', 'admin', 'admin')");
        $success = true;
        require(ROOT.'/install/make_admin.tpl');
    break;
    
    case 'clear':
        unlink(ROOT.'/install.php');
        unlink(ROOT.'/install/db.txt');
        header('Location: index.php');
    break;
    
    case '?':
    default:
        echo '?';
    break;
}


?>
