<?php
   
    class Emp {
        protected $id;
        protected $name;
        protected $sex;
        protected $dob;

       
       public function __construct($id, $name, $sex , $dob){
        $this->id=$id;
        $this->name=$name;
        $this->sex=$sex;
        $this->dob=$dob;
       }

       public function __toString(){
        return "ID : ".$this->id
                ."Name : ".$this->name
                ."Gender : ".$this->sex 
                ."DOB : ".$this->dob;
       }
    }
?>