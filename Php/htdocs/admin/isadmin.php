<?php session_start(); 
  include('./dbconn.php');
  $id = $_SESSION['id'];
  $uname = $_SESSION['uname'];
  $level = $_SESSION['level'];
  if($level!='admin'){
      Header("Location:./logout.php");  
    }elseif($level==''){
        Header("Location:./logout.php"); 
    }

    
?>

