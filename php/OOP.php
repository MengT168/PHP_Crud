<?php
    class OOP{
        public $name;
        public $age;
        public $gender;
        public $address;

        public function __construct($name,$age,$gender,$address){
            $this->name = $name;
            $this->age  = $age;
            $this->gender = $gender;
            $this->address = $address;
        }

        // public function show(){
        //     echo "<h3>Name = ".$this->name."  Age = ".$this->age."  Gender = ".$this->gender."  Address = ".$this->address."</h3>";
        // }

        public function __toString(){
            return $this->name.' '.$this->age.' '.$this->gender.' '.$this->address;
        }
    }

    $Person = new OOP("AAAA", 10 , "Male" , "PP");
    echo $Person;

    
?>