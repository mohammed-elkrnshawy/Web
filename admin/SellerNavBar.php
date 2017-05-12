<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} ?>﻿
	<!-- bedayet elham-->
<div class="navegation" style="">
	<a class="toggleMenu" href="#">Menu</a>
	<ul class="nav">
		<!--logo/home-->
		<li>
			<div class="logo"     style="padding-top: 20px;">
			<a href="../index.php"><img src="../images/logo.png" style="height: auto; width: 150px;  margin-left: 19px;padding-top: 0px; " alt=""  class="logoimg"/></a>
			</div>
		</li>
		<!--=============================================================================================================-->
		<!--Add product-->
		<li  class="test">
			<a href="Add Products/Addproduct.php" style=""><i id="aassaass" class="fa fa-plus-circle fa-3x" aria-hidden="true" style="color: #fff; padding: 
			10px 32px 0 245px; " ></i> </a>
		</li>
		<!--=============================================================================================================-->
		<!--Notification-->
		<li  class="test">
			<a href="Notifications/Notification.php"><i id="aassaass"  class="fa fa-bell fa-3x" style="color: #fff; padding: 
			10px 32px 0 2px;" aria-hidden="true"></i></a>
		</li>
		<!--=============================================================================================================-->
		<!--Profile-->
		<li>
			<a href="SellerProfile.php"><i id="aassaass"  class="fa fa-user-o fa-3x" style="color: #fff; padding: 
			10px 32px 0 2px;" aria-hidden="true"></i></a>
		</li>
		<!--=============================================================================================================-->
		<li>
			<a href="../?page=logout"><i id="aassaass" class="fa fa-sign-out fa-3x" style="color: #fff; padding: 
			10px 32px 0 2px;" aria-hidden="true"></i></a>
		</li>
		<!--=============================================================================================================-->
		<!--loggin button-->
        <li class="loginclick" style="float: right; padding-left: 50px" >
			<?php
			if(isset($_SESSION['Username']))
			{
	    	echo 
			'<a href="#" style="color: #fff; padding-right:100px"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i> <br />'.$_SESSION['Username'].' </a>
			<ul style="width: 150px;">
			<li>
			<a href="admin/users.php?type='.$_SESSION['type'].'">Profile</a>
			</li>
			<li>
				<a href="admin/Notifications/Notification.php?type='.$_SESSION['type'].'">Notification</a>
			</li>
			<li>
				<a href="?page=logout">Log Out</a>
			</li>
			</ul>
			';
			
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
</ul>

</div>
