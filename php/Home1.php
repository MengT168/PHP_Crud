



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(empty($_SESSION['user']))
        {
            header('location:Login.php');
        }
        echo '<h1>'.$_SESSION['user'].'</h1>'
    ?>
    <h1><a href="Logout.php">Logout</a></h1>
</body>
</html>