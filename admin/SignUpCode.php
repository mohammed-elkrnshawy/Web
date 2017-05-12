<?php
session_start();
$servername = "localhost";
$username = "dbezzat";
$password = "dbezzat";
$database="madeup";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))
  {
    $name =$_POST['user'];
    $email =$_POST['email'];
    $pass =$_POST['pass'];
    $address =$_POST['address'];
    $phone =$_POST['phone'];
    if (!empty($_POST['Seller']))
     {
       $seller='true';
     }
     else {
       $seller='false';
     }
  //  echo $name. ' '.$phone.' '.$email;
  }

if($seller==='true')
{
  $query= "INSERT INTO `supplier`(`Name`, `Password`, `Email`, `Adrees`, `Phone`)
                  VALUES ('" . $name . "','" . $pass . "','" . $email . "','" . $address . "','" . $phone . "')";
}
else {
  $query= "INSERT INTO `customer`(`Name`, `Password`, `Email`, `Adrees`, `Phone`)
                  VALUES ('" . $name . "','" . $pass . "','" . $email . "','" . $address . "','" . $phone . "')";
}

  $sql =mysqli_query($conn,$query);

if($Seller==='true')
{
  $_SESSION["Username"] = $name;
  $_SESSION["type"] = $seller;
  header('Location: login.php');
}
else {
  $_SESSION["Username"] = $name;
  $_SESSION["type"] = $seller;
  header('Location: login.php');
}

mysqli_close($conn);

 ?>
