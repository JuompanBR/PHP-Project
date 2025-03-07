<?php

require_once "./constants.php";
require_once "../utilities/packages/Db.php";

class Player {

    CONST TABLENAME = 'Player';

    private string $p_id;
    private string $name;
    private string $password;
    private DB $db;

    function __contruct(string $p_id, string $name, string $password) {

        $this->p_id = $p_id;
        $this->name = $name;
        $this->password = $password;
        $this->db = new DB();
        return;
    }

    function __destruct() {
        
        echo Config::values['destructor_message'];
    }

    // Getters
    public function getName() {

        return $this->name;
    }
    
    // Setters
    public function update(array $valuesToUpdate) {

        return $this->db->update(tableName:self::TABLENAME, valuesToUpdate:$valuesToUpdate);
    }

}