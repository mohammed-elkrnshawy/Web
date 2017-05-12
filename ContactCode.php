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
    $email =$_POST['userEmail'];
    $subject =$_POST['usersubject'];
    $message =$_POST['userMsg'];

  //  echo $name. ' '.$phone.' '.$email;
  }

  $query= "INSERT INTO `message`(`Eamil`, `Subject`, `Message`)
  VALUES ('".$email."','".$subject."','".$message."')";


  $sql =mysqli_query($conn,$query);


mysqli_close($conn);

 ?>
