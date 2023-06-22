<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headder</title>
</head>
<body>
    <br>
    <h4>Web Application : Quatation & Computer service</h4>
    <div align="right">
    วันที่ : <font id="date_now"></font>
	</div>
        <script>
             var date = new Date().toISOString().slice(0, 10);document.getElementById("date_now").innerHTML = date;
        </script>
    <br>
</body>
</html>