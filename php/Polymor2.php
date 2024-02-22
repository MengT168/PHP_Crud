<?php
    include('Polymor.php');
    class Polymor2 extends Polymor{
        public function nameItem(){
            echo "this is Polymor2";
        }
    }

    class Polymor3 extends Polymor{
        public function nameItem(){
            echo "this is Polymor 3";
        }
    }

    $object = [
        new Polymor2,
        new Polymor3
    ];  

    foreach($object as $value){
        echo $value->nameItem();
        echo "<br>";
    }



?>