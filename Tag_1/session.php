<?php

//wichtige einstellungen
declare(strict_types=1);
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();

define("DBNAME", "myDatabase");
define("DBTABLE", "myTable");
define("DBUSER", "root");
define("DBPASS", "");
define("DBHOST", "localhost");
define("DBPORT", "3306");
define("DBCHARSET", "utf8");
define("DBDRIVER", "mysql");

include("database.php");

$FileName = "text.txt";
$inhalt = file_get_contents($FileName);
//echo $inhalt;

$inhalt = file($FileName);
//echo "<pre>";
//print_r($inhalt);
//echo "</pre>";

$handle = fopen($FileName, "a");
fwrite($handle, "Hallo Welt" . chr(10));
fclose($handle);
echo file_get_contents($FileName);


//session variable erstellen
$_SESSION["name"] = "Max";
//echo $_SESSION["name"];

//löschen
$_SESSION["name"] = null;
$_SESSION["name"] = array();
session_destroy();

//session variable prüfen
if(!isset($_SESSION["name"])){
    echo "Session nicht gesetzt";
} else {
    $_SESSION["name"] = "Max";
}