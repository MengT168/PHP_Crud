<?php

    $score1 = 60;
    $score2 = 70;
    $score3 = 55;
    $score4 = 78;
    $score5 = 90;
    $total = $score1+$score2+$score3+$score4+$score5;
    $average = $total/5;

    if($average >=90 && $average<=100)
         $grade="A";
    else if($average >=80)
         $grade="B";
    else if($average >=70)
         $grade="C";
    else if($average >=60)
         $grade="D";
    else if($average >=50)
         $grade="E";
    else
         $grade="F";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                table ,tr ,th,td {
                    width: 500px;
                    
                    border: 1px solid black;
                    border-collapse: collapse;
                }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>
                Score 1
            </th>
            <th>
                Score 2
            </th>
            <th>
                Score 3
            </th>
            <th>
                Score 4
            </th>
            <th>
                score 5
            </th>
        </tr>
        <tr>
            <td>
                <?php
                    echo "$score1";
                ?>
            </td>
            <td>
                <?php
                    echo "$score2";
                ?>
            </td>
            <td>
                <?php
                    echo "$score3";
                ?>
            </td>
            <td>
                <?php
                    echo "$score4";
                ?>
            </td>
            <td>
                <?php
                    echo "$score5";
                ?>
            </td>
            <tr>
                <td colspan="5">
                    <h3 style="text-align: center;">Average</h3>
                </td>
            </tr>
            <tr>
                <td colspan="5" style="text-align: center;">
                    <?php echo "$average"?>
                </td>
            </tr>
            <tr>
            <td colspan="5">
                    <h3 style="text-align: center;">Grade</h3>
                </td>
            </tr>
            <tr>
            <td colspan="5" style="text-align: center;">
                    <?php echo "$grade"?>
                </td>
            </tr>
        </tr>
    </table>
</body>
</html>