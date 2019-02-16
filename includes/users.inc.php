<?php




class Users {
    public $first = "John";
    public $last = "Doe";
    public $hairColor = "Brown";
    public $eyeColor = "Blue";

    public function __construct($first, $second){
        $this->first = $first;
        $this->second = $second; 
    }

    public function fullName() {
        return $this->first . " " . $this->second;
    }


    public function __destruct(){

        
        
    }

    public function __toString(){
        return "<br>First: " . $this->first .  " Second: " .$this->second;
    }
}