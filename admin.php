<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database="madeup";

$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  $query1= "SELECT COUNT(*) FROM `supplier`;";
    $query2="SELECT  COUNT(*) FROM `customer`;";
  $query4="SELECT  COUNT(id) FROM `main_category`;";
     $query5="SELECT  COUNT(id) FROM `message`;";


$result1=mysqli_query($conn, $query1);
$result2=mysqli_query($conn, $query2);
$result4=mysqli_query($conn, $query4);
$result5=mysqli_query($conn, $query5);


while($row = mysqli_fetch_array($result1))
{
    $_SESSION["result1"]=$row[0];
}
while($row = mysqli_fetch_array($result2))
{
    $_SESSION["result2"]=$row[0];
}

while($row = mysqli_fetch_array($result4))
{
    $_SESSION["result4"]=$row[0];
}

while($row = mysqli_fetch_array($result5))
{
    $_SESSION["result5"]=$row[0];
}


?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="admin/layout/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>

<link href="admin/layout/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"/>
<link href="admin/layout/css/backend2.css" rel="stylesheet" type="text/css" media="all"/>


<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script src="js/jquery.openCarousel.js" type="text/javascript"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>

</head>
<body>

<div class="home-stats">
			<div class="container text-center" style="padding-left: 10%">
                <div class="row">
					<h1>Admin Area</h1>
					<div class="col-md-3"  >
						<div class="stat st-members">
							<i class="fa fa-users"></i>
							<div class="info">							
								Total Selers
								<span><a href="#"><?php echo "".$_SESSION["result1"]."" ?></a></span>
							</div>
						</div>
					</div>
				
					<div class="col-md-3">
						<div class="stat st-users">
							<i class="fa fa-users"></i>
							<div class="info">
								Total Members
								<span><a href="#"><?php echo "".$_SESSION["result2"]."" ?></a></span>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="stat st-items">
							<i class="fa fa-tag"></i>
							<div class="info">
								Total Items
								<span><a href="#"><?php echo "".$_SESSION["result4"]."" ?></a></span>
							</div>

						</div>
					</div>
					<div class="col-md-3">
						<div class="stat st-comments">
							<i class="fa fa-comments"></i>
							<div class="info">
								Total Comments
								<span><a href="#"><?php echo "".$_SESSION["result5"].""?></a></span>
							</div>
						</div>							
					</div>
				</div>
			</div>
		</div>

		<div class="latest">
			<div class="container">
				<div class="row">
                <div class="col-md-6">
                <div class="panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-tag"></i> Latest Bills
								<span class="toggle-info pull-right">
								<i class="fa fa-plus fa-lg"></i>
								</span>
							</div>
							<div class="panel-body">
								<?php						
                               include"GetBills.php";
				
									?>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-tag"></i> Latest Messages
								<span class="toggle-info pull-right">
								<i class="fa fa-plus fa-lg"></i>
								</span>
							</div>
							<div class="panel-body">
								<?php
								include"GetMessage.php";
								?>
							</div>
						</div>
					</div>
				</div>

    </div>
    </div>
    </body>
</html>
