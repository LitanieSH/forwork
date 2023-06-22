<?php
 include("./dbconn.php");
 include("./convert_bath.php");


 echo $date = $_POST["date"];
 echo $code = 'QUT';
 echo $name_th = $_POST["name_th"];
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
  
  

///// แสดงราคา ตาม id

$jobsid_1 = $_POST["jobsid_1"]."<br>";
$sql = " SELECT * FROM jobs WHERE ( id = '$jobsid_1') ";
$p1 = mysqli_query( $connect, $sql );
$f1 = mysqli_fetch_assoc( $p1 );
echo $f1['prise'] . " =   jobsid_1"."<br>";


$jobsid_2 = $_POST["jobsid_2"]."<br>";
$sql = " SELECT * FROM jobs WHERE ( id = '$jobsid_2') ";
$p2 = mysqli_query( $connect, $sql );
$f2 = mysqli_fetch_assoc( $p2 );
echo $f2['prise'] . "  =  jobsid_2"."<br>";


$jobsid_3 = $_POST["jobsid_3"]."<br>";
$sql = " SELECT * FROM jobs WHERE ( id = '$jobsid_3') ";
$p3 = mysqli_query( $connect, $sql );
$f3 = mysqli_fetch_assoc( $p3 );
echo $f3['prise'] . "  =  jobsid_3"."<br>";


$jobsid_4 = $_POST["jobsid_4"]."<br>";
$sql = " SELECT * FROM jobs WHERE ( id = '$jobsid_4') ";
$p4 = mysqli_query( $connect, $sql );
$f4 = mysqli_fetch_assoc( $p4 );
echo $f4['prise'] . "   = jobsid_4"."<br>";


 $jobsid_5 = $_POST["jobsid_5"]."<br>";
 $sql = " SELECT * FROM jobs WHERE ( id = '$jobsid_5') ";
 $p5 = mysqli_query( $connect, $sql );
 $f5 = mysqli_fetch_assoc( $p5 );
 echo $f5['prise'] . "   = jobsid_5"."<br>";


 $jobsid_6 = $_POST["jobsid_6"]."<br>";
 $sql = " SELECT * FROM jobs WHERE ( id = '$jobsid_6') ";
 $p6 = mysqli_query( $connect, $sql );
 $f6 = mysqli_fetch_assoc( $p6 );
 echo $f6['prise'] . "  =  jobsid_6"."<br>";

 if($jobsid_1 == $f1){

 }

  $sum_prise =  $f1['prise'] + $f2['prise'] +$f3['prise'] + $f4['prise'] + $f5['prise'] + $f6['prise'] ;



  

  
    

     // echo  'ราคาทั้งสิ้น = '.Convert((float)$total),"<br>"; 
     // echo 'ราคารวม = '. $sum_prise . ' Bath'."<br>"; 
     // echo 'Vat 7% = ' .$vat_prise = $sum_prise * 7/100 ."<br>";
     // echo 'ราคารวมภาษี = '.$total = (float)$sum_prise + (float)$vat_prise .' Bath',"<br>";
     // echo  'ราคาทั้งสิ้น = '.Convert((float)$total),"<br>"; 

  $sql = "INSERT INTO orders(date,code,name_th,address,village,road,refprovid,refdistid,refsubdistid,zipcode,taxid,branch_id,branch_th,staff,phone,email,jobsid_1,
  jobsid_2,jobsid_3,jobsid_4,jobsid_5,jobsid_6,sum) 
  VALUES('$date','$code','$name_th','$address','$village','$road','$refprovid','$refdistid','$refsubdistid','$zipcode','$taxid','$branch_id','$branch_th','$staff',
  '$phone','$email','$jobsid_1','$jobsid_2','$jobsid_3','$jobsid_4','$jobsid_5','$jobsid_6','$sum_prise') "; 
   $result = mysqli_query($connect,$sql); 
   if($result){
    echo "<script>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location ='customer_jobs.php'; ";
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