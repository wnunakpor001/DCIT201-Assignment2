<?php

class Motorcycle extends Vehicle{
    public function startEngine(){
        // Method overriding
        return parent::startEngine() . "Motorcycle Engine Started with a button";
    }
}