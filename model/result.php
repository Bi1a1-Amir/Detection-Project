<?php
class result{
    private $resultId;
    private $patientId;
    private $gender;
    private $ethnicity;
    private $age;
    private $egfr;
    private $stage;
    
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