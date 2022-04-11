<?php

require 'core/Config.php';

/**
 * Létre hozzuk a $config objektumot a singleton konstruktor segitsegvel.
 * Igy nem tudunk belőle több példányt csinálni (támadasok ellen jó, mindig visszaadja az élő objektumot a Config osztályból)
 * @var Config $config
 **/

$config = Config::singleton();

/**
 * Namespace konfiguráló beállítások
 * @param string key
 * @param string value
 **/

$config->set('controllerFolder', 'controller/');
$config->set('modelFolder', 'model/');
$config->set('viewFolder', 'view/');

/**
 * Adatbázis beállítások
 * @param string key
 * @param string value
**/

$config->set('dbhost', 'localhost');
$config->set('dbname', 'peaceplayers');
$config->set('dbuser', 'root');
$config->set('dbpass', 'root');

//Lehet ez sem kell ide.
return $config;