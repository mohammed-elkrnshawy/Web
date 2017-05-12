<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} ?>﻿
	<!-- bedayet elham-->
<div class="n">
	<a class="toggleMenu" href="#">Menu</a>
	<ul class="nav">
		<!--logo/home-->
		<li>
			<div class="logo">
		<a href="index.php"><img src="images/logo.png" alt=""  class="logoimg"/></a>
			</div>
		</li>
		<!--=============================================================================================================-->
		<!--Accessories-->
		<li  class="test">
			<a href="#">Accessories</a>
			<ul>
				<li>
					<a href="admin/show.php?id=1">Jewelry</a>
				</li>
				<li>
					<a href="admin/show.php?id=2">Medals</a>
				</li>
			</ul>
		</li>
		<!--=============================================================================================================-->
		<!--Crochet-->
		<li>
			<a href="#">Crochet</a>
			<ul>
				<li>
					<a href="admin/show.php?id=3">Clothes</a>
				</li>
				<li>
					<a href="admin/show.php?id=4">Toys</a>
				</li>
				     <li>
					<a href="admin/show.php?id=5">Bags</a>
				</li>
			</ul>
		</li>
		<!--=============================================================================================================-->
		<!--Art work-->
		<li>
			<a href="#">Art work</a>
			<ul>
				<li><a href="admin/show.php?id=6">Paintings</a></li>
				<li><a href="admin/show.php?id=7">Paper art</a></li>
				<li><a href="admin/show.php?id=8">Portrait</a></li>

			</ul>
		</li>
		<!--=============================================================================================================-->
		<!--loggin button-->
        <li class="loginclick" style="float: right; padding-left: 50px" >
			<?php
			if(isset($_SESSION['Username']))
			{
			if($_SESSION['type']==='false')
			{
			echo 
			'<a href="#" style="color: #fff; padding-left:35px">'.$_SESSION['Username'].'</a>
			<ul style="width: 150px;">
			<li>
			<a href="admin/users.php?type='.$_SESSION['type'].'">Profile</a>
			</li>
			<li>
			<a href="admin/SpecialOrder/Order.php?type='.$_SESSION['type'].'">Spitial Order</a>
			</li>
			<li>
				<a href="?page=logout">Log Out</a>
			</li>
			</ul>
			'
			;

			/*echo
			'<ul class="nav" style="background-color: rgba(0,0,0,0);margin-right: 30px; padding-left:20px">
			<li  class="test">
			<a href="#" style="color: #f0f;">'.$_SESSION['Username'].'</a>
			<ul style="width: 130px;">
			<li>
				<a href="admin/users.php?type='.$_SESSION['type'].'">Profile</a>
				<p>'.$_SESSION['Username'].'</p>
			</li>
			<li>
				<a href="?page=logout">Log Out</a>
			</li>
			</ul>
			</li>
			</ul>';*/
		}
	    else {



	    	echo 
			'<a href="#" style="color: #fff; padding-left:35px">'.$_SESSION['Username'].'</a>
			<ul style="width: 150px;">
			<li>
			<a href="admin/users.php?type='.$_SESSION['type'].'">Profile</a>
		</li>
			<li>
			<a href="admin/Add Products/Addproduct.php?type='.$_SESSION['type'].'">Add Product</a>
		</li>
			 <li>
			<a href="admin/Notifications/Notification.php?type='.$_SESSION['type'].'">Notification</a>
		</li>
		<li>
			<a href="?page=logout">Log Out</a>
		</li>
			</ul>
			'
			;
	    	
		/*echo 
		'<ul class="nav" style="background-color: rgba(0,0,0,0);margin-right: 30px;">
		<li  class="test">
		<a href="#" style="color: #fff;">'.$_SESSION['Username'].'</a>
		<ul style="width: 130px;">
		<li>
			<a href="admin/users.php?type='.$_SESSION['type'].'">Profile</a>
		</li>
			<li>
			<a href="admin/Add Products/Addproduct.html?type='.$_SESSION['type'].'">Add Product</a>
		</li>
			 <li>
			<a href="admin/Notifications/Notification.php?type='.$_SESSION['type'].'">Notification</a>
		</li>
		<li>
			<a href="?page=logout">Log Out</a>
		</li>
		</ul>';*/
			}

		}
	else
 {
	echo '<a style="text-decoration: none;background-color: #29abe2;border-radius: 7px;padding: 10px 30px;display: block;color: #fff;margin-right: 50px;" class="btn btn-primary" href="admin/login.php">Login</a>';
}
?>


<?php
	if (@$_GET['page'] == 'logout') {
		include 'admin/logout.php';
	}
?>

</li>
<!--=============================================================================================================-->
<!--search-->
	<li style="padding-left: 250px">
	<a href="#">
	    <div class="search_box">
	        <form>
	            <input type="text" value="" placeholder="Search"><input type="submit" class="icon" value="">
	        </form>
	        <div class="clear"></div>
	    </div>
	</a>
</li>
</ul>

</div>
