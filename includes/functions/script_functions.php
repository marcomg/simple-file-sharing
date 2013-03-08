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
?>
