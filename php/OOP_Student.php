<?php

    class OOP_Student{
        public $id;
        public $name;
        public $gender;
        public $age;
        public $score1;
        public $score2;
        public $score3;
        public $score4;
        public $score5;


        public function total(){
           
            return $this->score1+$this->score2+$this->score3+$this->score4+$this->score5;
        }

        public function findGrade(){
            if($this->avg() >=90 && $this->avg() <=100)
         $grade="A";
    else if($this->avg() >=80)
         $grade="B";
    else if($this->avg() >=70)
         $grade="C";
    else if($this->avg() >=60)
         $grade="D";
    else if($this->avg() >=50)
         $grade="E";
    else
         $grade="F";

         return $grade;
        }



        public function avg(){
            return $this->total()/5;
        }

        public function __construct($id,$name,$gender,$age,$score1,$score2,$score3,$score4,$score5){
            $this->id=$id;
            $this->name=$name;
            $this->gender=$gender;
            $this->age=$age;
            $this->score1=$score1;
            $this->score2=$score2;
            $this->score3=$score3;
            $this->score4=$score4;
            $this->score5=$score5;
        }

        public function __toString(){
            return "ID : ".$this->id."  Name : ".$this->name." Gender : ".$this->gender."  Age : ".$this->age."  Total : ".$this->total()."  Avg : ".$this->avg()."  Grade : ".$this->findGrade();
        }

    }

    $stu = new OOP_Student(1001,"ANC","M","100",55,67,798,81,90);
    echo $stu;
?>