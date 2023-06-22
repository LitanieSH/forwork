<?php
//Connect SQL
require("./sql/dbconn.php");

// รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร

$uname = $_POST["uname"];
$pass = $_POST["pass"];
$cpass = $_POST["cpass"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$level = "user";


if($cpass == ""){
    echo "<script>";
	echo "alert('กรุณาใส่รหัสให้ครบ');";
	echo "window.location ='register.php'; ";
	echo "</script>";

}elseif($cpass != $pass){
    echo "<script>";
	echo "alert('กรุณาตรวจสอบรหัสอีกครับ');";
	echo "window.history.back()";
	echo "</script>";

}elseif($cpass == $pass){
   
       $sql = "INSERT INTO users(uname,pass,fname,lname,level) VALUES('$uname','$pass','$fname','$lname','$level')";
       if(mysqli_query($connect,$sql)){
        echo "<script>";
	    echo "alert('บันทึกข้อมูลสำเร็จ');";
	    echo "window.location ='login.php'; ";
	    echo "</script>";

       }else{
        echo "<script>";
	    echo "alert('ข้อมูลผิดพลาด!!');";
        echo "window.history.back()";
	    echo "</script>";
       }
    }

?>


