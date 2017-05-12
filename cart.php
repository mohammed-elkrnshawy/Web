<?php
session_start();
$S=0;
$Num=$_GET['cart'];
require 'item.php';
if(isset($_GET['cart']))
{
  $item=new Item();

  $item->name = str_replace("'", "", $_SESSION["PName"]);
  $item->price = str_replace("'", "", $_SESSION["PPrice"]);
  $item->quantity = str_replace("'", "", $Num);
  $item->total = str_replace("'", "", $_SESSION["PPrice"])*str_replace("'", "", $Num);

  $_SESSION['cart'][]=$item;

if(isset($_GET['action']))
{
  $cart=unserialize(serialize($_SESSION['cart']));
  unset($cart[count($cart)-1]);
  unset($cart[$_GET['cart']]);
  $cart=array_values($cart);
  $_SESSION['cart']=$cart;
}

}
 ?>

<body style="background-image:url(123456.jpg) ;background-repeat: no-repeat; ">
    <center>
     <div class="myprofile" style="width:500px; height:auto;background:rgba(255,255,255,0.7);
	padding:20px 20px 20px 20px;">

 <table cellpadding="2" cellspacing="2" border="1">
   <tr>
     <th>Id </th>
     <th>Product Name </th>
     <th>Product Price </th>
     <th>Product Quantity </th>
     <th>Product Total </th>
     <th>Delete </th>
   </tr>
   <?php
   $cart=unserialize(serialize($_SESSION['cart']));
   for ($i=0; $i <count($cart) ; $i++) {
     $S+=$cart[$i]->total;
     ?>
     <tr>
       <td><?php echo $i+1; ?></td>
       <td><?php echo $cart[$i]->name; ?></td>
       <td><?php echo $cart[$i]->price; ?></td>
       <td><?php echo $cart[$i]->quantity; ?></td>
       <td><?php echo $cart[$i]->total; ?></td>
       <td><a href="cart.php?cart=<?php echo $i ?>&action=Delete" onclick="return confirm ('Are You Sure ...!!')">Delete</td></td>
    </tr>
  <?php  }?>
  <tr>
    <td colspan="4" align="center">Sum Bill</td>
    <td colspan="2" align="center"><?php echo $S; ?></td>
  </tr>

</table>

<br>
<a href="index.php">Continue Shopping</a>

<a href="ConfirmBuy.php?sum=<?php echo $S ?>">Confirm</a>
    </div>
        </center>
</body>