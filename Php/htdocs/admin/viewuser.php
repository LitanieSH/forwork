<?php
/// แสดงวันที่และ level
include("./dbconn.php");
include("./isadmin.php");
$sql = "SELECT * FROM users WHERE 'id,uname' ";
$result = mysqli_query($connect, $sql);

/// การดึงข้อมูลมาแสดง
$sql2 = "SELECT * FROM users ORDER BY uname DESC";
$result2 = mysqli_query($connect, $sql2);
$count = mysqli_num_rows($result2);
$order = 1;
$tap = ' ';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/button.css">
  <link rel="stylesheet" href="css/table.css">
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

  <title>View User</title>
</head>


<script>
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>


<body>
  <div class="container">
    <br>
    <h4 aligh="center">Web Application : View user</h4>
    <div align="right"> วันที่ : <font id="date_now"></font>
    </div>
    <script>
      var date = new Date().toISOString().slice(0, 10);
      document.getElementById("date_now").innerHTML = date;
    </script>
    <hr>
  </div>
  
  <div class="container">
  <div class="col-sm-6">
    <br>
    <a href="index.php" class="btn btn-success btn-sm">Home</a>
    <a href="viewUser.php" class="btn btn-warning btn-sm">User</a>
    <a href="request_service.php" class="btn btn-success btn-sm">Service</a>
    <a href="request_orders.php" class="btn btn-warning btn-sm">Order</a>
    <a href="logout.php" class="btn btn-danger btn-sm">Sign out</a>
  </div>
  </div>

  <div class="container" align="right">
    <center>
      <h4>ข้อมูลผู้ใช้งานระบบ</h4>
    </center>
    <div class="container">
    <table id="myTable" class="display" style="width: 100%;">
        <thead>
          <tr>
            <th>#</th>
            <th>ID</th>
            <th>E-mail</th>
            <th>Password</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Level</th>
            <th>Edit</th>
          
            <?php
            if ($level == 'admin') {
              echo '<th>Delete</th>';
            }
            ?>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($result2)) { ?>
            <tr>
              <td><?php echo $order++; ?></td>
              <td><?php echo $row["code"] . $row["id"]; ?></td>
              <td><?php echo $row["uname"]; ?></td>
              <td><?php echo $row["pass"]; ?></td>
              <td><?php echo $row["fname"]; ?></td>
              <td><?php echo $row["lname"]; ?></td>
              <td><?php echo $row["level"]; ?></td>
              <td>
                <a href="editUser.php?id=<?php echo $row["id"] ?>" class="btn btn-primary btn-sm">Edit</a>
              </td>
              <?php if ($level == 'admin'){ ?>
                <td>
                    <a href='deleteUser.php?id=<?php echo $row["id"]?> 'class="btn btn-danger btn-sm" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">Delete</a>
                </td>
                
          <?php } ?>
              
            </tr>
          <?php } ?>
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