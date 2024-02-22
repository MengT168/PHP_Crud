<?php
    $code = 001;
    $name = "Coca";
    $qty = 50;
    $price = 10;
    $total = $qty*$price;

    if($total >= 1500){
        $dicount = $total*0.05;
        $Payment = $total-$dicount;
        echo "Discount = ".$dicount."$";
        echo "<br>";
        echo "Discount = 5%";
        echo "<br>";
        echo "Payment = ".$Payment;
    }
    else if($total>=1000){
        $dicount = $total*0.04;
        $Payment = $total-$dicount;
        echo "Discount = ".$dicount."$";
        echo "<br>";
        echo "Discount = 4%";
        echo "<br>";
        echo "Payment = ".$Payment;
    }
    else if($total>=500){
        $dicount = $total*0.03;
        $Payment = $total-$dicount;
        echo "Discount = ".$dicount."$";
        echo "<br>";
        echo "Discount = 3%";
        echo "<br>";
        echo "Payment = ".$Payment;
    }
    else if($total>=200){
        $dicount = $total*0.02;
        $Payment = $total-$dicount;
        echo "Discount = ".$dicount."$";
        echo "<br>";
        echo "Discount = 2%";
        echo "<br>";
        echo "Payment = ".$Payment;
    }
    // else if($total<=50){
    //     $dicount = $total*0.50;
    //     $Payment = $total-$dicount;
    //     echo "Discount = ".$dicount."$";
    //     echo "<br>";
    //     echo "Discount = 50%";
    //     echo "<br>";
    //     echo "Payment = ".$Payment;
    // }
    // else if($total<=60){
    //     $dicount = $total*0.60;
    //     $Payment = $total-$dicount;
    //     echo "Discount = ".$dicount."$";
    //     echo "<br>";
    //     echo "Discount = 60%";
    //     echo "<br>";
    //     echo "Payment = ".$Payment;
    // }
    else{
        $dicount = $total*0.01;
        $Payment = $total-$dicount;
        echo "Discount = ".$dicount."$";
        echo "<br>";
        echo "Discount = 1%";
        echo "<br>";
        echo "Payment = ".$Payment;
    }
?>