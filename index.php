<!DOCTYPE HTML>
<?php
session_start();
// if(!($_SESSION['Username']))
// {
// 	header('Location: Admin/login.php');
// }
 ?>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script src="js/jquery.openCarousel.js" type="text/javascript"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
</head>
<body>

	<div class="header" >
	<!-- bedayet elham-->
	<?php
	include"navbar.php";
	?>
  		     <div class="header_bottom" style="background: rgba(0,0,0,0.3)">
			   <div class="slider-text" >
			   	<h2>Made Up Website</h2>
			   	<spam class="Kalam">Handmade Products' Store.
			   	<br>
			   	You can Buy and Sell Safely and Secur


			   	</spam>
			   	<button class="CCSSSS33"><a href="AboutUs.php" style="height: 10px ;padding: 0px" >Read More</a></button>
	  	      </div>
	  	      
	  	     <div class="clear"></div>
	      </div>
   		</div>
   </div>
   <!------------End Header ------------>
  <div class="main">
      <div class="content">
    	        <div class="content_top">
    	        	<div class="wrap">
		          	   <h3>Latest Products</h3>
		          	</div>
		          	<div class="line"> </div>
		          	<div class="wrap">
		          	 <div class="ocarousel_slider">
	      				<div class="ocarousel example_photos" data-ocarousel-perscroll="3">
			                <div class="ocarousel_window">
			                   
                               <?php include'LatestProducts.php'; ?>
                               
                              
                            </div>
			               <span>
			                <a href="#" data-ocarousel-link="left" style="float: left;" class="prev"> </a>
			                <a href="#" data-ocarousel-link="right" style="float: right;" class="next"> </a>
			               </span>
					   </div>
				     </div>
				   </div>
    	       </div>
    	  <div class="content_bottom">
    	    <div class="wrap">

    	    	<div class="content-bottom-right">
    	    	<h3>Browse All Categories</h3>


<?php
include 'ShowProduct.php';
 ?>


		      </div>
		      <div class="clear"></div>
		   </div>
         </div>
      </div>
    </div>
   <div class="footer">
   	  <div class="wrap">
		   <div class="footer-nav">
		   	<ul>
		   		<li><a href="contact.php">Contact Us</a> : </li>
		   		<li><a href="AboutUs.php">About Us</a></li>
		   	</ul>
		   </div>
        </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
    <a href="#" id="toTop"> </a>
    <script type="text/javascript" src="js/navigation.js"></script>
  
</body>
</html>
