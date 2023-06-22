<?php
 include("./dbconn.php");

// รับข้อมูลเข้า table : customers
 

 $name_th = $_POST["name_th"];
 $address = $_POST["address"];
 $village = $_POST["village"];
 $road = $_POST["road"];
 $refprovid = $_POST["refprovid"];
 $refdistid = $_POST["refdistid"];
 $refsubdistid = $_POST["refsubdistid"];
 $zipcode = $_POST["zipcode"];
 $taxid = $_POST["taxid"];
 $phone = $_POST["phone"];
 $staff = $_POST["staff"];
 
  $sql = "INSERT INTO customers(name_th,address,village,road,refprovid,refdistid,refsubdistid,zipcode,taxid,phone,staff) 
  VALUES('$name_th','$address','$village','$road','$refprovid','$refdistid','$refsubdistid','$zipcode','$taxid','$phone','$staff')"; 
  $result = mysqli_query($con,$sql); 
  if($result){
   echo "<script>";
   echo "alert('บันทึกข้อมูลสำเร็จ');";
   echo "window.location ='1_from_thailand.php'; ";
   echo "</script>";
 }else{
   
   echo mysqli_error($con);
   echo "<script>";
   echo "alert('ข้อมูลผิดพลาด!!');";
   
   echo "window.history.back()";
   
   echo "</script>";    
 }


//   
// $sql = " INSERT INTO customer(cupre,cuname,cuaddress,cuvillage,curoad,refprovid,refdistid,refsubdistid,zipcode,cutaxid,cucontact,cuphone) 
// VALUES ('CUS','บริษัท สราวุธ เทพนิยม','44/216','พนาสนการ์เด้นโฮม','นิมิตใหม่12','1','1','100101','10200','12345678901231','Mint & Game','0841340924')";


      
?>