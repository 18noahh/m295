<?php

namespace src;

class pdo extends app implements database {
    public function __construct($method = 'getData', $param = 0) {
        parent::__construct($method, $param);
    }

    public function getData($id = 0) {
        $arr = array("a","b","c");
        $this->response["data"] = $arr;
        $this->response["success"] = "Daten wurden erfolgreich geladen.";
    }
    
    public function update($id = 0) {
        $this->response["success"] = "Update.";
    }

    public function insert() {
        $this->response["success"] = "Insert.";
    }

    public function delete($id = 0) {
        $this->response["success"] = "Delete.";
    }
}