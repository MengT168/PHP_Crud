<?php

    class OOP_Employee{
        protected $id;
        protected $name;
        protected $gender;
        protected $address;
        protected $position;
        protected $salary;

        public function __construct($id,$name,$gender,$address,$position,$salary){
            $this->id=$id;
            $this->name=$name;
            $this->gender=$gender;
            $this->address=$address;
            $this->position=$position;
            $this->salary=$salary;
        }
        public function setSalary($salary){
            $this->salary=$salary;
        }
        public function getSalary(){
            return $this->salary;
        }

        public function __toString(){
            return "ID : ".$this->id."  Name : ".$this->name." Gender : ".$this->gender."  Address : ".$this->address."  Position : ".$this->position."  Salary : ".$this->salary;
        }

    }

?>  