<?php
    include('Emp.php');
    class Emp2 extends Emp{
        private $salary;

        public function __construct($id, $name, $sex,$dob,$salary)
        {
            parent::__construct($id, $name, $sex , $dob);
            $this->salary=$salary;
        }

        public function __toString(){
            return parent::__toString() . " Salary : " .$this->salary;
        }
    }

    $emp = new Emp2(1001,"AAAA","M","2010",2000);
    echo $emp;
   
?>



