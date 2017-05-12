<?php
session_start();
$server="localhost";
$username="dbezzat";
$password="dbezzat"; //Default
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

	$productname = $_POST['productname'];
	$description = $_POST['description'];
	$date = date("Y-m-d");

for($i=1 ; $i <= 8  ; $i++)
{

	if(isset($_POST[''.$i.'']))
{


	$command = "INSERT INTO `specialorder` (`Title`,`Describtion`,`subcategre_id`,`Date`,`Customer_id`,`State`)
	VALUES('".$productname."','".$description."','".$i."','".$date."','".$mid."','Waitting');";

	if(mysqli_query($link,$command))
	{
		echo "insert successful \t";

	$filename = $_FILES["image"]['name'];
	$type = $_FILES["image"]['type'];
	$temp = $_FILES["image"]['tmp_name'];

	if(strpos($type, "image") === 0)
	//بدور ع الكلمة جوا سترينج معين
	//0 ==> first word in string
	{
		if($type === "image/jpeg")
	{
		$idCommand="SELECT `Id` FROM `specialorder` WHERE `Title` = '".$productname."';";
		$sql =mysqli_query($link,$idCommand);
		$idpic='';

  while($row = mysqli_fetch_array($sql))
    {
   $idpic= $row[0];
	}

		$path = "./$productname"."$idpic.jpg"; //current folder
		move_uploaded_file($temp, $path);
		$imgCommand = "UPDATE `specialorder` SET `iamge_path` = '".$path."' where `Id` = '".$idpic."';";
		if(mysqli_query($link,$imgCommand))
            header('Location: ../UserProfile.php');


        else
		echo "image error";
	}

	else
	 echo "Please choose a .jpg image";
	}
	}
	else {
		echo "errorhere";
	}
}
}
}
?>
