<?php
// Questo è il file di configurazione di smarty

$smarty->template_dir = DIR_TEMPLATE.'/templates/';// La cartella dei template
$smarty->compile_dir = DIR_TEMPLATE.'/compiles/';// La cartella di compilazione
$smarty->config_dir = DIR_TEMPLATE.'/configs/';// La cartella di configurazione
$smarty->cache_dir = DIR_TEMPLATE.'/cache/';// La cartella delle cache
//$smarty->debugging = true;// Debug smarty
//$smarty->caching = true;// Abilita la cache
//$smarty->cache_lifetime = 20;// Vita della cache
//$smarty->compile_check = true;// Disabilita il controllo dei template. Se false non verranno più ricompilati
$smarty->force_compile=false;// Forza la compilazione, non usare.
?>
