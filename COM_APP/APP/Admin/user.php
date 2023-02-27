<?php

declare(strict_types=1);

namespace APP\Admin;
use src\app;

class User extends app{
    public function __construct($method = "getData", $param = 0){
        parent::__construct($method, $param);
    }

    public function user(){
        echo "user user() <br>";
    }
}