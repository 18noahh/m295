<?php
declare(strict_types=1);

class ClassName{
    private $var1;
    private $test1;
    public function __construct($var1){
        $this->var1 = $var1;
        echo "Classname -> __construct <br>";
        echo $this->var1 . "<br>";
    }
    public function get_var1(){
        return $this->var1;
    }

    public function setVar1($var1) {
		$this->var1 = $var1;
		return $this;
    }

    public function __destruct(){
        echo "Classname -> __destruct <br>";
    }
	
}
$app = new ClassName("test");
$app->setVar1("test2");
echo $app->get_var1() . "<br>";

class Fahrzeug{
    public $raeder = 4;
    public $farbe = "schwarz";
    public $ps = 100;
    public $geschwindigkeit = 0;
    
    public function __construct(){
        echo "Fahrzeug-> __construct <br>";
    }
}

class Lastwagen extends Fahrzeug{
    public function __construct(){
        parent::__construct();
    }
}

abstract class DB {
    public static function getData(){
        echo "DB->connect <br>";
    }
}

interface iDB {
    public static function getData();
}

class DB2 extends DB {
    public static function getData(){
        echo "DB2->connect <br>";
    }
    
}