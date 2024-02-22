<?php
    session_start();
        
    $op="";

    if(isset($_GET['op'])){
        $op=$_GET['op'];
    }

    if($op=='logout'){
        unset($_SESSION['login']);
        
    }

    if(isset($_SESSION['login'])==false){
        header("location: index.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a onclick="return confirm('Are you sure to logout?');" href="?op=logout" >Logout</a>
    <h1>Hello <?php echo $_SESSION['email'] ?></h1>
</body>
</html>

