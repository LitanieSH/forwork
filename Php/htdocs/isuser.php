<?php session_start(); 
  include('./sql/dbconn.php');
  $id = $_SESSION['id'];
  $uname = $_SESSION['uname'];
  $level = $_SESSION['level'];
 	if($level!='user'){
      Header("Location:./logout.php");  
    }elseif($level==''){
        Header("Location:./logout.php"); 
    }
  if($level == 'admin'){
    Header("Location:./admin/fullpage.php");  
  }
    
?>