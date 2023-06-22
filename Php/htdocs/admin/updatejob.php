<?php 
include("./dbconn.php");
include("./isadmin.php");
///////////////////////////////

$id = $_POST["id"];
echo $jobs  = $_POST['jobs'];
echo $jdetails  = $_POST['details']; 
echo $jprice  = $_POST['price']; 

//////////////////////////////////
$sql = "UPDATE jobs SET prise = '$jprice', jobs_name = '$jobs', details_th = '$jdetails' WHERE id = '$id'";     
$result = mysqli_query($connect,$sql);


if($result){
    echo "<script>";
    echo "alert('แก้ไขข้อมูลสำเร็จ');";
    echo "window.location ='viewjob.php'; ";
    echo "</script>"; 
    //header("./viewjob.php");
    exit(0);
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น".mysqli_error($connect);
}
?>