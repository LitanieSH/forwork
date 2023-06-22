<?php   
session_start(); //เริ่ม session
//session_destroy(); //ทำลาย session
if(session_destroy()){
    echo "<script>";
	echo "alert('กรุณาลงชื่อเข้าใช้งาน');";
	echo "window.location ='http://mopaccitsolution.gotdns.com:3000/'; ";
	echo "</script>";
}
//header("location:/qua/login.php"); // กลับไปindex
//exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    
</body>
</html>