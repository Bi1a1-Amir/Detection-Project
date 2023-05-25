<?php
class clinician{
    private $clinician_id;
    private $firstName;
    private $lastName;
    private $userName;
    private $password;
    
    function __get($name)
    {
        return $this->$name;
    }

    function __set($name,$value)
    {
        $this->$name = $value;
    }

    function getFullName()
    {
        return "$this->firstName $this->lastName";
    }
}
?>