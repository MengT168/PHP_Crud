<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Input Num1 : <input type="text" name="txtnum1"><br><br>
        Input Num2 : <input type="text" name="txtnum2"><br><br>
        <input type="submit" name="btn_sub">
    </form>
    
</body>
</html>

<?php

    if(isset($_POST['btn_sub'])){
        $num1 = $_POST['txtnum1'];
        $num2 = $_POST['txtnum2'];
        $sum = $num1+$num2;
        echo "Num1 : ".$num1."   Num2 : ".$num2;
        echo "<br>";
        echo "Sum : ".$sum;
    }

?>