<?php
class Person {

    private $p_id;
    private $name;
    private $password;

    function __contruct($p_id, $name, $password) {

        $this->p_id = $p_id;
        $this->name = $name;
        $this->password = $password;
    }

    function __destruct() {
        
        echo "User $this->p_id has been deleted";
    }

    // Getters
    function getName() {

        return $this->name;
    }
    
    // Setters
    function setName($newValue) {

        $this->name = $newValue;
        echo "Play name set successfully !";
    }
}