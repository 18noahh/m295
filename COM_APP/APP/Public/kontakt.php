<?php

declare(strict_types=1);

namespace APP\Public;
use src\app;

class Kontakt extends app{

    public function __construct($method = "getData", $param = 0){
        parent::__construct($method, $param);
    }

    public function kontakt(){
        echo "kontakt kontakt() <br>";
    }
}