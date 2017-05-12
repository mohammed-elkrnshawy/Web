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


$sqlemail = "SELECT `Id`, `Title` , `Describtion`, `Date`, `State` , `iamge_path` FROM `specialorder` WHERE `Customer_id`='".$mid."'";



$result = mysqli_query($link, $sqlemail);
$index=1;
if (mysqli_num_rows($result) > 0)
 {
     while($row = mysqli_fetch_array($result))
     {
       if($index%5==0)
       {
         echo "<br>";echo "<br>";
         echo "<br>";echo "<br>";
         echo "<div class=inline>";
         echo "<b>Title</b><br>";
         echo "$row[1]<br>";
         echo "<b>Describtion</b><br>";
         echo "$row[2]<br>";
         echo "<b>State</b><br>";
         echo "$row[4]<br>";
         echo "<b>Date</b><br>";
         echo "$row[3]";
         echo "<br><br>";
         echo "</div>";
       }
       else {
         echo "<div class=inline>";
         echo "<b>Title</b><br>";
         echo "$row[1]<br>";
         echo "<b>Describtion</b><br>";
         echo "$row[2]<br>";
         echo "<b>State</b><br>";
         echo "$row[4]<br>";
         echo "<b>Date</b><br>";
         echo "$row[3]";
         echo "<br><br>";
         echo "</div>";
       }
       $index++;
     }

 }
else
{
   echo "no connect";
}


 ?>
 

</body>
</html>
