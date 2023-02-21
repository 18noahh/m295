<?php
declare(strict_types=1);

include("kalender.php");

use Tag1\Kalender\Kalender;

$cal = new Kalender();

$test2 = new Tag1\Kalender\Kalender();

class Autoloader{
    public static function register(){
        spl_autoload_register(function($class){
            if(file_exists($class.".php")){
                require($class.".php");
            } else
            {
                echo "Datei existiert nicht.";
            }

        });
    }
}
Autoloader::register();
if(class_exists("src\DB2")){
    $methode = "getData";
    $param = array("a", "b", "c");
    $db = new src\DB($methode, $param);
    echo "Instanz existiert. <br>";
} else
{
    echo "instanz existiert nicht. <br>";
}
$db = new src\DB();