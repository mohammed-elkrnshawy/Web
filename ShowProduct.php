<html>
<head>
<style type="text/css">
div.inline { float:left; padding-left: 20px; margin-bottom: 20px;}

b{
  font-size: 20px;
  color: #c1272d;
}

img{
    width: 220px;
		

}

</style>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="madeup";




$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query= "SELECT `product_image`.`Product_id`,`product`.`Name`,`product`.`Price`,`product_image`.`Name` FROM `product`,`product_image` WHERE `product_image`.`Product_id`=`product`.`Id` ";



$index=1;
$sql =mysqli_query($conn,$query);



  while($row = mysqli_fetch_array($sql))
    {
      $impath=$row['3'];
      $path="admin/Add Products.$impath.";
      if($index%6==0)
      {
      echo "<br>";echo "<br>";
      echo "<div class=inline><center>";
      echo "<b>$row[1]</b><br><br>";
      echo '<img src="'.$path.'" height=225px style="border-radius : 20px; border:#c1272d dashed;"><br><br>';
      echo "Price : <b>$row[2]</b><br><br>";
      echo '<a style="text-decoration: none;background-color: #29abe2;border-radius: 7px;padding: 10px;display: block;color: #fff;margin-left: 00px;" class="btn btn-primary" href="preview.php?item='.$row[0].'">Details</a>';
      echo "</center></div>";
      echo "<br>";
      }
      else {

      echo "<div class=inline><center>";
      echo "<b>$row[1]</b><br><br>";
      echo '<img src="'.$path.'" height=225px style="border-radius : 20px; border:#c1272d dashed;"><br><br>';
      echo "Price : <b>$row[2]</b><br><br>";
      echo '<a style="text-decoration: none;background-color: #29abe2;border-radius: 7px; padding: 10px; display: block;color: #fff;margin-left: 00px;" class="btn btn-primary" href="preview.php?item='.$row[0].'">Details</a>';
      echo "</center></div>";

      }
$index++;

  }

 ?>
</body>
</html>
