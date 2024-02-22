<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "php_2_3");
$msg = "";
if (isset($_POST['btn'])) {
    $email = $_POST['emailtxt'];
    $pass = $_POST['passtxt'];
    $sql = "SELECT * FROM login_tbl WHERE email='$email' AND password='$pass'";
    $exec = mysqli_query($conn, $sql);
    $check = mysqli_num_rows($exec);

    if ($check > 0) {
        $_SESSION['login'] = true;
        $_SESSION['email'] = $email;
        header("Location: index2.php");
    } else {
        $msg = "Login Fail" . mysqli_error($conn);
    }
    
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 500px;
            height: 300px;
            background-color: aliceblue;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="emailtxt" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="passtxt" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary" name="btn">Submit</button>
            <div style="color: red; margin-top: 5px; ">
                <?php echo $msg ?>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>