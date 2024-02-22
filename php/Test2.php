<?php

    $name = "Dara";
    $code = 1001;
    $gender = "Male";
    $position = "IT";
    $year = 2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table , td{
            width: 250px;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
       <tr>
        <td>Name : </td>
        <td><?php echo $name?></td>
       </tr>
       <tr>
        <td>Code :</td>
        <td><?php echo $code?></td>
       </tr>
       <tr>
        <td>Gender :</td>
        <td><?php echo $gender?></td>
       </tr>
       <tr>
        <td>Position :</td>
        <td><?php echo $position?></td>
       </tr>
       <tr>
        <td>Year :</td>
        <td><?php echo $year?></td>
       </tr>
    </table>
</body>
</html>

