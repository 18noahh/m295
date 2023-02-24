<?php
declare(strict_types=1);

namespace src;

class app
{
    public $response = array();
    public function __construct($method, $param)
    {
        $this->response["class"] = __CLASS__;
        $this->response["implements"] = class_implements($this);
        $this->response["method"] = $method;
        $this->response["param"] = $param;
        if(method_exists($this, $method)){
            $this->{$method}($param);
        } else {
            echo $this->response["error"] = "Method not found.";
        }
    }
    public function __destruct()
    {
        header("Access-Control-Allow-Origin: *");
        header('Content-Type: application/json, charset=utf-8');
        echo json_encode($this->response);
    }
}