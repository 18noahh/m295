<?php

declare(strict_types=1);

namespace src;
use Exception;


class mysql{
    public $response = array();
    public function __construct($method = 'getData', $param = 0){
        echo "mysql __construct() <br>";
        
        $this->response['class'] = __CLASS__;
        $this->response['methode'] = $method;
        $this->response['param'] = $param;


        if(method_exists($this, $method)){
            $this->{$method}($param);
        }else{
            echo "Method $method not found <br>";
        }
    }

    public function getData($id = 0){
        try{
            $this->response['success'] = 'getData';
            if($id > '' && $id > 0){
                $sql = "select * from myTable where id =" . $id;
            } else{
                $sql = "select * from myTable";
            }
            $result = $this->mysql->query($sql);
            $data = array();
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $this->response['data'] = $data;
            return $data;
        } catch (Exception $e){
            $this->response['error'] = $e->getMessage();
            return false;
    } 
}
    public function __destruct(){
        echo json_encode($this->response);
    }
}

$mysqli = new \mysqli("example.com", "root", "root", "database");

if($mysqli->connect_errno) {
    echo "failed to connect to MySQL:" . $mysqli->connect_error;
    exit();
}
$result = $mysqli->query("SELECT * FROM table");

$row = $result->fetch_array(MYSQLI_ASSOC);
printf("%s (%s)\n", $row["test"], $row["test"]);
?>