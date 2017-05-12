<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$server="localhost";
$username="root";
$password=""; //Default
$db = "madeup";

$loadpath="../images/anonymous-man.png";
$user = $_SESSION["Username"];
$mid =$_SESSION["UserId"];

$link = mysqli_connect($server, $username, $password, $db);

$Command = "SELECT `image_path` FROM `customer` WHERE `Id`='".$mid."' ";
$result =mysqli_query($link,$Command);

if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result))
    {
        $loadpath=$row[0];
    }
}

$sqlemail = "SELECT `Id`, `Name`, `Password`, `Email`, `Adrees`, `Phone` FROM `customer` WHERE `Name`='".$user."'";

 $result = mysqli_query($link, $sqlemail);

 if (mysqli_num_rows($result) > 0)
  {
      while($row = mysqli_fetch_array($result))
      {
          $Name=$row['Name'];
          $Email=$row['Email'];
            $Adrees=$row['Adrees'];
              $Phone=$row['Phone'];

      }

  }
  
else
{
    echo "no connect";
}

?>

<!DOCTYPE>
<html>
<head>

    <link rel="stylesheet" href="style.css"/>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="layout/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="layout/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
<style type="text/css">
div.inline { float:left; }
</style>

</style>
       <meta charset="utf-8" />
       <title> Profile </title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="Profilestyle.css">


    </head>
    <body style="background:url(123456.jpg); background-size:1350px auto; background-repeat:no-repeat; background-attachment:fixed;">
       <?php
include 'UserNavBar.php';
 ?>
          <center>          
          <div class="myprofile" style="width:500px; height:auto;">
        
        <header>
        <h1 calss="LoginSignup" style="color:#c1272d; font-size:45px">My Profile</h1>
        </header>
        <section id="container">
            <ul id="stage">
            </ul>
        </section>
        <footer>
        </footer>
      <br>
      
       <canvas id="line" width="200" height="50"></canvas>
      
      <form method="post" action="UploadImageUser.php" enctype="multipart/form-data">
      <img id="img" src="<?php echo "".$loadpath.""?>" width="200px" style="padding-left:0px;" />
      <br><br>
      
      <input id="file" class="form-control" type="file" name="image" onChange="imgchange(this)" autofocus />
      <br/>
      <input type="submit" class="btn btn-primary btn-block" value="Save Picture" style="width:150px" />
      
      </form>
      <br/>
      <br>
      
        <li style="font-size:25px;">Name : <b class="info"><?php echo $Name; ?></b></li>
        <li style="font-size:25px;">Email : <b class="info"><?php echo $Email; ?></b></li>
        <li style="font-size:25px;">Address : <b class="info"><?php echo $Adrees; ?></b></li>
        <li style="font-size:25px;">Phone : <b class="info"><?php echo $Phone; ?></b></li>

        </div>

<br><br>
<div class="myprofile" style="width:auto; max-height: 400px; overflow-y: scroll;">
       <h1 calss="LoginSignup" style="color: #c1272d; font-size: 45px;">My Special Orders</h1>

<?php
include 'SelectUserSpecialOrder.php';
 ?>

<br><br><br><br>
</div>

<br><br>

<div class="myprofile" style="width:auto; max-height: 400px; overflow-y: scroll;">
       <h1 calss="LoginSignup" style="color: #c1272d; font-size: 45px">My Bills</h1>

<?php
include 'SelectUserBill.php';
 ?>

<script>
var linecanvas = document.getElementById('line');
      var context = linecanvas.getContext('2d');
	  
     context.beginPath();
context.moveTo(0,0);
context.lineTo(200,0);
context.lineWidth = 3;
context.strokeStyle = '#c1272d';
context.stroke();
</script>

    <script src="jquery/jquery-3.1.0.min.js"></script>
    <script>

        function imgchange(f) {
            var filePath = $('#file').val();
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img').attr('src', e.target.result);
            };
            reader.readAsDataURL(f.files[0]);
        }


    </script>
           </center>          
</div>
<br>
<br>
<br>
</div>
    </body>
</html>
