<?php
require('./fpdf/fpdf.php');
require("./dbconn.php");
require("./isadmin.php");

$null = ", ";
$id = $_row[0];
$sql = "SELECT  quatation.qid,quatation.qpre,quatation.cupre,quatation.cuid,quatation.jobsid,customer.cuname,customer.cuaddress1,customer.cuaddress2,
customer.cuaddress3,customer.cuphone, customer.cutaxid ,quatation.qcontact,quatation.qphone,quatation.qemail,jobs.jobspre,jobs.jobsid,jobs.jobsname,quatation.qdate
,quatation.comment
from quatation, customer,jobs
where quatation.cuid = customer.cuid AND quatation.jobsid = jobs.jobsid AND qid = '$id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

$pdf = new FPDF();
$pdf -> AddPage('');
$pdf->AddFont('THSarabunNew','','THSarabunNew.php');
$pdf->AddFont('THSarabunNew','B','THSarabunNew_b.php');

$pdf->Image('logo/logo.png',90,10,30);
$pdf->SetY(38);
$pdf->SetFont('THSarabunNew','B',20);
$pdf->Cell(0,10,iconv('UTF-8','cp874','Quotation'),0,1,'C');
$pdf->SetFont('THSarabunNew','B',16);
$pdf->Cell(15, 10, iconv('UTF-8', 'cp874', 'ผู้ขาย : '));
$pdf->SetFont('THSarabunNew','',16);
$pdf->Cell(40, 10, iconv('UTF-8', 'cp874', 'บริษัท ตัวอย่าง จำกัด'),0,1);
$pdf->Cell(40, 10, iconv('UTF-8', 'cp874', '44/216 ซอยนิมิตใหม่ 12 แขวงทรายกองดิน'),0,1);
$pdf->Cell(40, 10, iconv('UTF-8', 'cp874', 'เขตคลองสามวา กรุงเทพฯ 10510'),0,1);
$pdf->Cell(40, 10, iconv('UTF-8', 'cp874', 'เลขประจำตัวผู้เสียภาษี : 1234567890123'),0,1);
$pdf->Cell(40, 10, iconv('UTF-8', 'cp874', 'โทร : 02-123-4567'),0,1);
$pdf->SetFont('THSarabunNew','',16);
//$pdf ->Cell(150,10,iconv('UTF-8', 'cp874', 'วันที่'),0,1,'R');
$pdf ->Cell(180,10,iconv('utf-8','cp874','วันที่ '.$row['qdate']),0,1,'R');
$pdf->SetFont('THSarabunNew','B',20);


$pdf->Cell(180, 10, iconv('UTF-8', 'cp874', 'รายการ'),0,1,'C');

$pdf->SetFont('THSarabunNew','B',16);
$pdf ->Cell(45,10,iconv('UTF-8', 'cp874', 'ใบเสนอราคาเลขที่'),1,0,'C');
$pdf ->Cell(50,10,iconv('UTF-8', 'cp874', 'ชื่อลูกค้า'),1,0,'C');
$pdf ->Cell(65,10,iconv('UTF-8', 'cp874', 'รายการขอรับบริการ'),1,0,'C');
$pdf ->Cell(30,10,iconv('UTF-8', 'cp874', 'ติดต่อ'),1,1,'C');


$pdf->SetFont('THSarabunNew','',16);
$pdf ->Cell(45,10,iconv('utf-8','cp874',$row['qpre'].$row['qid']),1,0,'C');
$pdf ->Cell(50,10,iconv('utf-8','cp874',$row['cuname']),1,0,'C');
$pdf ->Cell(65,10,iconv('utf-8','cp874',$row['jobsname']),1,0,'C');
$pdf ->Cell(30,10,iconv('utf-8','cp874',$row['qcontact']),1,1,'C');

$pdf->SetFont('THSarabunNew','',16);
$pdf ->Cell(190,10,iconv('utf-8','cp874','อาการเบื้องต้น : '.$row['comment']),1,1,'');
$pdf ->Cell(190,10,iconv('utf-8','cp874','ที่อยู่ : '.$row['cuaddress1'].$null.$row['cuaddress2']
.$null.$row['cuaddress3']),1,1,'');
$pdf ->Cell(190,10,iconv('utf-8','cp874','เลขประจำตัวผู้เสียภาษี : '.$row['cutaxid']),1,1,'');
$pdf ->Cell(190,10,iconv('utf-8','cp874','เบอร์โทร : '.$row['qphone']),1,1,'');
$pdf ->Cell(190,10,iconv('utf-8','cp874','อีเมล์ : '.$row['qemail']),1,1,'');
$pdf ->Cell(190,10,iconv('utf-8','cp874','ชื่อผู้ติดต่อสำรอง : '.$row['qcontact']),1,1,'');

$pdf->SetFont('THSarabunNew','',16);
$pdf->Cell(40, 10, iconv('UTF-8', 'cp874', ''),0,1);
$pdf->Cell(40, 10, iconv('UTF-8', 'cp874', ''),0,1);
$pdf->Cell(40, 10, iconv('UTF-8', 'cp874', ''),0,1);
$pdf->Cell(130, 10, iconv('UTF-8', 'cp874', ''),0,0);
$pdf->Cell(40, 10, iconv('UTF-8', 'cp874', '______________________'),0,1);
$pdf->Cell(130, 10, iconv('UTF-8', 'cp874', ''),0,0);
$pdf->Cell(60, 10, iconv('UTF-8', 'cp874', '(..............................................)'),0,1);
$pdf->Cell(135, 10, iconv('UTF-8', 'cp874', ''),0,0);
$pdf->Cell(40, 10, iconv('UTF-8', 'cp874', 'ผู้อนุมัติ'),0,1,'C');
$pdf->Cell(120, 10, iconv('UTF-8', 'cp874', ''),0,0);
$pdf->Cell(5, 10, iconv('UTF-8', 'cp874', 'วันที่.__________________________'),0,1,'');







//$id = $_GET['id'];
//$sql = "SELECT  quatation.qid,quatation.qpre,quatation.cupre,quatation.cuid,quatation.jobsid,customer.cuname,customer.cuaddress1,customer.cuaddress2,
//customer.cuaddress3,customer.cuphone, customer.cutaxid ,quatation.qcontact,quatation.qphone,quatation.qemail,jobs.jobspre,jobs.jobsid,jobs.jobsname,quatation.qdate
//from quatation, customer,jobs
//where quatation.cuid = customer.cuid AND quatation.jobsid = jobs.jobsid AND qid = '$id'";//

//$result = mysqli_query($connect, $sql);
//$row = mysqli_fetch_assoc($result);//

//$null = ", ";
//echo "ใบเสนอราคาเลขที่ = ".$row["qpre"].$row['qid']."<br>" ;
//echo "รหัสลูกค้าเลขที่ = ".$row["cupre"].$row['cuid']."<br>" ;
//echo "ชื่อลูกค้า = ".$row["cuname"]."<br>" ;
//echo "ที่อยู่ลูกค้า = ".$row["cuaddress1"].$null.$row["cuaddress2"]."<br>" ;
//echo "ที่อยู่ลูกค้า = ".$row["cuaddress3"].$null.$row["cuphone"]."<br>" ;
//echo "เลขประจำตัวผู้เสียภาษี = ".$row["cutaxid"]."<br>" ;
//echo "ข้อมูลผู้ติดต่อ = ".$row["qcontact"]."<br>" ;
//echo "เบอร์ผู้ติดต่อ = ".$row["qphone"]."<br>" ;
//echo "เมล์ = ".$row["qemail"]."<br>" ;
//echo "รหัสงาน = ".$row['jobspre'].$row['jobsid']."<br>" ;
//echo "ชื่องาน = ".$row['jobsname']."<br>" ;
//echo "วันที่ = ".$row['qdate']."<br>" ;

$data = ($row['qpre'].$row['qid']);
$pdf -> Output("$data.pdf","I");
//$pdf->Output("D:/doc.pdf","F");


?>

