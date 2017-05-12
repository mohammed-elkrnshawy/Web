<?php
session_start();
$it=$_GET['item'];
echo $it;
$con = mysqli_connect('localhost','root','','madeup');

$query= "UPDATE `specialorder` SET `State`= 'Finished'  WHERE `Id`='".$it."' ";
$sql =mysqli_query($con,$query);
header('Location: ../Add Products/Addproduct.php');

?>
