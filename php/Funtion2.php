<?php
    $id=001;
    $name="Meng";
    $gender="M";
    $score1=50;
    $score2=70;
    $score3=80;
    $score4=90;
    $score5=88;


    function total(){
         global $score1,$score2,$score3,$score4,$score5;
        return  $score1+$score2+$score3+$score4+$score5;
    }

    function average(){
         $average=total()/5;
         return $average;
    }

    function grade(){
        
        if(average()>=90 && average()<=100)
            $grade="A";
        else if(average()>=80)
            $grade="B";
        else if(average()>=70)
            $grade="C";
        else if(average()>=60)
            $grade="D";
        else if(average()>=50)
            $grade="E";
        else
        $grade="F";

        return $grade;
    }

    echo "Total : ".total()."<br>";
    echo "Average : ".average()."<br>";
    echo "Grade : ".grade();
   
    

    
    
?>