
<?php
//Connect SQL
 include("./sql/dbconn.php");
 require_once './sql/dbconn.php';
 $query = "SELECT MAX(idcus) FROM customer";
 $result = mysqli_query($connect,$query);
 $row = mysqli_fetch_row($result);
 echo "ข้อมูลล่าสุด : ".$row[0];
?>