<html>
<body>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$server="localhost";
$username="root";
$password=""; //Default
$db = "madeup";
$mid =$_SESSION["UserId"];
$link = mysqli_connect($server, $username, $password, $db);

$user = $_SESSION["Username"];


$sqlemail = "SELECT `bills_total`.`Total`,`bills_total`.`Date`,`bills_total`.`Id` FROM `bills_total`,`customer_bill` WHERE `customer_bill`.`Bill_Id`=`bills_total`.`Id` AND `customer_bill`.`Customer_Id`='".$mid."'";



$result = mysqli_query($link, $sqlemail);
$index=1;
if (mysqli_num_rows($result) > 0)
 {
     while($row = mysqli_fetch_array($result))
     {
       if($index%8==0)
       {
         echo "<br>";echo "<br>";
         echo "<br>";echo "<br>";
         echo "<div class=inline>";
         echo "<b>Bill Total</b><br>";
         echo "$row[0]<br>";
         echo "<b>Bill Date</b><br>";
         echo "$row[1]<br>";
           echo '<a style="text-decoration: none;background-color: #29abe2;border-radius: 7px;padding: 10px 50px; display: block;color: #fff;margin-left: 40px;" class="btn btn-primary" href="ShowBillDetails.php?item='.$row[2].'">Details</a>';
           echo "<br><br>";
         echo "</div>";
       }
       else {
         echo "<div class=inline>";
         echo "<b>Bill Total</b><br>";
         echo "$row[0]<br>";
         echo "<b>Bill Date</b><br>";
         echo "$row[1]<br>";
           echo '<a style="text-decoration: none;background-color: #29abe2;border-radius: 7px;padding: 10px 50px; display: block;color: #fff;margin-left: 40px;" class="btn btn-primary" href="ShowBillDetails.php?item='.$row[2].'">Details</a>';
           echo "<br><br>";
         echo "</div>";
       }
       $index++;
     }

 }
else
{
  echo "<div class=inline>";
  echo "<b>No Data</b><br>";
  echo "<br><br>";
  echo "</div>";
}


 ?>
</body>
</html>
