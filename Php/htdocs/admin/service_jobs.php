<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/button.css">
    <title>Service Jobs</title>
</head>
<body>
   <div class="container"><br>
    <h2>Service Jobs.</h2>
    <div align="right">
    วันที่ : <font id="date_now"></font>
	</div>
        <script>
             var date = new Date().toISOString().slice(0, 10);document.getElementById("date_now").innerHTML = date;
        </script>
        <p></p>
        <div class="container">
            <div class="nav body">
                <?php
                 include("body_jobs.php");
               ?>
            </div>
            <a href="index.php"><button class="btn btn-secondary">Back</button></a>
            <a href="login.php"><button class="btn btn-warning">Sign in</button></a>
            <a href="register.php"><button class="btn btn-danger">Sign up</button></a>
       </div> 
   </div>
</body>
</html>