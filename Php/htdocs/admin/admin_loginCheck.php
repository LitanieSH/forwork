<?php 
session_start();
        if(isset($_POST['uname'])){
                  include("./dbconn.php");
                  $uname = $_POST['uname'];
                  $pass = $_POST['pass'];

                  $sql="SELECT * FROM users
                  WHERE  uname ='".$uname."' 
                  AND  pass ='".$pass."' ";
                  $result = mysqli_query($connect,$sql);
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
                      $_SESSION["id"] = $row["id"];
                      $_SESSION["uname"] = $row["uname"];
                      
                      $_SESSION["level"] = $row["level"];
                      if($_SESSION["level"]=="admin"){ 
                        Header("Location: customer_Jobs.php");
                      }
                      elseif($_SESSION["level"]=="user"){ 
                        Header("Location: customer_Jobs.php");
                      }  
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
                  }
                  if($_SESSION["level"] == null){
                    echo "<script>";
                        echo "alert(\"กรุณารอการยืนยันสถานะการใช้งาน\");"; 
                       // echo "window.history.back()";
                        echo "window.location.href = 'index.php';";    
                    echo "</script>";
                  }
        }else{
             Header("Location: index.php"); //user & password incorrect back to login again
        }
