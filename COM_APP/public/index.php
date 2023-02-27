<?php

declare(strict_types=1);

use src\Route;

define('DBSQLITE3', './../data/dbfile.sqlite3');


require(__DIR__.'/../vendor/autoload.php');



if (file_exists(DBSQLITE3)) {
}else{
    $sqlstring = file_get_contents('./../data/db.sql');
    echo $sqlstring;
    $db = new SQLite3(DBSQLITE3);
    $db->exec($sqlstring);
}

Route::add('/', function(){
    echo "Home........";
});

Route::add('/artikel', function(){
    echo "Artikel........";
});

Route::add('/artikel', function(){
    echo "Artikel........"; 
});

Route::add("/([a-zA-Z0-9]*)", function ($class){
    $class = "\\src\\".$class;
    if (class_exists($class)) {
        $app = new $class();
    }else{
        errorsite(404);
    }
});

Route::add("/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)", function ($class, $method){
    $class = "\\src\\".$class;
    if (class_exists($class) && method_exists($class, $method)){
        $app = new $class($method);
    }else{
        errorsite(404);
    }
},['get', 'post']);

Route::add("/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)", function ($class, $method, $param){
    $class = "\\src\\".$class;
    if (class_exists($class) && method_exists($class, $method) && $param != 0){
        $app = new $class($method, $param);
    }else{
        errorsite(404);
    }
});

Route::run("/");

function errorsite($code){
    http_response_code($code);
    header("HTTP/1.1 ".$code);
    header("access-control-allow-methods: GET, POST");
    header('Content-Type: text/html, charset=utf-8');
    header("Access-Control-Allow-Origin: *");
    header("Cache-Control: max-age=0, private, must-revalidate");
    header("expires: sat, 26 jul 2030 05:00:00 gmt");
    include("./../error/".$code.".html");
}

?>