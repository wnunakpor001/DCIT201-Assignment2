<?php

class Employee{
    protected $name;
    protected $salary;

    // Constructor
    public function __construct($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    // Method to calculate annual salary
    public function calculateAnnualSalary(){
        return $this->salary * 12;
    }

}
?>