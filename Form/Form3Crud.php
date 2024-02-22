<?php

    $conn = mysqli_connect("localhost","root","","student_db");

  $op="";
  $id="";
  if(isset($_GET['op']))
    $op=$_GET['op'];
  

  if (isset($_GET['id']))
    $id = $_GET['id'];

    if(isset($_POST['btnSub'])){
        $stuname = $_POST['txtuser'];
        $stugender = $_POST['txtgender'];
        $stuage = $_POST['txtage'];
        $stuaddress = $_POST['txtaddress'];
        $stuscore = $_POST['txtscore'];

        $msg="";

        $sqlch = "SELECT * FROM student_information_tbl WHERE stuName = '$stuname'";
        $exec = mysqli_query($conn,$sqlch);
        $check = mysqli_num_rows($exec);
        if($check>0){
            $msg = "Student Already Exist";
        }
        else{
            $sql="INSERT INTO `student_information_tbl` (`stuId`, `stuName`, `stuGender`, `stuAge`, `stuAddress`, `stuScore`) 
            VALUES (NULL, '$stuname', '$stugender', '$stuage', '$stuaddress', '$stuscore');";
         $exec=mysqli_query($conn,$sql);
         if($exec){
             $msg="<p>Insert Success</p>";
         }
         else{
            $msg="<p>Insert Success</p>";
         }
        }
    }

    if($op=='del'){
      $sql="DELETE FROM student_information_tbl WHERE stuID = '$id' ";
      $exec=mysqli_query($conn,$sql);
      if($exec){
        $msg="Delete Success";
      }else{
        $msg="Delete Fail";
      }
    }

    


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    
</head>
<body>
<div class="container ">
    <h1>Crud</h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" style="float: right; margin-bottom: 15px; " data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add New
</button>

<?php
  if($op=='edit'){
    $sql="SELECT *FROM student_information_tbl WHERE stuId = $id ";
    $exec = mysqli_query($conn, $sql);
    while ($rw = mysqli_fetch_array($exec)) {
?>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Student Information</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input name="txtuser" value="<?php echo $rw['stuName'] ?>" type="text" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Gender</label>
    <select name="txtgender" id="" class="form-select"  >
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select>
  </div>
  <div class="mb-3">
    <label  class="form-label">Age</label>
    <input type="text" name="txtage" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" name="txtaddress" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Score</label>
    <input type="text" name="txtscore" class="form-control" >
  </div>
  <?php
    }
  ?>
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  <button type="submit" name="btnSub" class="btn btn-success" >Update</button>
</form>
      </div>
      
    </div>
  </div>
</div>
<?php
    
  }else{
?>

<!-- Modal -->
<div class="modal fade 1" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Student Information</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input name="txtuser" type="text" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Gender</label>
    <select name="txtgender" id="" class="form-select"  >
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select>
  </div>
  <div class="mb-3">
    <label  class="form-label">Age</label>
    <input type="text" name="txtage" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" name="txtaddress" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Score</label>
    <input type="text" name="txtscore" class="form-control" >
  </div>
  
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  <button type="submit" name="btnSub" class="btn btn-success" >Add</button>
</form>
      </div>
      
    </div>
  </div>
</div>
<?php
  }
?>
<table class="table table-dark table-hover" style="table-layout: fixed; margin-top: 15px; " >
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Address</th>
            <th>Score</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM student_information_tbl";
            $exec = mysqli_query($conn,$sql);
                while($rw=mysqli_fetch_array($exec)){
            ?>
            <tr>
                <td><?php echo $rw['stuId'] ?></td>
                <td><?php echo $rw['stuName'] ?></td>
                <td><?php echo $rw['stuGender'] ?></td>
                <td><?php echo $rw['stuAge'] ?></td>
                <td><?php echo $rw['stuAddress'] ?></td>
                <td><?php echo $rw['stuScore'] ?></td>
                <td>
                <a href="?op=edit&id=<?php echo $rw['stuId']; ?>" class="btn btn-secondary update_btn"  >Update</a>
                  <a onclick="confirm('Are You Want to Delete')" href="?op=del&id=<?=$rw['stuId'];?>" class="btn btn-danger" >Delete</a>
                </td> 
            </tr>
            <?php
                }
            ?>
        </tbody>
        
   </table>
  
    </div>

</body>
</html>