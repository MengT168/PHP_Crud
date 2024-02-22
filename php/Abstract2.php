<?php
    include('Abstract.php');
class RoomA extends Classroom{
    private $id;
    private $name;
    private $gender;
    private $score1;
    private $score2;
    private $score3;

    public function __construct($id,$name,$gender,$score1,$score2,$score3){
        $this->id=$id;
        $this->name=$name;
        $this->gender=$gender;
        $this->score1=$score1;
        $this->score2=$score2;
        $this->score3=$score3;
    }

    public function studentScore(){
        return $this->score1+$this->score2+$this->score3;
    }
    public function studentAvg(){
        return $this->studentScore()/3;
    }
    public function studentGrade(){
        if($this->studentAvg() >=90 && $this->studentAvg() <=100)
        $grade="A";
   else if($this->studentAvg() >=80)
        $grade="B";
   else if($this->studentAvg() >=70)
        $grade="C";
   else if($this->studentAvg() >=60)
        $grade="D";
   else if($this->studentAvg() >=50)
        $grade="E";
   else
        $grade="F";

        return $grade;
    }
    public function __toString(){
        return  "ID : ".$this->id
                ."  Name : ".$this->name
                ." Gender : ".$this->gender
                ." Score 1  : ".$this->score1
                ." Score 2 : ".$this->score2
                ." Score 3 : ".$this->score3
                ." Student Score : ".$this->studentScore()
                ." Student Avg : ".$this->studentAvg()
                ." Student Grade : ".$this->studentGrade() ;
    }
}
$room = new RoomA(1001,"AAA","M",40,50,60);
echo $room;
?>