<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name    : 
        <input type="text" name="txtname">
        <br><br>
        Password : 
        <input type="text" name="txtpass">
        <button name="btn" type="submit">Submit</button>
    </form>

    <?php
    if(isset($_POST['btn'])){
        $name = $_POST['txtname'];
        $pass = $_POST['txtpass'];
        

        if(!empty($name) && !empty($pass)){
            if($name =="Meng" && $pass == '123'){
                header("Location: Exercise1.php");
            }
        }

     }
?>  
</body>
</html>

