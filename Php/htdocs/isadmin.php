<?php session_start(); 
  include('./sql/dbconn.php');
  $mid = $_SESSION['mid'];
  $memail = $_SESSION['memail'];
  $mlevel = $_SESSION['mlevel'];
  if($mlevel!='admin'){
      Header("Location:./logout.php");  
    }elseif($mlevel==''){
        Header("Location:./logout.php"); 
    }

    
?>

