<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="layout/css/bootstrap.min.css" />
	<link rel="stylesheet" href="layout/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="layout/css/backend.css"/>
<link rel="stylesheet" href="../css/style.css">
	<title>Edit Product</title>

</head>

<?php
session_start();
$_SESSION["ProductId"] = $_GET['item'];

?>

<body style="margin: auto;text-align: center; background:url(IMG_2647.jpg); background-size: 1500px auto; background-repeat:no-repeat">

<div>

<div class="Editinfo" style="background:rgba(0,0,0,0.4)">
<p class="ededp" style="color: #fff;">Edit Product</p>

       <center>
       <canvas id="line" width="200" height="50"></canvas>
       </center>
       
<form action="EditCode.php" method="post">

<input class="form-control" name="newname" type="text" id="rrr" name="" placeholder="New Name">
<input type="text" class="form-control" name="newprice" id="rrr" name="" placeholder="New Price">
<input type="text" class="form-control" name="newQ" id="rrr" name="" placeholder="Quanity">
<textarea rows="5" cols="50" type="text" name="newdesc" class="form-control" id="zzz" name="" placeholder="Description"></textarea>
<input class="btn btn-primary btn-block" id="rrr" type="submit" name="submit" value="Save Change"/>
</form>

</div>
</div>
</body>
<script>


var linecanvas = document.getElementById('line');
      var context = linecanvas.getContext('2d');
	  
     context.beginPath();
context.moveTo(0,0);
context.lineTo(200,0);
context.lineWidth = 5;
context.strokeStyle = '#fff';
context.stroke();
</script>
</html>