<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} ?>﻿
	<!-- bedayet elham-->
<div class="navegation" style="padding: 0px">
	<a class="toggleMenu" href="#">Menu</a>
	<ul class="nav">
		<!--logo/home-->
		<li >
			<div class="logo" style="padding: 0px">
			<a href="../../index.php"><img src="../../images/logo.png" style="height: auto; width: 150px;  margin-left: 50px;padding-top: 0px; " alt=""  class="logoimg"/></a>
			</div>
		</li>
		<!--=============================================================================================================-->
		<!--SP Order-->
		<li  class="test">
			<a href="Order.php" style=""><i id="aassaass" class="fa fa-asterisk fa-3x" aria-hidden="true" style="color: #fff; padding: 
			10px 32px 0 275px; " ></i> </a>
		</li>
		<!--=============================================================================================================-->
		<!--Notification-->
		<li>
			<a href="../UserNotification.php"><i id="aassaass"  class="fa fa-bell fa-3x" style="color: #fff; padding: 
			10px 32px 0 2px;" aria-hidden="true"></i></a>
		</li>
		<!--=============================================================================================================-->
		<!--Profile-->
		<li>
			<a href="../UserProfile.php"><i id="aassaass"  class="fa fa-user-o fa-3x" style="color: #fff; padding: 
			10px 32px 0 2px;" aria-hidden="true"></i></a>
		</li>
		<!--=============================================================================================================-->
		<!--=============================================================================================================-->
		<!--loggin button-->
		<!--=============================================================================================================-->
		<!-- logout-->
        <li>
            <a href="../../?page=logout"><i id="aassaass" class="fa fa-sign-out fa-3x" style="color: #fff; padding:
			10px 32px 0 2px;" aria-hidden="true"></i></a>
        </li>

        <li class="loginclick" style="float: right; padding-left: 50px" >
			<?php
			if(isset($_SESSION['Username']))
			{
			if($_SESSION['type']==='false')
			{
			echo 
			'<a href="#" style="color: #fff; padding-right:55px" > <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i> <br /> '.$_SESSION['Username'].'</a>
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
</ul>

</div>
