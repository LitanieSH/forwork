<?php
// รอการแก้ไขหน้าจอนี้ใหม่ให้แสเง table quatation
/// แสดงวันที่และ level
include("./dbconn.php");
include("./isadmin.php");
$sql = "SELECT * FROM users WHERE 'id,uname' ";
$result = mysqli_query($connect, $sql);

/// การดึงข้อมูลมาแสดง


$sql2 = "SELECT * FROM jobs ORDER BY 'code,id,jobs_name,details_th,prise' DESC";
$result2 = mysqli_query($connect,$sql2);
$count = mysqli_num_rows($result2);
$order=1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/button.css">
  <link rel="stylesheet" href="css/table.css">

  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

  <title>View Quatation</title>
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap" rel="stylesheet">

  

</head>

<script>
    $(document).ready(function () {
    $('#myTable').DataTable();
});
</script>



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
  <br>
  <div class="container" align="">
    <a href="./index.php"><button class="btn btn-outline-dark">Back</button></a>&nbsp;&nbsp;
    <hr>
  </div>

  <div class="container">
    <h6>แก้ไขงาน</h6>
    <hr>
  </div>
  <div class="container">
  <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>บริการ</th>
                <th>รายละเอียด</th>
                <th>ราคา</th>
                <th>Edit</th>
                <?php

?>
            </tr>
        </thead>
        <tbody>
        <?php while($row=mysqli_fetch_assoc($result2)){?>
            <tr>
                <td><?php echo $order++ ;?></td>
                <td><?php echo $row["code"].$row["id"] ;?></td>
                <td><?php echo $row["jobs_name"] ;?></td>
                <td><?php echo $row["details_th"] ;?></td>
                <td><?php echo $row["prise"] ;?></td>
                
                <td>
                <a href="editjob.php?id=<?php echo $row["id"]?>" class="btn btn-primary">Edit</a>
                </td>
                
          <?php } ?>
              
            </tr>
          <?php ?>
        </tbody>
      </table>
    </div>
</body>

<script>
function checkAll(){
    var form_element=document.forms[1].length; 
    for(i=0;i<form_element-1;i++){
        document.forms[1].elements[i].checked=true;
    }
}
function uncheckAll(){
    var form_element=document.forms[1].length; 
    for(i=0;i<form_element-1;i++){
        document.forms[1].elements[i].checked=false;
    }
}
</script>

</html>