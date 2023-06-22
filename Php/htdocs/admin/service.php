<?php
include("./dbconn.php");
include("./isadmin.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <?php
  $sql_provinces = "SELECT * FROM provinces ";
  $query = mysqli_query($connect, $sql_provinces);

  $sql_jobs = "SELECT * FROM jobs ";
  $query_jobs = mysqli_query($connect, $sql_jobs);
  $row = 1;
  ?>

  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>

  <div class="container">
  <div class="col-sm-6">
    <br>
    <a href="index.php" class="w-100 btn btn-success btn-sm">Home</a>
    <a href="news.php" class="w-100 btn btn-warning btn-sm">News</a>
    <a href="logout.php" class="w-100 btn btn-danger btn-sm">Sign out</a>

    <h3>Web Application Quotation : Request Sevice Order</h3>

    <label for="">
      login:<?php echo "ID" . $id; ?> : <?php echo $uname; ?> >><?php echo $level; ?>
    </label>
  </div>
  
  <div class="container">
  <div class="col-sm-6">
    <hr>
   <div> <center> วันที่ : <font id="date_now"></font></center></div><hr>
    <script>
      var date = new Date().toISOString().slice(0, 10);
      document.getElementById("date_now").innerHTML = date;
    </script>
  </div>
  </div>
  </div>

  <div class="container">
    <div class="col-sm-6">
      <br>
      <form action="service_back.php" method="POST">
        <input type="date" name="date" id="date" placeholder="วันที่" class="form-control form-control-sm" required>
        <br>
        <input type="text" class="form-control form-control-sm" id="" name="name" placeholder="ชื่อ-นามสกุล / บริษัท"  required>
        <br>
        <input type="text" class="form-control" id="" name="address" placeholder="ที่อยู่"  required>
        <br>
        <input type="text" class="form-control" id="" name="village" placeholder="หมู่บ้าน" >
        <br>
        <input type="text" class="form-control" id="" name="road" placeholder="ถนน"  >
        <br>

        <select class="form-control" name="refprovid" id="provinces" required>
          
          <option value="" selected disabled>กรุณาเลือกจังหวัด</option>
          <?php foreach ($query as $value) { ?>
            <option value="<?= $value['id'] ?>"><?= $value['name_th'] ?></option>
            <!ส่งเป็น ID จังหวัด>
            <?php } ?>
        </select>
        <br>

        <select class="form-control" name="refdistid" id="amphures"  required>
          <!ส่งเป็น ID อำเภอ>
            <option value="" selected disabled>กรุณาเลือกอำเภอ</option>
        </select>
        <br>

        <select class="form-control" name="refsubdistid" id="districts" required>
          <!ส่งเป็น ID ตำบล>
            <option value="" selected disabled>กรุณาเลือกตำบล</option>
        </select>
        <br>

        <input type="text" name="zipcode" id="zip_code" class="form-control" placeholder="รหัสไปรษณีย์">
        <!ส่งเป็น รหัสไปรษณีย์>
          <br>
          <input type="text" name="taxid" id="" class="form-control" placeholder="เลขประจำตัวผู้เสียภาษี">
    </div>
   
    <//////////////////////////////////////////////////////////////////////////////////////////////////>
    <div class="col-sm-6">
      <br>
      <input type="text" name="branch_id" id="" class="form-control" placeholder="รหัสสาขา (สำนักงานใหญ่ไม่ต้องระบุ)"><br>
      <input type="text" name="branch_th" id="" class="form-control" placeholder="ชื่อสาขา (สำนักงานใหญ่ไม่ต้องระบุ)"><br>
      <input type="text" name="staff" id="" class="form-control" placeholder="เจ้าหน้าที่"><br>
      <input type="text" name="phone" id="" class="form-control" placeholder="เบอร์ติดต่อ" required><br>
      <input type="text" name="email" id="" class="form-control" placeholder="E-mail"><br>


      <select class="form-control" name="jobsid_1" id="" required>
        <option value="" selected disabled>เลือกรับบริการ / รายละเอียด </option>
          <option value="ซ่อมคอมพิวเตอร์">ซ่อมคอมพิวเตอร์ </option>
          <option value="ซ่อมปริ้นเตอร์">ซ่อมปริ้นเตอร์ </option>
          <option value="ซ่อมเครื่องสำรองไฟ">ซ่อมเครื่องสำรองไฟ</option>
          <option value="">อื่นๆ โปรดระบุ</option>
      </select><br>

      <select class="form-control" name="jobsid_2" id="">
        <option value="" selected disabled>เลือกรับบริการ / รายละเอียด </option>
          <option value="ซ่อมคอมพิวเตอร์">ซ่อมคอมพิวเตอร์ </option>
          <option value="ซ่อมปริ้นเตอร์">ซ่อมปริ้นเตอร์ </option>
          <option value="ซ่อมเครื่องสำรองไฟ">ซ่อมเครื่องสำรองไฟ</option>
          <option value="">อื่นๆ โปรดระบุ</option>
      </select><br>

      <select class="form-control" name="jobsid_3" id="">
        <option value="" selected disabled>เลือกรับบริการ / รายละเอียด </option>
          <option value="ซ่อมคอมพิวเตอร์">ซ่อมคอมพิวเตอร์ </option>
          <option value="ซ่อมปริ้นเตอร์">ซ่อมปริ้นเตอร์ </option>
          <option value="ซ่อมเครื่องสำรองไฟ">ซ่อมเครื่องสำรองไฟ</option>
          <option value="">อื่นๆ โปรดระบุ</option>
      </select><br>

          <span class="input-group-text">รายละเอียด</span>
          <textarea class="form-control" name="detail"></textarea><br>
      
      <center><button type="submit" class="w-100 btn btn-primary btn-sm" >Submit</button></center><br><br><br>
      
      </form>
    </div>
    <div align="right"><a href="./viewservice.php"><button class="btn btn-outline-dark">View All Service Order</button></a></div>
  </div>
</body>

</html>
<?php include('thailand_script.php'); ?>

