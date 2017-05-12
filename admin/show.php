<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
<style type="text/css">
div.inline { float:left; padding-left: 20px;}
</style>
<style>

b{
  font-size: 20px;
  color: #ff0000;
margin-left: 30%;
}

button{
../css/style.css  padding-left: 100px;
}
img{
    width: 220px;
}

</style>
</head>
<body>

<?php
include 'navbar.php';
$servername = "localhost";
$username = "root";
$password = "";
$database="madeup";
$id=$_GET["id"];
    
$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query= "SELECT `product_image`.`Product_id`,`product`.`Name`,`product`.`Price`,`product_image`.`Name` FROM `product`,`product_image`
 WHERE `product_image`.`Product_id`=`product`.`Id` AND `product`.`SubCategory_Id`='".$id."' ";

$index=1;
$sql =mysqli_query($conn,$query);



  while($row = mysqli_fetch_array($sql))
    {
      $impath=$row['3'];
      $path="Add Products.$impath.";
      if($index%6==0)
      {
      echo "<br>";echo "<br>";
      echo "<div class=inline>";
      echo "<b>$row[1]</b><br>";
      echo '<img src="'.$path.'" width=275px; height=225px><br>';
      echo "<b>$row[2]</b><br>";
      echo '<a style="text-decoration: none;background-color: #29abe2;border-radius: 7px;padding: 10px 50px; padding-left: 85px;display: block;color: #fff;margin-left: 40px;" class="btn btn-primary" href="../preview.php?item='.$row[0].'">Details</a>';
      echo "</div>";
      echo "<br>";
      }
      else {

      echo "<div class=inline>";
      echo "<b>$row[1]</b><br>";
      echo '<img src="'.$path.'" width=275px; height=225px><br>';
      echo "<b>$row[2]</b><br>";
      echo '<a style="text-decoration: none;background-color: #29abe2;border-radius: 7px;padding: 10px 50px;padding-left: 85px;display: block;color: #fff;margin-left: 00px;" class="btn btn-primary" href="../preview.php?item='.$row[0].'">Details</a>';
      echo "</div>";

      }
$index++;

  }

 ?>
</body>
</html>
