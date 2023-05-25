<?php

class PediatricResult {
    private $id;
    private $patientId;
    private $creatinine;
    private $height;
    private $age;
    private $gender;
    private $gfr;

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }
}
