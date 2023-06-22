
<?php
//Connect SQL
 include("./dbconn.php");
 require_once './dbconn.php';
 $query = "SELECT MAX(idcus) FROM customer";
 $result = mysqli_query($connect,$query);
 $row = mysqli_fetch_row($result);
 echo "ข้อมูลล่าสุด : ".$row[0];
 
?>