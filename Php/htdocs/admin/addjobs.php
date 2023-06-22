<?php 
include("./dbconn.php");
include("./isadmin.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/div.css">
    <link rel="stylesheet" href="css/layout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <meta name="viewport" charset="utf-8" content="width-davice-width, initial-scale=1" />
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <title>Addjobs</title>
</head>
<body><br><br>
    <div class="container">
    <div class="form-control"><br>
    <h4>Addjobs</h4>
    <div class="container">
    <br>
    <div align="right"> วันที่ : <font id="date_now"></font>
    </div>
    <script>
      var date = new Date().toISOString().slice(0, 10);
      document.getElementById("date_now").innerHTML = date;
    </script>
    <hr>
  </div>
    <p><a href="./formQuotation.php"><button class="btn btn-outline-dark">Back</button></a></p>
    <form action="insertJobs.php" method="POST">
    <p class="form-control"> Jobs Name: <input class="form-control" type="text" name="jobsname" id="" required ></p>
    <p class="form-control">Jobs Unit: <input class="form-control" type="text" name="jobsunit" id="" required></p> 
    <p class="form-control"> Jobs Details: <input class="form-control" type="text" name="jobsdetails" id="" required></p> 
    <button type="submit" class="btn btn-outline-danger">Add</button>
    </form>
    <div>
    </div>
</body>
</html>