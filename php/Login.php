

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <form  class="form-control" method="post" >
            <label for="" class="form-label" >Email</label>
            <input type="email" class="form-control" name="email" >
            <label for="" class="form-label" >Password</label>
            <input type="text" class="form-control" name="pwd" >
            <button type="submit" name="btnlog" >Login</button>
        </form>
    </div>
</body>
</html>

<?php
    session_start();
    if(isset($_POST['btnlog'])){
        $email=$_POST['email'];
        $pass = $_POST['pwd'];

        

        if($email == 'tainghokmeng@gmail.com' && $pass ==='123'){
            echo '
            <script>
                $(document).ready(function(){
                    swal({
                        title: "Login Success",
                        text: "You clicked the button!",
                        icon: "success",
                        button: "Success",
                    }).then((result)=>{
                        window.location="Home1.php";
                    }).cath((err)=>{
            
                    });
                })
            </script>
            ';
            $_SESSION['user']=$email;
        }
        else{
            echo 'error';
        }

    }

?>