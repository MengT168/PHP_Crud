<?php

    // function SayHello(){
    //     echo "Hello";
    // }

    // function SayHi($name){
    //     echo "Welcome to ".$name;
    // }


    // SayHello();
    // SayHi("Meng");


    // function A(){
    //     return 10+15;
    // }

    // $number = A();
    // echo $number;

    // function Sum($a,$b){
    //     return $a+$b;
    // }

    // echo Sum(10,20);
    

    //Recursive Function

    function Sn($n){
        if($n ==1)
            return 1;
        else
            return (2*$n-1)+Sn($n-1);
    }
    $Result = Sn(3);
    echo $Result;
    echo "<br>";


    function Sn1($n){
        $Sum=0;
        for($i=1 ; $i<=$n ; $i++){
            $Sum+=2*$i-1;
        }
        return $Sum;
    }

    
    $Result = Sn1(3);
    echo $Result;
?>

<!-- 1+3+5 -->