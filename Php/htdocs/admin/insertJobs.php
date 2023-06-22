<?php
//echo $_GET['id']
require("./dbconn.php");
require("./isadmin.php");

 $jobspre = "JOBS";
 $jobsname = $_POST['jobsname'];
 $jobsunit = $_POST['jobsunit'];
 $jobsdetails = $_POST['jobsdetails'];

$sql = "INSERT INTO jobs(jobspre,jobsname,jobsunit,jobsdetails) VALUES ('$jobspre','$jobsname','$jobsunit','$jobsdetails')"; 
echo $result = mysqli_query($connect,$sql); 

if($result){
    echo "<script>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location ='fullpage.php'; ";
    echo "</script>";
}else{
    
    echo mysqli_error($connect);
    echo "<script>";
    echo "alert('ข้อมูลผิดพลาด!!');";
    
    //echo "window.history.back()";
    
    echo "</script>";    
}
