<?php
require('./dbconn.php');
include('isadmin.php');

$sql = "SELECT * FROM users";
$result = mysqli_query($connect, $sql);
$count = mysqli_num_rows($result); 
$order = 1;

$id = $_GET["id"];


$sql = "DELETE FROM users WHERE id = '$id' ";
$result=mysqli_query($connect,$sql);
echo $result;

if($result){
    header("location:viewUser.php");
   exit(0);
}else{
   echo "เกิดข้อผิดพลาดเกิดขึ้น";
}
?>