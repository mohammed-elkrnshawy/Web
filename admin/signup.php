
<?php
session_start();
$noNavbar='';

include 'init.php';


	//Check If User comming From HTTP Post Request


?>


<form class="user_Login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
		<p class="LoginSignup"><span class="Loginword">Login</span ><?php echo " | ";?><span class="Signupword">Signup</span></p>
        <input class="form-control" type="text" name="user" placeholder="Enter Your Name" autocomplete="off"/>
        <input class="form-control" type="text" name="email" placeholder="Enter Your Email" autocomplete="off" />
        <input class="form-control" type="password" name="pass" placeholder="Enter Your Password" autocomplete="new-password" />
        <input class="form-control" type="text" name="address" placeholder="Enter Your Address" autocomplete="off" />
        <input class="form-control" type="text" name="phone" placeholder="Enter Your Phone" autocomplete="off" />

        &emsp; &emsp;
            <input type="radio" name="userLogin"/> User &emsp; &emsp; &emsp;
            <input type="radio" name="sellerLogin"/> Handmaker (Seller)

        <input class="btn btn-primary btn-block" type="submit" value="Sign Up"/>
    </form>



<?php
	include $tpl . 'footer.php';
?>
