<?php

class FullTimeEmployee extends Employee{
    private $bonus;

    // Constructor
    public function __construct($name,$salary,$bonus){
        parent::__construct($name,$salary); // call the parent class constructor
        $this->bonus = $bonus;
    }

    // Override method
    public function calculateSalary(){
        return ($this->salary * 12) + $this->bonus;
    }

}