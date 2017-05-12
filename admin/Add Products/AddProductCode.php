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

	$productname = $_POST['productname'];
	$price = $_POST['price'];
	$availableNumber = $_POST['availableNumber'];
	$description = $_POST['description'];

for($i=1 ; $i <= 8  ; $i++)
{
	if(isset($_POST[''.$i.'']))
{
	$command = "INSERT INTO `product`(`Name`, `Price`, `Number`, `Description`, `SubCategory_Id`,`Supplier_Id`)
	VALUES('".$productname."',".$price.",".$availableNumber.",'".$description."','".$i."','".$mid."');";

	if(mysqli_query($link,$command))
	{

	$filename = $_FILES["image"]['name'];
	$type = $_FILES["image"]['type'];
	$temp = $_FILES["image"]['tmp_name'];

	if(strpos($type, "image") === 0)
	//بدور ع الكلمة جوا سترينج معين
	//0 ==> first word in string
	{
		if($type === "image/jpeg")
	{
		$idCommand="SELECT `Id` FROM `product` WHERE `Name` = '$productname';";
		$sql =mysqli_query($link,$idCommand);
		$idpic='';

  while($row = mysqli_fetch_array($sql))
    {
   $idpic= $row["Id"];
	}

		$path = "./$productname"."$idpic.jpg"; //current folder
		move_uploaded_file($temp, $path);
		$imgCommand = "INSERT INTO `product_image` VALUES ('".$idpic."','".$path."');	";
		mysqli_query($link,$imgCommand);

        header('Location: ../SellerProfile.php');

    }

	else
	{
	 echo "Please choose a .jpg image";
	}
}
}
	else
	die(mysqli_error($link));
}
}
}
mysqli_close($link);
?>
