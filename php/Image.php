<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data" >
        <label for="">Choose Image</label>
        <br><br>
        <input type="file" name="img" >
        <button type="submit" name="btn" >Upload</button>
    </form>
    <?php
    if(isset($_POST['btn'])){
        $Imagename = $_FILES['img']['name'];
        $Imagename = rand(1,999).''.$Imagename;
        $type = $_FILES['img']['type'];
        $size = $_FILES['img']['size'];
        $storein=$_FILES['img']['tmp_name'];

        echo "<ul>";
            echo "<li>File name: $Imagename";
            echo "<li>File Type: $type";
            echo "<li>File Size : $size";
            echo "<li>Store in : $storein";
            echo"</ul>";
            move_uploaded_file($storein , "Image/$Imagename");
            echo "<img src='Image/$Imagename' width='250'/>";
    }
?>
</body>
</html>

