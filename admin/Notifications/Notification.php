<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="style.css"/>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../layout/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../layout/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="../../css/style.css"/>


<script src="jquery-1.9.0.min.js"></script>

    <style>


    span{position: relative;left: 400px; top: 100px}
    #span1{color: #c1272d;width: 200px;height: auto;display: inline-block; cursor: pointer;text-align: center;font-size: 50px}
    #span2{color: #29abe2;width: 300px;height: auto;display: inline-block;cursor: pointer;text-align: center;font-size: 50px}
    #span3{color: #000; width: 40px;display: inline-block;cursor: none;font-size: 50px}




    </style>

    <script type="text/javascript">
    </script>

    <script>



    function OrderClick()
    {
      var x = document.getElementById('SpecailDiv');
      var x2=document.getElementById('OrderDiv');

          x.style.display='none';
          x2.style.display = 'block';

      //  var x3=document.getElementById('span5');
      //  var x4=document.getElementById('span6');
      //  x4.style.color='#29abe2';
      //  x3.style.color='#000';
    }
    function SpecialClick()
    {
      var x = document.getElementById('SpecailDiv');
      var x2=document.getElementById('OrderDiv');

          x2.style.display='none';
          x.style.display = 'block';



    }


    function showUser(str) {
      if (str=="") {
        document.getElementById("txtHint").innerHTML="";
        return;
      }
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("txtHint").innerHTML=this.responseText;
        }
      }
      xmlhttp.open("GET","getuser.php?q="+str,20);
      xmlhttp.send();
    }

    $(document).ready(function () {

         $('#users').change(function (){
         setInterval(function () {
         if($('#users').val()=='1'||$('#users').val()=='2'||$('#users').val()=='3'){
         showUser($('#users').val())
         }
         else{
         clearInterval();
         }
         },3000)
         })
         })





    </script>

    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background:url(123456.jpg); background-size:1350px auto; background-repeat:no-repeat; background-attachment:fixed; text-align: center" >
  
  <?php
  include 'SellerNavBar.php'
  ?>
      
   <form style="margin: 100px auto;background:rgba(255,255,255,0.7);
	padding:20px 20px 20px 20px;
	border-radius : 20px;
	margin: 10px 10px 10px 10px ;">
    
<select id='users' name="users">
<option id='x' value="">Select a Type:</option>
<option value="1">Notification</option>
<option value="2">Special Notification</option>
<option value="3">My Special Notification</option>
</select>
</form>

<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>

  </body>
</html>
