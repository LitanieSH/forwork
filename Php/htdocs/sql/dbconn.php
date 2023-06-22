<?php
$server = "localhost";
$usersql = "root";
$passsql = "P@ssw0rd@1";
$dbname = "quotation";

// Create Connecttion
$connect = new mysqli($server,$usersql,$passsql,$dbname);

// Check Connection
if($connect->connect_error){
    die("Connection failed:".$connect->connect_error);
}else{
    //echo "Connected successfully";
}
date_default_timezone_set('Asia/Bangkok');
?>