<?php

namespace src;

class sqlite3 extends app {
    public function __construct() {
        if($this->checkDB()){
            $this->response["db"] = "Datenbank wurde erfolgreich erstellt.";
        } else {
            $this->response["db"] = "Datenbank konnte nicht erstellt werden.";
        }
        $this->response["implements"] = "database";
        parent::__construct();
    }

     private function checkDB(){
            if(!file_exists(DBSQLITE3)){
            $sqlstring = file_get_contents("./../data/db.sql");
            $db = new sqlite3(DBSQLITE3);
            $db->exec($sqlstring);
            $db->close();
            $db = null;
        }
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