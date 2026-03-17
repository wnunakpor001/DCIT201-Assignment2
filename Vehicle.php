<?php

class Vehicle{
    protected $brand;

    // Constructor
    public function __construct($brand){
        $this->brand = $brand;
    }
     // Method for Engine starting
    public function startEngine(){
        echo "Starting Engine of " . $this->brand . "\n";
    }

}
?>