<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database="madeup";

// Create connection


$user =$_SESSION['Username'];
// $user=$_SESSION['Username'];


$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query= "SELECT  `SellerName`, `ProductName`, `Number`, `Date`  FROM `notification` WHERE `SellerName`='".$user."' AND `Special`='1' ";
$sql =mysqli_query($conn,$query); 

 echo "<table border='1'>
  <tr>
    <td >SellerName </td>
    <td >ProductName</td>
    <td >Number</td>
    <td >Date</td>
  </tr>";

  while($row = mysqli_fetch_array($sql))
    {
    echo "<tr>";
    echo "<td>".$row['SellerName']."</td>";
    echo "<td>".$row['ProductName']."</td>";
    echo "<td>".$row['Number']."</td>";
    echo "<td>".$row['Date']."</td>";
    echo "</tr>";
  }
    echo "</table>";

$row++;
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <style>
     table{
       margin-top: 200px;
       position: relative;
       left: 260px;
       height: auto;
       width: 850px;
       text-align: center;
     }
     </style>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

   </body>
 </html>
