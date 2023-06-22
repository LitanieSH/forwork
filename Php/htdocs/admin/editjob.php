<?php
//echo $_GET['id']
require("./dbconn.php");
require("./isadmin.php");
$id = $_GET["id"];
$sql = "SELECT * FROM jobs WHERE id = '$id' ";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
//print_r($row)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลบริการ</title>
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
  <div class="container" align="right">
    <p>login: <?php echo $uname; ?> >><?php echo $level; ?> </p>
    <a href="logout.php" class="btn btn-outline-danger">Sign out</a>
  </div>
    <div class="container ">
        <h4 class="text-center">แก้ไขข้อมูลบริการ</h4><hr>
        <form action="updatejob.php" method="POST">
            <input type="hidden" value="<?php echo $row["id"];?>" name="id">
            <div class="input-group ">
                <span class="input-group-text">รหัสบริการ</span>
                <input type="text" name="codeid" id="" class="form-control" value="<?php echo $row["code"].$row['id']?>" readonly>
            </div><hr>

            <div class="input-group mb-3">
                <span for="jobs" class="input-group-text">บริการ</span>    
                <input type="text" name="jobs" id="" class="form-control" value="<?php echo $row["jobs_name"]?>" >
            </div><hr>

            <div class="input-group mb-3">
                <span for="datails" class="input-group-text">รายละเอียด</span>    
                <input type="text" name="details" id="" class="form-control" value="<?php echo $row["details_th"];?>">
            </div><hr>

            <div class="input-group mb-3">
                <span for="price" class="input-group-text">ราคา</span>    
                <input type="text" name="price" id="" class="form-control" value="<?php echo $row["prise"]?>">
            </div><hr>
        
            <input type="submit" value="Update" class="btn btn-success">
            <!input type="reset" value="" class="btn btn-danger">
            <a href="viewjob.php" class="btn btn-primary">Back</a>
        </form>    
        
    </div>
</body>

</html>