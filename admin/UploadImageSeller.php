<?php
session_start();

$server="localhost";
$username="root";
$password=""; //Default
$db = "madeup";

$mid =$_SESSION["UserId"];

$link = mysqli_connect($server, $username, $password, $db);
if($link === false)
//== : ممكن تاخد حاجتين من نوعين مختلفين تقارن بينهم
//=== : نفس النوع ونفس القيمة
{
	die(mysqli_connect_error());
}

else{
	
	$filename = $_FILES["image"]['name'];
	$type = $_FILES["image"]['type'];
	$temp = $_FILES["image"]['tmp_name'];

	if(strpos($type, "image") === 0)
	//بدور ع الكلمة جوا سترينج معين
	//0 ==> first word in string
	{
		if($type === "image/jpeg")
	{
		$path = "./$mid$filename"; //current folder
		move_uploaded_file($temp, $path);
		
		$imgCommand = "Update `supplier` set `image_path` = '".$path."' where `Id` = '".$mid."';";
		mysqli_query($link,$imgCommand);

        header('Location: SellerProfile.php');


    }

	else
	 echo "Please choose a .jpg image";
}
}

?>