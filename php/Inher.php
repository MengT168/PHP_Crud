<?php
include('OOP_Employee.php');
include('Mark.php');

class Emp extends OOP_Employee implements Mark {
    private $bonus;
    
    public function __construct($id, $name, $gender, $address, $position, $salary, $bonus){
        parent::__construct($id, $name, $gender, $address, $position, $salary);
        $this->bonus = $bonus;
    }

    public function calBonus(){
        return $this->bonus / 100;
    }

    public function totalBonus(){

        $this->salary += ($this->getSalary() * $this->calBonus());
        
        return $this->salary."$";
    }

    public function __toString(){
        return parent::__toString() . " Bonus: " . $this->bonus."%" . " TotalSalary: " . $this->totalBonus();
    }
}

$emp = new Emp(1001, "ABC", "M", "PP", "BackEnd", 1500, 15);

echo $emp;
?>
