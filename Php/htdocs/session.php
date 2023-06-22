<?php 
session_start();
  if($_SESSION == null){
  header('Location: index.php');
  
}
?>