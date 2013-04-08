<?php
/*
Questo file contiene varie funzioni dello script. Sono aggiunte dall'utilizzatore
*/

/*
Questa funzione prende la quantità di file occupati da un utente.
space_occuped($user_idu) dove $user_idu è l'id univoco dell'utente. Questa funzione restituisce bytes.
*/
function space_occuped($user_idu){
    global $db;
    // Recupero le dimensioni dei file dell'utente
    $result = $db->query('SELECT `file_size` FROM `files` WHERE `idu` = '.$user_idu);
    // Setto per non generare notice
    $space_occuped = 0;
    // Inseriscp il file occupato nella variabile $space_occuped
    while($result_f = $db->fetch_array($result)){
        $space_occuped = $space_occuped + $result_f['file_size'];
    }
    return($space_occuped);
}

/*
Questa funzione genera una id casuale per il download di un file
*/
function generate_idfcd($idu, $idf){
    global $db;
    $while = true;
    while($while){
        $idfcd = string_gen(LONG_FILE_NAME);
        $result = $db->query("SELECT * FROM `downloads` WHERE `idfcd` = '$idfcd'");
        $result = $db->fetch_array($result);
        if(empty($result['idd'])){
            $while = false;
        }
    }
    $db->query("INSERT INTO `downloads` (`idd`, `idu`, `idf`, `idfcd`) VALUES (NULL, $idu, $idf, '$idfcd');");
    return($idfcd);
}
?>
