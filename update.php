<?php
define('ROOT', getcwd());

require(ROOT.'/includes/config.php');
require(ROOT.'/includes/classes/mysql.class.php');

$db = new MYSQL();

// Rimuovo la vecchia cartella dei login
$db->query('DROP TABLE `logins`;');

// Creo quella nuova
$db->query('CREATE TABLE IF NOT EXISTS `sessions` (
  `ids` int(11) NOT NULL AUTO_INCREMENT,
  `ids_casual` text COLLATE utf8_unicode_ci NOT NULL,
  `idu` int(11) NOT NULL,
  `ip` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ids`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;');

// Creo nuova tabella
$db->query('CREATE TABLE IF NOT EXISTS `downloads` (
  `idd` int(11) NOT NULL AUTO_INCREMENT,
  `idu` int(11) NOT NULL,
  `idf` int(11) NOT NULL,
  `idfcd` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;');

// Cancello il file
unlink(ROOT.'/update.php');

// Reindirizzo
header('location: index.php');
?>
