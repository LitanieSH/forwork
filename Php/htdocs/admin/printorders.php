<?Php
require('./fpdf/fpdf.php');
require('./dbconn.php');
require("./isadmin.php");
require("./convert_bath.php");


$pdf = new FPDF();
$pdf -> AddPage('');
$pdf -> AddFont('THSarabunNew','','THSarabunNew.php');
$pdf -> AddFont('THSarabunNew','B','THSarabunNew.php');


$pdf->Image('logo/logo.png',6,3,30);
$pdf->SetFont('THSarabunNew','B',18);
$pdf->Cell(150, 5, iconv('UTF-8', 'cp874', 'บริษัท เอ็ม.โอ.พี.แอคเค้าท์ติ้ง แอนด์ ไอที โซลูชันส์ จำกัด'),0,1,'C');
$pdf->Cell(130, 5, iconv('UTF-8', 'cp874', '44/216 ซอยนิมิตใหม่12 แขวงทรายกองดิน'),0,1,'C');
$pdf->Cell(115, 5, iconv('UTF-8', 'cp874', 'เขตคลองสามวา กรุงเทพฯ 10510'),0,1,'C');
$pdf->Cell(130, 5, iconv('UTF-8', 'cp874', 'เลขประจำตัวผู้เสียภาษี : 1234567890123'),0,1,'C');
$pdf->SetY(40);
$pdf->SetFont('THSarabunNew','B',30);
$pdf->Cell(0,10,iconv('UTF-8','cp874','ใบเสนอราคา'),0,1,'C');
$pdf->SetFont('THSarabunNew','B',13);
$pdf->SetFont('THSarabunNew','B',20);
$id = $_GET["id"];
$sql = "SELECT * FROM orders WHERE id = '$id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

$pdf->SetFont('THSarabunNew','',18);
$pdf->Cell(189,10, iconv('UTF-8', 'cp874', 'วันที่ใบเสนอราคา : ').$row['date'],0,1,'R');
$pdf->Cell(189,10, iconv('UTF-8', 'cp874', 'เลขที่ใบเสนอราคา : ').$row['code'].$row['id'],0,1,'R');

$pdf->SetFont('THSarabunNew','',18);
$pdf->Cell(28,10, iconv('UTF-8', 'cp874', 'นาม : '));
$pdf ->Cell(5,10,iconv('utf-8','cp874',$row['name_th']),0,1,'C');
$pdf->Cell(10,5, iconv('UTF-8', 'cp874', 'ที่อยู่ : '));
$pdf ->Cell(18,5,iconv('utf-8','cp874',$row['address']),0,0,'C');
$pdf->Cell(30,5, iconv('UTF-8', 'cp874', 'อาคาร / หมู่บ้าน : '));
$pdf ->Cell(40,5,iconv('utf-8','cp874',$row['village']),0,0,'C');
$pdf->Cell(30,5, iconv('UTF-8', 'cp874', 'ซอย / ถนน : '));
$pdf ->Cell(35,5,iconv('utf-8','cp874',$row['road']),0,1,'C');

$pdf->Cell(20,10, iconv('UTF-8', 'cp874', 'ตำบล / เขต : '));
$pdf ->Cell(40,10,iconv('utf-8','cp874',$row['refsubdistid']),0,0,'C');
$pdf->Cell(20,10, iconv('UTF-8', 'cp874', 'อำเภอ /เขต : '));
$pdf ->Cell(40,10,iconv('utf-8','cp874',$row['refdistid']),0,1,'C');

$pdf->Cell(15,5, iconv('UTF-8', 'cp874', 'จังหวัด : '));
$pdf ->Cell(40,5,iconv('utf-8','cp874',$row['refprovid']),0,0,'C');
$pdf->Cell(20,5, iconv('UTF-8', 'cp874', 'รหัสไปรษณีย์ : '));
$pdf ->Cell(25,5,iconv('utf-8','cp874',$row['zipcode']),0,0,'C');

$pdf->Cell(25,5, iconv('UTF-8', 'cp874', 'เลขประจำตัวผู้เสียภาษี : '));
$pdf ->Cell(70,5,iconv('utf-8','cp874',$row['taxid']),0,1,'C');

$pdf->Cell(25,10, iconv('UTF-8', 'cp874', 'เบอร์ติดต่อ : '));
$pdf ->Cell(30,10,iconv('utf-8','cp874',$row['phone']),0,0,'C');

$pdf->Cell(25,10, iconv('UTF-8', 'cp874', 'เมลล์ : '));
$pdf ->Cell(45,10,iconv('utf-8','cp874',$row['email']),0,0,'C');
$pdf->Cell(25,10, iconv('UTF-8', 'cp874', 'ติดต่อ : '));
$pdf ->Cell(25,10,iconv('utf-8','cp874',$row['staff']),0,1,'C');


$pdf->SetY(115);
$pdf->SetFont('THSarabunNew','B',19);
$pdf->Cell(155,10, iconv('UTF-8', 'cp874', 'บริการ รายละเอียด / ราคาเริ่มต้น'),1,0,'C');
$pdf->Cell(35,10, iconv('UTF-8', 'cp874', ' ราคา '),1,1,'C');
$pdf->SetFont('THSarabunNew','',18);
$pdf ->Cell(155,10,iconv('utf-8','cp874','  * '.$row['jobsid_1']),1,0,'L');
$pdf ->Cell(35,10,iconv('utf-8','cp874','    ฿ '.$row['price1'].' -.'),1,1,'R');
$pdf ->Cell(155,10,iconv('utf-8','cp874','  * '.$row['jobsid_2']),1,0,'L');
$pdf ->Cell(35,10,iconv('utf-8','cp874','    ฿ '.$row['price2'].' -.'),1,1,'R');
$pdf ->Cell(155,10,iconv('utf-8','cp874','  * '.$row['jobsid_3']),1,0,'L');
$pdf ->Cell(35,10,iconv('utf-8','cp874','    ฿ '.$row['price3'].' -.'),1,1,'R');
$pdf ->Cell(155,10,iconv('utf-8','cp874','  * '.$row['jobsid_4']),1,0,'L');
$pdf ->Cell(35,10,iconv('utf-8','cp874','    ฿ '.$row['price4'].' -.'),1,1,'R');
$pdf ->Cell(155,10,iconv('utf-8','cp874','  * '.$row['jobsid_5']),1,0,'L');
$pdf ->Cell(35,10,iconv('utf-8','cp874','    ฿ '.$row['price5'].' -.'),1,1,'R');
$pdf ->Cell(155,10,iconv('utf-8','cp874','  * '.$row['jobsid_6']),1,0,'L');
$pdf ->Cell(35,10,iconv('utf-8','cp874','    ฿ '.$row['price6'].' -.'),1,1,'R');


$pdf->Cell(155,10, iconv('UTF-8', 'cp874', 'รวมราคา'),0,0,'R');
$pdf ->Cell(35,10,iconv('utf-8','cp874','฿ '.$row['total'].' -.'),1,1,'R');
$pdf->Cell(155,10, iconv('UTF-8', 'cp874', '7%'),0,0,'R');
$pdf ->Cell(35,10,iconv('utf-8','cp874','฿ '.$row['total']*7/100).' -.',1,1,'R');
$pdf->Cell(155,10, iconv('UTF-8', 'cp874', 'ราคาทั้งสิ้น'),0,0,'R');
$pdf ->Cell(35,10,iconv('utf-8','cp874','฿ '.$row['total']*7/100+$row['total'].' -.'),1,1,'R');
$pdf ->Cell(130,10,iconv('utf-8','cp874',Convert($row['total']*7/100+$row['total'])),1,1,'C');


$pdf->SetFont('THSarabunNew','',16);


$pdf->Cell(40, 5, iconv('UTF-8', 'cp874', ''),0,1);
$pdf->Cell(40, 5, iconv('UTF-8', 'cp874', ''),0,1);
$pdf->Cell(130, 5, iconv('UTF-8', 'cp874', ''),0,0);
$pdf->Cell(130, 5, iconv('UTF-8', 'cp874', ''),0,0);
$pdf->Cell(40, 10, iconv('UTF-8', 'cp874', '______________________'),0,1);
$pdf->Cell(130, 5, iconv('UTF-8', 'cp874', ''),0,0);
$pdf->Cell(60, 5, iconv('UTF-8', 'cp874', '(..............................................)'),0,1);
$pdf->Cell(135, 5, iconv('UTF-8', 'cp874', ''),0,0);
$pdf->Cell(40, 8, iconv('UTF-8', 'cp874', 'ผู้อนุมัติ'),0,1,'C');
$pdf->Cell(120, 5, iconv('UTF-8', 'cp874', ''),0,0);
$pdf->Cell(5, 15, iconv('UTF-8', 'cp874', 'วันที่.__________________________'),0,1,'');


// วิธีใช้งาน convert bath
//$num1 = '3500.01'; 
//$num2 = '120000.50'; 
//echo  $num1  . "&nbsp;=&nbsp;" .Convert($num1),"<br>"; 
//echo  $num2  . "&nbsp;=&nbsp;" .Convert($num2),"<br>";
//$thai_bath = Convert($row['total']*7/100+$row['total']);

$data = ($row['code'].$row['id']);
$pdf -> Output("$data.pdf","I");

?>