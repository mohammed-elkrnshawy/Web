<html>
<head>
<style type="text/css">
div.inline { float:left; padding-left: 50px;
}

b{
  font-size: 20px;
  color: #c1272d;
}

</style>
</head>

<body>

<?php
session_start();
$q = intval($_GET['q']);
$user = $_SESSION['Username'];
$con = mysqli_connect('localhost','root','','madeup');
$index=1;
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
if($q=='1')
{
  $sql= "SELECT  `bills_details`.`Product_Name`, `bills_details`.`Product_Quantity`, `bills_details`.`Date`  FROM `bills_details`,`product`
 WHERE `product`.`Name`=`bills_details`.`Product_Name` AND `product`.`Supplier_Id`='".$_SESSION["UserId"]."' ORDER BY `bills_details`.`Id` DESC ";
  $result = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($result))
    {
      if($index%5==0)
      {
    echo "<br>";echo "<br>";
    echo "<div class=inline style='background:rgba(255,255,255,0.7);padding:20px 20px 20px 20px; border-radius : 20px; margin: 10px 10px 10px 10px ;'><center>";
    echo "<b>Product Name</b><br>";
    echo "$row[0]<br>";
    echo "<b>Number</b><br>";
    echo "$row[1]<br>";
    echo "<b>Date</b><br>";
    echo "$row[2]";
    echo "<br><br>";
    echo "</center></div>";
  }
  else {

    echo "<div class=inline style='background:rgba(255,255,255,0.7);padding:20px 20px 20px 20px; border-radius : 20px; margin: 10px 10px 10px 10px ;'><center>";
    echo "<b>Product Name</b><br>";
    echo "$row[0]<br>";
    echo "<b>Number</b><br>";
    echo "$row[1]<br>";
    echo "<b>Date</b><br>";
    echo "$row[2]";
    echo "<br><br>";
    echo "</center></div>";
  }
  }


}
else if($q=='2') {

  $sql= "SELECT  `Title`, `Describtion`, `iamge_path`, `Date`,`Id`  FROM `specialorder` WHERE  `State`='Waitting'";
  $result = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($result))
    {
      if($index%5==0)
      {

    $impath=$row['iamge_path'];
    $path="../SpecialOrder.$impath.";
    echo "<br>";echo "<br>";
    echo "<br>";echo "<br>";
    echo "<div class=inline style='background:rgba(255,255,255,0.7);padding:20px 20px 20px 20px; border-radius : 20px; margin: 10px 10px 10px 10px ;'><center>";
    echo '<img src="'.$path .'" width=275px; height=225px style="border-radius : 20px; border:#c1272d dashed;"><br>';
    echo "<b>Title</b><br>";
    echo "$row[0]<br>";
    echo "<b>Describtion</b><br>";
    echo "$row[1]<br>";
    echo "<b>Date</b><br>";
    echo "$row[3]";
    echo "<br><br>";
    echo '<a style="text-decoration: none;background-color: #29abe2;border-radius: 7px;padding: 10px;display: block;color: #fff" class="btn btn-primary" href="SendAccept.php?item='.$row[4].'">Accept This Offers</a>';
    echo "</center></div>";
  }
  
  else {
    $impath=$row['iamge_path'];
    $path="../SpecialOrder.$impath.";
    echo "<div class=inline style='background:rgba(255,255,255,0.7);padding:20px 20px 20px 20px; border-radius : 20px;	margin: 10px 10px 10px 10px ;'><center>";
    echo '<img src="'.$path .'" width=275px; height=225px style="border-radius : 20px; border:#c1272d dashed;"><br>';
    echo "<b>Title</b><br>";
    echo "$row[0]<br>";
    echo "<b>Describtion</b><br>";
    echo "$row[1]<br>";
    echo "<b>Date</b><br>";
    echo "$row[3]";
    echo "<br><br>";
    echo '<a style="text-decoration: none;background-color: #29abe2;border-radius: 7px;padding: 10px;display: block;color: #fff;" class="btn btn-primary" href="SendAccept.php?item='.$row[4].'">Accept This Offers</a>';
    echo "</center></div>";
  }
  }
}
else if($q=='3') {

    $sql = "SELECT  `Title`, `Describtion`, `iamge_path`, `Date`,`Id`  FROM `specialorder` WHERE  `State`='Accepted' 
AND `Seller_Id`='".$_SESSION['UserId']."'";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        if ($index % 5 == 0) {

            $impath = $row['iamge_path'];
            $path = "../SpecialOrder.$impath.";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<div class=inline style='background:rgba(255,255,255,0.7);padding:20px 20px 20px 20px; border-radius : 20px; margin: 10px 10px 10px 10px ;'><center>";
            echo '<img src="' . $path . '" width=275px; height=225px style="border-radius : 20px; border:#c1272d dashed;"><br>';
            echo "<b>Title</b><br>";
            echo "$row[0]<br>";
            echo "<b>Describtion</b><br>";
            echo "$row[1]<br>";
            echo "<b>Date</b><br>";
            echo "$row[3]";
            echo "<br><br>";
            echo '<a style="text-decoration: none;background-color: #29abe2;border-radius: 7px;padding: 10px 50px;display: block;color: #fff;margin-right: 50px;" class="btn btn-primary" href="SendAcceptOrder.php?item='.$row[4].'">Finished</a>';
            echo "</center></div>";
        } else {
            $impath = $row['iamge_path'];
            $path = "../SpecialOrder.$impath.";
            echo "<div class=inline style='background:rgba(255,255,255,0.7);padding:20px 20px 20px 20px; border-radius : 20px; margin: 10px 10px 10px 10px ;'><center>";
            echo '<img src="' . $path . '" width=275px; height=225px style="border-radius : 20px; border:#c1272d dashed;"><br>';
            echo "<b>Title</b><br>";
            echo "$row[0]<br>";
            echo "<b>Describtion</b><br>";
            echo "$row[1]<br>";
            echo "<b>Date</b><br>";
            echo "$row[3]";
            echo "<br><br>";
            echo '<a style="text-decoration: none;background-color: #29abe2;border-radius: 7px;padding: 10px 50px;display: block;color: #fff;margin-right: 50px;" class="btn btn-primary" href="SendAcceptOrder.php?item='.$row[4].'">Finished</a>';
            echo "</center></div>";
        }
    }
}

?>

</body>
</html>
