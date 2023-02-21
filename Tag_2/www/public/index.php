<?php
declare(strict_types=1);

use src\admin\user;
use src\artikel;

class Autoloader{
    public static function register(){
        spl_autoload_register(function($class){
            if(file_exists('../' . $class . ".php")){
                require('../' . $class . ".php");
            } else
            {
                echo "Datei existiert nicht.";
            }

        });
    }
}

Autoloader::register();
$user = new user();
$artikel = new artikel();