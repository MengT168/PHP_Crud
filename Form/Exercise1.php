<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
            width: 500px;
            border-collapse: collapse;
        }
        tr td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th{
            border: 1px solid black;
            border-collapse: collapse; 
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="">Input A</label>
        <input type="text" name="txtA">
        <br><br>
        <label for="">Input B</label>
        <input type="text" name="txtB">
        <br><br>
        <button name="btn">Submit</button>
    </form>
    <?php
        if(isset($_POST['btn'])){
            $A = $_POST['txtA'];
            $B = $_POST['txtB'];

            $sum = $A+$B;
            $Subtract = $A-$B;
            $Mul = $A*$B;
            $Di = $A/$B;

            echo "<table>
                <tr>
                    <th>Value A</th>
                    <th>Value B</th>
                    <th>Value A+B</th>
                    <th>Value A-B</th>
                    <th>Value AxB</th>
                    <th>Value A/B</th>
                </tr>";

                echo "<tr>
                <td>$A</td>
                <td>$B</td>
                <td>$sum</td>
                <td>$Subtract</td>
                <td>$Mul</td>
                <td>$Di</td>
              </tr>";

            echo "</table>";

        }
    ?>
</body>
</html>