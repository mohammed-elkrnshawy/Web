
<?php
$noNavbar='';





?>
<!DOCTYPE html>
<html>
  <head>
    <style>
    #FormSignUp{
      display: none;
    }
    </style>

    <script type="text/javascript">
    </script>
    <script>

    function Signup_click()
     {
       var x = document.getElementById('FormSignUp');
       var x2=document.getElementById('FormLogin');

           x2.style.display='none';
           x.style.display = 'block';

        var x3=document.getElementById('span5');
        var x4=document.getElementById('span6');
        x4.style.color='#29abe2';
        x3.style.color='#000';
  }
  function Signin_click()
  {
    var x = document.getElementById('FormSignUp');
    var x2=document.getElementById('FormLogin');

        x.style.display='none';
        x2.style.display = 'block';

        var x3=document.getElementById('span5');
        var x4=document.getElementById('span6');
        x4.style.color='#000';
        x3.style.color='#29abe2';
  }
    </script>

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p class="LoginSignup"><span onclick="Signin_click()" style=" cursor: pointer" id="span5"  class="Loginword">Login</span ><?php echo " | ";?><span onclick="Signup_click()" style=" cursor: pointer" id="span6" class="Signupword">Signup</span></p>
<div id="FormLogin">

    <form class="user_login" action="index.php"; method="POST">
            <input class="form-control" type="text" name="user" placeholder="Enter Your Username" autocomplete="off"/>
            <input class="form-control" type="password" name="pass" placeholder="Enter Your Password" autocomplete="new-password" />

            &emsp; &emsp;
            <input type="checkbox" name="userLogin" value="userLogin"/> User &emsp; &emsp; &emsp;
            <input type="checkbox" name="SellerLogin" value="SellerLogin"/> Handmaker (Seller)

            <br/> <br/>
            <p class="Remmember" style="margin-left: 157px;"><input type="Checkbox" name="rememberme"><span><?php echo " Remmember Me"; ?> </span> </span></p><br>
            <input class="btn btn-primary btn-block" type="submit" name="submit" value="Login"/>


    </form>
</div>

<div id="FormSignUp">


    <form class="user_signup" action="SignUpCode.php" method="POST" >
            <input class="form-control" type="text" name="user" placeholder="Enter Your Name" autocomplete="off"/>
            <input class="form-control" type="text" name="email" placeholder="Enter Your Email" autocomplete="off" />
            <input class="form-control" type="password" name="pass" placeholder="Enter Your Password" autocomplete="new-password" />
            <input class="form-control" type="text" name="address" placeholder="Enter Your Address" autocomplete="off" />
            <input class="form-control" type="text" name="phone" placeholder="Enter Your Phone" autocomplete="off" />
            <br />

            &emsp; &emsp;
            <input id="CheckCustomer" type="radio" name="customer" > Customer &emsp; &emsp; &emsp;
            <input id="CheckSeller" type="radio" name="Seller" > Seller
            <br/>
            <input class="btn btn-primary btn-block" type="submit" name="submit" value="Sign Up"/>

        </form>
</div>
  </body>
</html>








<?php

  include 'init.php';
?>
