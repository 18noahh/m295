<?php

declare(strict_types=1);

define("DBSQLITE3", "./../data/dbfile.sqlite3");
//echo DBSQLITE3;

/* if(file_exists(DBSQLITE3)){
    
    //echo "Datei existiert";
} else {
    //echo "Datei existiert nicht";
    $sqlstring = file_get_contents("./../data/db.sql");
    echo $sqlstring;
    $db = new SQLite3(DBSQLITE3);
    $db->exec($sqlstring);
} */

use src\Route;

class Autoloader{
    public static function register(){
        spl_autoload_register(function($class){
            if (file_exists("../".$class.".php")) {
                require("../".$class.".php");
            }else{
                echo $class.".php nicht gefunden<br>";
            }});
        }
}

Autoloader::register();

Route::add('/', function(){
    echo "Home...";
});

Route::add('/info', function(){
    phpinfo();
});

Route::add('/([a-zA-Z0-9]*)', function($class){
    $class = "\\src\\".$class;
    if(class_exists($class)){
        $app = new $class();
    } else {
        echo "Class not found.";
    }
},['get','post']);

Route::add('/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)', function($class, $method){
    $class = "\\src\\".$class;
    if(class_exists($class)){
        $app = new $class($method);
    } else {
        echo "Class or Method not found.";
    }
},['get','post']);

Route::add('/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)', function($class, $method, $param){
    $class = "\\src\\".$class;
    if(class_exists($class)){
        $app = new $class($method, $param);
    } else {
        echo "Class or Method not found or invalid .";
    }
},['get','post']);
Route::run("/");
