<?php
 include("./dbconn.php");
 include("./convert_bath.php");

  $date = $_POST["date"];
  $code = 'SER';
  $name_th = $_POST["name"];
  $address = $_POST["address"];
  $village = $_POST["village"];
  $road = $_POST["road"];

  $refprovid = $_POST["refprovid"];
  $refdistid = $_POST["refdistid"]; 
  $refsubdistid = $_POST["refsubdistid"];

  $zipcode = $_POST["zipcode"];
  $taxid = $_POST["taxid"];
  $branch_id = $_POST["branch_id"];
  $branch_th = $_POST["branch_th"];
  $staff = $_POST["staff"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $jobsid_1 = $_POST["jobsid_1"];
  $jobsid_2 = $_POST["jobsid_2"];
  $jobsid_3 = $_POST["jobsid_3"];
  $jobsid_3 = $_POST["jobsid_4"];
  $details = $_POST["details"];


  $sq5 = "SELECT name_th FROM provinces WHERE id='$refprovid'";
  $query5 = mysqli_query($connect, $sq5);
  $row5 = $query5->fetch_assoc();
  $refprovid = strval($row5['name_th']);

  $sq6 = "SELECT name_th FROM amphures WHERE id='$refdistid'";
  $query6 = mysqli_query($connect, $sq6);
  $row6 = $query6->fetch_assoc();
  $refdistid = strval($row6['name_th']);

  $sq7 = "SELECT name_th FROM districts WHERE id='$refsubdistid'";
  $query7 = mysqli_query($connect, $sq7);
  $row7 = $query7->fetch_assoc();
  $refsubdistid = strval($row7['name_th']);

///// แสดงราคา ตาม id
    
     // echo  'ราคาทั้งสิ้น = '.Convert((float)$total),"<br>"; 
     // echo 'ราคารวม = '. $sum_prise . ' Bath'."<br>"; 
     // echo 'Vat 7% = ' .$vat_prise = $sum_prise * 7/100 ."<br>";
     // echo 'ราคารวมภาษี = '.$total = (float)$sum_prise + (float)$vat_prise .' Bath',"<br>";
     // echo  'ราคาทั้งสิ้น = '.Convert((float)$total),"<br>"; 

     $sql = "INSERT INTO service(date,code,name,address,village,road,refprovid,refdistid,refsubdistid,zipcode,taxid,branch_id,branch_th,staff,phone,email,jobsid_1,
     jobsid_2,jobsid_3,jobsid_4,details) 
     VALUES('$date','$code','$name_th','$address','$village','$road','$refprovid','$refdistid','$refsubdistid','$zipcode','$taxid','$branch_id','$branch_th','$staff',
     '$phone','$email','$jobsid_1','$jobsid_2','$jobsid_3','$jobsid_4','$details') "; 
      $result = mysqli_query($connect,$sql); 
      if($result){
       echo "<script>";
       echo "alert('บันทึกข้อมูลสำเร็จ');";
       echo "window.location ='./viewservice.php'; ";
       echo "</script>";
      }else{
       echo mysqli_error($connect);
       echo "<script>";
       echo "alert('ข้อมูลผิดพลาด!!');";
       echo "window.history.back()";
       echo "</script>";    
      }


 // วิธีใช้งาน convert bath
 // $num1 = '3500.01'; 
 // $num2 = '120000.50'; 
 // echo  $num1  . "&nbsp;=&nbsp;" .Convert($num1),"<br>"; 
 // echo  $num2  . "&nbsp;=&nbsp;" .Convert($num2),"<br>"; 
     
?>