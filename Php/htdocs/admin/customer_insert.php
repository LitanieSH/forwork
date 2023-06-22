<?php
 include("./dbconn.php");
 include("./convert_bath.php");

 echo $date = $_POST["date"];
 echo $code = 'QUT';
 echo $name_th = $_POST["name"];
 echo $address = $_POST["address"];
 echo $village = $_POST["village"];
 echo $road = $_POST["road"];

 echo $refprovid = $_POST["refprovid"];
 echo $refdistid = $_POST["refdistid"]; 
 echo $refsubdistid = $_POST["refsubdistid"];

 echo $zipcode = $_POST["zipcode"];
 echo $taxid = $_POST["taxid"];
 echo $branch_id = $_POST["branch_id"];
 echo $branch_th = $_POST["branch_th"];
 echo $staff = $_POST["staff"];
 echo $phone = $_POST["phone"];
 echo $email = $_POST["email"];
 echo $jobsid_1 = $_POST["jobsid_1"];
 echo $jobsid_2 = $_POST["jobsid_2"];
 echo $jobsid_3 = $_POST["jobsid_3"];
 echo $jobsid_4 = $_POST["jobsid_4"];
 echo $jobsid_5 = $_POST["jobsid_5"];
 echo $jobsid_6 = $_POST["jobsid_6"];

//จังหวัด อำเภอ ตำบล

  $sq5 = "SELECT name_th FROM provinces WHERE id='$refprovid'";
  $query5 = mysqli_query($connect, $sq5);
  $row5 = $query5->fetch_assoc();
  echo $refprovid = strval($row5['name_th']);

  $sq6 = "SELECT name_th FROM amphures WHERE id='$refdistid'";
  $query6 = mysqli_query($connect, $sq6);
  $row6 = $query6->fetch_assoc();
  echo $refdistid = strval($row6['name_th']);

  $sq7 = "SELECT name_th FROM districts WHERE id='$refsubdistid'";
  $query7 = mysqli_query($connect, $sq7);
  $row7 = $query7->fetch_assoc();
  echo $refsubdistid = strval($row7['name_th']);
$sum=0; 
//job
if ($jobsid_1!=null){
$sq11 = "SELECT * FROM jobs WHERE id='$jobsid_1'";
$query11 = mysqli_query($connect, $sq11);
$row11 = $query11->fetch_assoc();
echo $jobsid_1 = ($row11['jobs_name']).' - '.strval($row11['details_th']).' - '.strval($row11['prise'].' บาท ');
echo $sum = $sum+(intval($row11['prise']));
}

if ($jobsid_2!=null){
$sq22 = "SELECT * FROM jobs WHERE id='$jobsid_2'";
$query22 = mysqli_query($connect, $sq22);
$row22 = $query22->fetch_assoc();
echo $jobsid_2 = strval($row22['jobs_name']).' - '.strval($row22['details_th']).' - '.strval($row22['prise'].' บาท ');
echo $sum = $sum+(intval($row22['prise']));
}

if ($jobsid_3!=null){
$sq33 = "SELECT * FROM jobs WHERE id='$jobsid_3'";
$query33 = mysqli_query($connect, $sq33);
$row33 = $query33->fetch_assoc();
echo $jobsid_3 = strval($row11['jobs_name']).' - '.strval($row33['details_th']).' - '.strval($row33['prise'].' บาท ');
echo $sum = $sum+(intval($row33['prise']));
}

if ($jobsid_4!=null){
$sq44 = "SELECT * FROM jobs WHERE id='$jobsid_4'";
$query44 = mysqli_query($connect, $sq44);
$row44 = $query44->fetch_assoc();
echo $jobsid_4 = strval($row44['jobs_name']).' - '.strval($row44['details_th']).' - '.strval($row44['prise'].' บาท ');
echo $sum = $sum+(intval($row44['prise']));
}

if ($jobsid_5!=null){
$sq55 = "SELECT * FROM jobs WHERE id='$jobsid_5'";
$query55 = mysqli_query($connect, $sq55);
$row55 = $query55->fetch_assoc();
echo $jobsid_5 = strval($row55['jobs_name']).' - '.strval($row55['details_th']).' - '.strval($row55['prise'].' บาท ');
echo $sum = $sum+(intval($row55['prise']));
}

if ($jobsid_6!=null){
$sq66 = "SELECT * FROM jobs WHERE id='$jobsid_6'";
$query66 = mysqli_query($connect, $sq66);
$row66 = $query66->fetch_assoc();
echo $jobsid_6 = strval($row66['jobs_name']).' - '.strval($row66['details_th']).' - '.strval($row66['prise'].' บาท ');
echo $sum = $sum+(intval($row66['prise']));
}

///// แสดงราคา ตาม id
    
     // echo  'ราคาทั้งสิ้น = '.Convert((float)$total),"<br>"; 
     // echo 'ราคารวม = '. $sum_prise . ' Bath'."<br>"; 
     // echo 'Vat 7% = ' .$vat_prise = $sum_prise * 7/100 ."<br>";
     // echo 'ราคารวมภาษี = '.$total = (float)$sum_prise + (float)$vat_prise .' Bath',"<br>";
     // echo  'ราคาทั้งสิ้น = '.Convert((float)$total),"<br>"; 

     $sql = "INSERT INTO orders(date,code,name_th,address,village,road,refprovid,refdistid,refsubdistid,zipcode,taxid,branch_id,branch_th,staff,phone,email,jobsid_1,
     jobsid_2,jobsid_3,jobsid_4,jobsid_5,jobsid_6,total) 
     VALUES('$date','$code','$name_th','$address','$village','$road','$refprovid','$refdistid','$refsubdistid','$zipcode','$taxid','$branch_id','$branch_th','$staff',
     '$phone','$email','$jobsid_1','$jobsid_2','$jobsid_3','$jobsid_4','$jobsid_5','$jobsid_6','$sum') "; 
      echo $result = mysqli_query($connect,$sql); 
//      if($result){
//       echo "<script>";
//       echo "alert('บันทึกข้อมูลสำเร็จ');";
//       echo "window.location ='./request_order.php'; ";
//       echo "</script>";
//      }else{
//       echo mysqli_error($connect);
//       echo "<script>";
//       echo "alert('ข้อมูลผิดพลาด!!');";
//       echo "window.history.back()";
//       echo "</script>";    
//      }
//
//
 // วิธีใช้งาน convert bath
 // $num1 = '3500.01'; 
 // $num2 = '120000.50'; 
 // echo  $num1  . "&nbsp;=&nbsp;" .Convert($num1),"<br>"; 
 // echo  $num2  . "&nbsp;=&nbsp;" .Convert($num2),"<br>"; 
     
?>