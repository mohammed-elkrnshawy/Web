<?php
/**
 * Created by PhpStorm.
 * User: Mohammed
 * Date: 04/05/2017
 * Time: 03:28 م
 */
$BillId =$_GET['item'];
$server="localhost";
$username="root";
$password=""; //Default
$db = "madeup";
$link = mysqli_connect($server, $username, $password, $db);
$sqlemail = "SELECT * FROM `bills_details` WHERE `Id`='".$BillId."' ";

$result = mysqli_query($link, $sqlemail);

if (mysqli_num_rows($result) > 0)
{
    ?>

<body style="background-image:url(123456.jpg) ;background-repeat: no-repeat;  ">
    <center>
     <div class="myprofile" style="width:500px; height:auto;background:rgba(255,255,255,0.7);
	padding:20px 20px 20px 20px;">
    <table cellpadding="2" cellspacing="2" border="1">
        <tr>
            <th>Product Name </th>
            <th>Product Price </th>
            <th>Product Quantity </th>
            <th>Product Total </th>
        </tr>
          </div>
        </center>
</body>
         
    <?php
    while($row = mysqli_fetch_array($result))
    {
        ?>
<tr>
       <td><?php echo $row[1]; ?></td>
       <td><?php echo $row[2]; ?></td>
       <td><?php echo $row[3]; ?></td>
       <td><?php echo $row[4]; ?></td>
    </tr>
        
<?php
    }

}
else
{
    echo "no connect";
}



?>