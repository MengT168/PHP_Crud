<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="post" class="form1">
        <div class="box1">
        <label for="">ID : </label>
        <input type="text" name="txtid" >
        </div>
        <div class="box1">
        <label for="">Name : </label>
        <input type="text" name="txtname" >
        </div>
        <div class="box1">
        <label for="">Gender : </label>
        <input type="text" name="txtgender">
        </div>
        
        <div class="box1">
        <label for="">Salary : </label>
        <input type="text" name="txtsalary">
        </div>
        <div class="box1">
        <label for="">Position : </label>
        <select name="position" id="" class="Position" >
            <option value="Manager">Manager</option>
            <option value="Accounting">Accounting</option>
            <option value="IT">IT</option>
        </select>
        </div>

        <input id="inputS" type="submit" name="btn_sub" value="Submit">
        

    </form>
    </div>

    <?php
    if(isset($_POST['btn_sub'])){
        $id = $_POST['txtid'];
        $name = $_POST['txtname'];
        $gender = $_POST['txtgender'];
        $salary = $_POST['txtsalary'];
        $position = $_POST['position'];
        $bonus="";
        if($position == "Manager" ){
            $bonus="20%";
            $salary += (20/100)*$salary;
        }else if($position == "Accounting"){
            $bonus="15%";
            $salary += (15/100)*$salary;
        }
        else{
            $bonus="25%";
            $salary += (20/100)*$salary;
        }

        echo "<table>

        <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>Gender</th>
        <th>Position</th>
        <th>Bonus</th>
        <th>Salary</th>

        <tr/>";

        echo "<tr>
                <td>$id</td>
                <td>$name</td>
                <td>$gender</td>
                <td>$position</td>
                <td>$bonus</td>
                <td>$salary</td>
              </tr>";

            echo "</table>";
    }
?>
    

    
</body>
</html>

