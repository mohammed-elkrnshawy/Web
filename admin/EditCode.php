<?php
session_start();
$id= $_SESSION["ProductId"];
$server="localhost";
$username="root";
$password=""; //Default
$db = "madeup";

$link = mysqli_connect($server, $username, $password, $db);

if($link === false)
	die(mysqli_connect_error());

else{

	$productname = $_POST['newname'];
	$price = $_POST['newprice'];
	$number = $_POST['newQ'];
	$description = $_POST['newdesc'];

$command = "UPDATE `product` SET `Name` = '".$productname."', `Price` = '".$price."', `Number` = '".$number."', `Description` = '".$description."' where `Id` = '".$id."'; ";

if(mysqli_query($link,$command))
{
    header('Location: SellerProfile.php ');

}
		
		else
		echo "Error Updating";
}

?>