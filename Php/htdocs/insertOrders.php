<?php
 include("./sql/dbconn.php");
 include("./convert_bath.php");

  $date = $_POST["date"];
  $code = 'QUT';
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
  $jobsid_4 = $_POST["jobsid_4"];
  $jobsid_5 = $_POST["jobsid_5"];
  $jobsid_6 = $_POST["jobsid_6"];

//จังหวัด อำเภอ ตำบล

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
  
  $pc1=0;
  $pc2=0;
  $pc3=0;
  $pc4=0;
  $pc5=0;
  $pc6=0;
  $sum=0; 
//job
if ($jobsid_1!=null){
$sq11 = "SELECT * FROM jobs WHERE id='$jobsid_1'";
$query11 = mysqli_query($connect, $sq11);
$row11 = $query11->fetch_assoc();
$jobsid_1 = strval($row11['jobs_name']).' - '.strval($row11['details_th']);
$sum = $sum+(intval($row11['prise']));
$pc1 = intval($row11['prise']);
}

if ($jobsid_2!=null){
$sq22 = "SELECT * FROM jobs WHERE id='$jobsid_2'";
$query22 = mysqli_query($connect, $sq22);
$row22 = $query22->fetch_assoc();
$jobsid_2 = strval($row22['jobs_name']).' - '.strval($row22['details_th']);
$sum = $sum+(intval($row22['prise']));
$pc2 = intval($row22['prise']);
}

if ($jobsid_3!=null){
$sq33 = "SELECT * FROM jobs WHERE id='$jobsid_3'";
$query33 = mysqli_query($connect, $sq33);
$row33 = $query33->fetch_assoc();
$jobsid_3 = strval($row11['jobs_name']).'  '.strval($row33['details_th']);
$sum = $sum+(intval($row33['prise']));
$pc3 = intval($row33['prise']);
}

if ($jobsid_4!=null){
$sq44 = "SELECT * FROM jobs WHERE id='$jobsid_4'";
$query44 = mysqli_query($connect, $sq44);
$row44 = $query44->fetch_assoc();
$jobsid_4 = strval($row44['jobs_name']).'  '.strval($row44['details_th']);
$sum = $sum+(intval($row44['prise']));
$pc4 = intval($row44['prise']);
}

if ($jobsid_5!=null){
$sq55 = "SELECT * FROM jobs WHERE id='$jobsid_5'";
$query55 = mysqli_query($connect, $sq55);
$row55 = $query55->fetch_assoc();
$jobsid_5 = strval($row55['jobs_name']).'  '.strval($row55['details_th']);
$sum = $sum+(intval($row55['prise']));
$pc5 = intval($row55['prise']);
}

if ($jobsid_6!=null){
$sq66 = "SELECT * FROM jobs WHERE id='$jobsid_6'";
$query66 = mysqli_query($connect, $sq66);
$row66 = $query66->fetch_assoc();
$jobsid_6 = strval($row66['jobs_name']).'  '.strval($row66['details_th']);
$sum = $sum+(intval($row66['prise']));
$pc6 = intval($row66['prise']);
}

///// แสดงราคา ตาม id
    
     // echo  'ราคาทั้งสิ้น = '.Convert((float)$total),"<br>"; 
     // echo 'ราคารวม = '. $sum_prise . ' Bath'."<br>"; 
     // echo 'Vat 7% = ' .$vat_prise = $sum_prise * 7/100 ."<br>";
     // echo 'ราคารวมภาษี = '.$total = (float)$sum_prise + (float)$vat_prise .' Bath',"<br>";
     // echo  'ราคาทั้งสิ้น = '.Convert((float)$total),"<br>"; 

     $sql = "INSERT INTO orders(date,code,name_th,address,village,road,refprovid,refdistid,refsubdistid,zipcode,taxid,branch_id,branch_th,staff,phone,email,jobsid_1,
     jobsid_2,jobsid_3,jobsid_4,jobsid_5,jobsid_6,total,price1,price2,price3,price4,price5,price6) 
     VALUES('$date','$code','$name_th','$address','$village','$road','$refprovid','$refdistid','$refsubdistid','$zipcode','$taxid','$branch_id','$branch_th','$staff',
     '$phone','$email','$jobsid_1','$jobsid_2','$jobsid_3','$jobsid_4','$jobsid_5','$jobsid_6','$sum','$pc1','$pc2','$pc3','$pc4','$pc5','$pc6') "; 
      $result = mysqli_query($connect,$sql); 
      if($result){
       echo "<script>";
       echo "alert('บันทึกข้อมูลสำเร็จ');";
       
       echo "window.location ='./vieworders.php'; ";
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