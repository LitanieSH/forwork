<?php
//echo $_GET['id']
require("./dbconn.php");
require("./isadmin.php");
$id = $_GET["id"];
$sql = "SELECT * FROM users WHERE id = '$id' ";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
//print_r($row)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <br>
    <h4 aligh="center">Web Application : Quotation & Computer service</h4>
    <div align="right"> วันที่ : <font id="date_now"></font>
    </div>
    <script>
      var date = new Date().toISOString().slice(0, 10);
      document.getElementById("date_now").innerHTML = date;
    </script>
    <hr>
  </div>
  
    <div class="container ">
        <h4 class="text-center">แก้ไขข้อมูลผู้ใช้งานระบบ</h4><hr>
        <form action="updateUser.php" method="POST">
            <div class="input-group ">
                
                <input type="hidden" value="<?php echo $row["id"];?>" name="id">
                <span for="text" class="input-group-text">E-mail</span>    
                <input type="text" name="uname" id="" class="form-control" value="<?php echo $row["uname"]?>" readonly>
                <span for="text" class="input-group-text">รหัสผ่าน</span>    
                <input type="password" name="pass" id="" class="form-control" value="<?php echo $row["pass"]?>" readonly>
            </div><hr>
            <div class="input-group">
                <span for="fname" class="input-group-text">ชื่อ</span>    
                <input type="text" name="fname" id="" class="form-control" value="<?php echo $row["fname"]?>" readonly>
                <span for="lname" class="input-group-text">นามสกุล</span>    
                <input type="text" name="lname" id="" class="form-control" value="<?php echo $row["lname"]?>" readonly>
            </div><hr>
            <div class="input-group">
                <span for="level" class="input-group-text">ระดับผู้ใช้งาน</span>
                <SELECT class="form-control" name="level" >
                <option selected value="admin">Admin</option>
                <option selected value="user">User</option>
                <option selected value="<?php echo $row["level"]?>"> Select ( <?php echo $row["level"]?> )</option></SELECT>

            </div><hr>
            <a href="viewUser.php" class="btn btn-primary btn-sm">Back</a>
            <input type="submit" value="Update" class="btn btn-success btn-sm">
        </form>    
        
    </div>
</body>

</html>