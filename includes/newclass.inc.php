<?php

class NewClass {


    // Properties and methods go here
    public $data = "This is some info";
    public $error = "This is the class called the new class " . __CLASS__;

    public static $staticField = 0;

    public function __construct()
    {
        // echo "This class has been instantiated";
    }

    public function setNewProperty($newData){
        $this->data=$newData;

    }

    public function getProperty(){
        return $this->data;
    }

    public function __destruct(){
        // echo "This is the end of the class";
    }

    public function __toString()
    {
        echo "toString method of class  " . __CLASS__  . ":". "<br>";
        return "Data: ".$this->data . "<br>" ;
    }

    public static function staticMethod(){
        return self::$staticField;
    }
    
}




?>