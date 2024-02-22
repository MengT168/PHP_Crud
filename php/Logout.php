<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" >
        <button type="submit" name="btnlogout" >Logout</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST['btnlogout'])){
        unset($_SESSION['user']);
        header('location:Login.php');
    }
?>