<?php
session_start();
$billid=0;
$servername = "localhost";
$username = "root";
$password = "";
$database="madeup";
$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query1= "SELECT COUNT(*) FROM `bills_total`;";
$result1=mysqli_query($conn, $query1);
while($row = mysqli_fetch_array($result1))
{
    $billid=$row[0];
}
$billid=$billid+1;
require 'item.php';
$cart=unserialize(serialize($_SESSION['cart']));
$cart=array_values($cart);
$_SESSION['cart']=$cart;
$ACount=count($cart);
for ($i=0; $i < count($cart) ; $i++)
 {
  $cart=unserialize(serialize($_SESSION['cart']));
  $cart=array_values($cart);
  $_SESSION['cart']=$cart;
  $query= "INSERT INTO `bills_details`(`Id`, `Product_Name`, `Product_Price`, `Product_Quantity`, `Total_Price`, `Date`)
   VALUES ('".$billid."','".$cart[$i]->name."','".$cart[$i]->price."','".$cart[$i]->quantity."','".$cart[$i]->total."',CURDATE())";
   $result1=mysqli_query($conn, $query);
 }
for ($i=0; $i <=$ACount ; $i++)
{
  $cart=unserialize(serialize($_SESSION['cart']));
  unset($cart[0]);
  $cart=array_values($cart);
  $_SESSION['cart']=$cart;
}

$query= "INSERT INTO `bills_total`(`Id`, `Total`, `Date`) VALUES ('".$billid."','".$_GET['sum']."',CURDATE())";
 $result1=mysqli_query($conn, $query);

 $queryI= "INSERT INTO `customer_bill`(`Customer_Id`, `Bill_Id`, `Customer_type`)
 VALUES ('".$_SESSION["UserId"]."','".$billid."','".$_SESSION["type"]."')";
  $resultI=mysqli_query($conn, $queryI);

header('Location: index.php');

 ?>
