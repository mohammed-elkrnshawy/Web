<html>
<head>
<style type="text/css">
div.inline { float:left; }
</style>

</head>
<body>



<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$servername = "localhost";
$username = "root";
$password = "";
$database="madeup";
$mid =$_SESSION["UserId"];
$index=1;

  $link = mysqli_connect($servername, $username, $password,$database);
  $sql = "SELECT `product_image`.`Product_id`,`product_image`.`Name`, `product`.`Id`,`product`.`Name` FROM `product_image`,`product` WHERE `product`.`Id`=`product_image`.`Product_id`
  AND `product`.`Supplier_Id`='".$mid."'";

  $result = mysqli_query($link,$sql);
  while ($row = mysqli_fetch_array($result))
  {
    $impath=$row[1];
	$imname=$row[2];
	
    $path="Add Products.$impath.";
    
	if($index%5==0)
    {
      echo "<br>";echo "<br>";
      echo "<br>";echo "<br>";
      echo '<div class="inline">';
      echo '<a href="Edit.php?item='.$row[0].'"><img id='.$impath.' src="'.$path .'" width=250px; height=200px><br>
      <b >'.$row[3].'</b>';
      echo '</div>';
    }
	
    else {
      echo '<div class="inline"">';
      echo '<a href="Edit.php?item='.$row[0].'"><img id='.$impath.' src="'.$path .'" width=250px; height=200px><br>
      <b >'.$row[3].'</b>';
	  
      echo '</div>';
    }
    $index++;
  }
  
?>
<br><br><br>
</body>