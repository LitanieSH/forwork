<?php session_start(); 
  include('./dbconn.php');
  $mid = $_SESSION['mid'];
  $memail = $_SESSION['memail'];
  $mlevel = $_SESSION['mlevel'];
 	if($mlevel!='user'){
      Header("Location:./logout.php");  
    }elseif($mlevel==''){
        Header("Location:./logout.php"); 
    }

    
?>