<?php 
include("./dbconn.php");
include("./isadmin.php");
///////////////////////////////

 echo $id = $_POST['id'];
 echo $email  = $_POST['uname']; 
 echo $pass  = $_POST['pass']; 
 echo $fname  = $_POST['fname']; 
 echo $lname  = $_POST['lname'];
 echo $level  = $_POST['level'];

//////////////////////////////////

 $sql = "UPDATE users SET level = '$level' WHERE id = '$id'";       
 $result = mysqli_query($connect,$sql);
 if($result){
     echo "<script>";
     echo "alert('แก้ไขข้อมูลสำเร็จ');";
     echo "window.location ='viewUser.php'; ";
     echo "</script>"; 
     //header("location:customer.php");
     exit(0);
 }else{
     echo "เกิดข้อผิดพลาดเกิดขึ้น".mysqli_error($connect);
 }
?>