<?php


$servername = "localhost";
$username = "root";
$password = "";
$database="madeup";

$link = mysqli_connect($servername, $username, $password,$database);

$getLeastquery= "SELECT product.Id, product.Name, product_image.Name FROM product, product_image
WHERE product.Id = product_image.Product_id
ORDER BY product.Id DESC
LIMIT 12";

$result = mysqli_query($link,$getLeastquery);

$index = 1;
while ($row = mysqli_fetch_array($result))
  {
	  
              $id=$row[0];
			  $name=$row[1];
			  $imagepath = $row[2];
			  
			  echo "<a href='preview.php?item=".$row[0]."' title='img.$index'><img src='admin/Add Products.$imagepath' alt='' class='dai'/>
                               <p>$name</p></a>";
	
			  $index ++;
  }

echo "done";
?>