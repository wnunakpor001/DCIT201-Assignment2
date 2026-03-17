<?php

class Car extends Vehicle{

    public function startEngine(){
        // Method overriding
        return parent::startEngine() . "Car Engine Started with a Key";
    }
}

