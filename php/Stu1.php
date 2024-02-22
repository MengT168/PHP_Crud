<?php
    include('Emp.php');
    class Stu extends Emp{
        private $score;

        public function __construct($id, $name, $sex,$dob,$score)
        {
            parent::__construct($id, $name, $sex , $dob);
            $this->score=$score;
        }

        public function __toString(){
            return parent::__toString() . " Score : " .$this->score;
        }
    }

    $stu = new Stu(1001,"AAAA","M","2010",100);
    echo $stu;
   
?>