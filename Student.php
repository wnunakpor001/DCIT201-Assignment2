<?php

class Student
{
    // Private attributes demonstrating Encapsulation

    private $studentId;
    private $name;
    private $score;

    // Constructor
    public function __construct($studentId, $name, $score){
        $this->studentId = $studentId;
        $this->name = $name;
        $this->setScore($score); // Using setter to enforce validation
    }
    // Getter for studentId
        public function getStudentId(){
        return $this->studentId;
    }

    // Setter for studentId
    public function setStudentId($studentId){
        $this->studentId = $studentId;
    }

    // Getter for name
    public function getName(){
        return $this->name;
    }

    // Setter for name
    public function setName($name){
        $this->name = $name;
    }

    // Getter for score

    public function getScore(){
        return $this->score;
    }

    // Setter for score validation
    public function setScore($score){
        if ($score < 0 || $score > 100){
            echo "Error: Score must be between 0 and 100. \n";
        }else{
            $this->score = $score;
        }
    }

    // Method to get grade
    public function getGrade() {
        if ($this->score >= 70) {
            return "A";
        } elseif ($this->score >= 60) {
            return "B";
        } elseif ($this->score >= 50) {
            return "C";
        } elseif ($this->score >= 45) {
            return "D";
        } else {
            return "F";
        }
    }


}