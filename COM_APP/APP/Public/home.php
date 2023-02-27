<?php

declare(strict_types=1);

namespace APP\Public;
use src\app;

class Home extends app{

    public function __construct($method = "getData", $param = 0){
        parent::__construct($method, $param);
    }

    public function get($id = 0){
        $this->response[""] =;
    }
}