<?php

class PartTimeEmployee extends Employee{
    private $hoursWorked;
    private $hourlyRate;

    // Constructor
    public function __construct($name, $hoursWorked, $hourlyRate){
        parent::__construct($name, 0); // Salary not use here
        $this->hoursWorked = $hoursWorked;
        $this->hourlyRate = $hourlyRate;
    }

    // Override method
    public function calculateAnnualSalary(){
        return ($this->hoursWorked * $this->hourlyRate * 12);
    }

}