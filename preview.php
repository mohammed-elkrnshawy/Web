<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

 ?>
<HTML>
<head>
<title>Free Ecomm Template Website Template | Preview :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script src="js/jquery.openCarousel.js" type="text/javascript"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
 <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
	  <script src="js/star-rating.js" type="text/javascript"></script>
</head>
<body>
	<div >
  	  		<?php
  	  			include"navbar.php";
  	  		?>
    </div>
       <!------------End Header ------------>
   <div class="main">
   	 <div class="wrap">
   	 	<div class="preview-page">
   	 	       <div class="section group">
				<div class="cont-desc span_1_of_2">
					<ul class="back-links">
						<li><a href="#">Home</a> ::</li>
						<li><a href="#">Product Page</a> ::</li>
						<li>Product Name</li>
					</ul>
						<div class="clear"> </div>
				  <div class="product-details">
					<div class="grid images_3_of_2">
							<ul id="etalage">
							<li>
                            <a href="optionallink.html">
									<?php

$it=$_GET['item'];
$servername = "localhost";
$username = "root";
$password = "";
$database="madeup";
echo "'".$it."'";
$link = mysqli_connect($servername, $username, $password,$database);


$query= "SELECT `product`.`Name`,`product`.`Price`,`product`.`Number`,`product`.`Description`,`product_image`.`Name`
 FROM `product`,`product_image` WHERE `product_image`.`Product_id`=`product`.`Id` AND `product`.`Id`=$it";
$result = mysqli_query($link,$query);

$name = "";
$price=0;
$number=0;
$description="";
$imagepath ="";

  while ($row = mysqli_fetch_array($result))
  {
              $name=$row[0];
          $price=$row[1];
            $number=$row[2];
              $description=$row[3];
			  $imagepath = $row[4];
  }
                                     echo "<img class='etalage_thumb_image' src='admin/Add Products.$imagepath.' />";
									echo "<img class='etalage_source_image' src='admin/Add Products.$imagepath.' title='' />";
								echo "</a>

							</li>

						</ul>
				     </div>";

				   echo "<div class='desc span_3_of_2'>";

					echo "<h2 id=PName > $name </h2>";
				 echo "<p> $description </p>";
					echo "<div class='price'>";
						echo "<p> Price: <span id=PPrice > $price </span></p>";
					echo "</div>
					<div class='available'>
						<ul>

						  <li><span>Units in Stock:</span> $number </li>
					    </ul>
					</div>";
          $_SESSION["PName"] = "'".$name."'";
          $_SESSION["PPrice"] = "'".$price."'";

?>
				<div class="share-desc">
					<form action="cart.php" method="get">
                    <div class="share">
						<p>Number of units :</p>
                        <input type="number" id="PNumb" name="cart" class="text_box" type="text" value="1" min="1"/>
					</div>

                        <input type="submit" style="float: right">
                   <!-- <div class="button"><span id="demo" ><a href="cart.php?PID=<?php /*echo $it;  */?>">Add to Cart</a></span></div>-->

                    </form><br/> <br/>
                    


                    <div class="clear"></div>
				</div>

				 <div class="colors-share">
				 	<div class="color-types">
				 		<h4>Available Colors</h4>
				 		<form class="checkbox-buttons">
							<ul>
								<li><input id="r1" name="r1" type="radio"><label for="r1" class="grey"> </label></li>
								<li><input id="r2" name="r1" type="radio"><label for="r2" class="blue"> </label></li>
								<li><input id="r3" name="r1" type="radio"><label class="white" for="r3"> </label></li>
								<li><input id="r4" name="r1" type="radio"><label class="black" for="r4"> </label></li>
							</ul>
						 </form>
				 	</div>
				 	<div class="social-share">
				 		<h4>Share Product</h4>
				 			  <ul>
									<li><a class="share-face" href="#"> </a></li>
									<li><a class="share-twitter" href="#"> </a></li>
									<li><a class="share-google" href="#"> </a></li>
									<li><a class="share-rss" href="#"> </a></li>
									<div class="clear"> </div>
						    </ul>
				 	</div>
				 	<div class="clear"></div>
				 </div>
			</div>
			<div class="clear"></div>
		  </div>
		<div class="product_desc">
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li>Product Reviews</li>
				</ul>
					<div class="clear"></div>
				<div class="resp-tabs-container">

				<div class="review">
					<h4>Lorem ipsum Review by <a href="#">Finibus Bonorum</a></h4>
					 <ul>
					 	<li>Price : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div>
						</li>
					 	<li>Value : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div></li>
					 	<li>Quality : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div></li>
					 </ul>
					 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				  <div class="your-review">
				  	 <h4>How Do You Rate This Product?</h4>
				  	  <p>Write Your Own Review?</p>
				  	  <form>
					    	<div>
						    	<span><label>Nickname<span class="red">*</span></label></span>
						    	<span><input type="text" value=""></span>
						    </div>
						    <div><span><label>Summary of Your Review<span class="red">*</span></label></span>
						    	<span><input type="text" value=""></span>
						    </div>
						    <div>
						    	<span><label>Review<span class="red">*</span></label></span>
						    	<span><textarea> </textarea></span>
						    </div>
						   <div>
						   		<span><input class="button" type="submit" value="SUBMIT REVIEW"></span>
						  </div>
					    </form>
				  	 </div>
				  	  <script type="text/javascript">
										 /* place inside document ready function */
										 $(".rating").starRating({
										  minus: true // step minus button
										});
									</script>
				</div>
			  </div>
		    </div>
	    </div>
      </div>

 		 		   </div>
 		 		</div>
   	 		</div>

        </div>

     <div class="footer">
   	  <div class="wrap">
			 <div class="copy_right">
				<p>Copy rights (c). All rights Reseverd | Template by  <a href="http://w3layouts.com" target="_blank">W3Layouts</a> </p>
		   </div>
		   <div class="footer-nav">
		   	<ul>
		   		<li><a href="#">Terms of Use</a> : </li>
		   		<li><a href="#">Privacy Policy</a> : </li>
		   		<li><a href="contact.php">Contact Us</a> : </li>
		   		<li><a href="#">Sitemap</a></li>
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
