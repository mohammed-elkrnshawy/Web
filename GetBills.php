<html>
<head>
<style type="text/css">
div.inline { float:left; }
</style>
<style>
/*div{
  padding-left: 50px;

}*/
b{
  font-size: 25px;
  color: #999;
}
button{
  margin-left: 100px;
  padding-left: 100px;
}
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
$index=1;
  $link = mysqli_connect($servername, $username, $password,$database);
  $sql ="SELECT `customer`.`Name` , `bills_total`.`Total`, `bills_total`.`Date` FROM `customer` , `customer_bill` , `bills_total` 
  WHERE `customer_bill`.`Bill_Id`=`bills_total`.`Id` AND `customer_bill`.`Customer_Id`=`customer`.`Id` ";


  $result = mysqli_query($link,$sql);
  while ($row = mysqli_fetch_array($result))
  {

    if($index%3==0)
    {
      echo "<br>";echo "<br>";
      echo "<br>";echo "<br>";
      echo "<br>";echo "<br>";
      echo "<br>";echo "<br>";
      echo "<br>";echo "<br>";
      echo "<br>";echo "<br>";
      echo "<div class=inline style='padding:0 50px 0 50px'>";
      echo "<b>Customer Name</b><br>";
      echo "$row[0]<br>";
      echo "<b>Bill Total</b><br>";
      echo "$row[1]<br>";
      echo "<b>Date</b><br>";
      echo "$row[2]";
      
      echo "</div>";
    }
    else {
      echo "<div class=inline style='padding:0 50px 0 50px'>";
      echo "<b>Customer Name</b><br>";
      echo "$row[0]<br>";
      echo "<b>Bill Total</b><br>";
      echo "$row[1]<br>";
      echo "<b>Date</b><br>";
      echo "$row[2]";
      
echo "<br />";
echo "<br />";
echo "<br />";
      echo "</div>";
    }
    $index++;
  }
?>
</body>
</html>
