<?php
function sql_import($sqlfile){
    // estraggo il contenuto del file
    $queries = file_get_contents($sqlfile);
    // Rimuovo eventuali commenti
    $queries = preg_replace(array('/\/\*.*(\n)*.*(\*\/)?/', '/\s*--.*\n/', '/\s*#.*\n/'), "\n", $queries);
    // recupero le singole istruzioni
    $statements = explode(";\n", $queries);
    $statements = preg_replace("/\s/", ' ', $statements);
    // ciclo le istruzioni
    foreach ($statements as $query) {
        $query = trim($query);
        if ($query) {
            // eseguo la singola istruzione
            $result = mysql_query($query);
            // e stampo eventuali errori
            if (!$result){
                return false;
            }
        }
    }
    return true;
}

?>