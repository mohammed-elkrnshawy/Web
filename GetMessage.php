<html>
<head>
<style type="text/css">
div.inline { float:left; }
</style>
<style>
/*div{
  padding-left: 50px;

}*/
b{
  font-size: 25px;
  color: #999;
}
button{
  margin-left: 100px;
  padding-left: 100px;
}
</style>
</head>
<body>

<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$servername = "localhost";
$username = "dbezzat";
$password = "dbezzat";
$database="madeup";
$mid =$_SESSION["UserId"];
$index=1;
  $link = mysqli_connect($servername, $username, $password,$database);
  $sql = "SELECT `Eamil`,`Subject`,`Message`,`Id` FROM `message`";


  $result = mysqli_query($link,$sql);
  while ($row = mysqli_fetch_array($result))
  {

    if($index%3==0)
    {
      echo "<br>";echo "<br>";
      echo "<br>";echo "<br>";
      echo "<br>";echo "<br>";
      echo "<br>";echo "<br>";
      echo "<br>";echo "<br>";
      echo "<br>";echo "<br>";
      echo "<div class=inline style='padding: 0 50px 0 50px '>";
      echo "<b>Sender Email</b><br>";
      echo "$row[0]<br>";
      echo "<b>Subject</b><br>";
      echo "$row[1]<br>";
      echo "<b>Message</b><br>";
      echo "$row[2]";
      echo "<br><br>";
      echo '<a style="text-decoration: none;background-color: #29abe2;border-radius: 7px;  width:120%; padding: 10px 50px;display: block;color: #fff;margin-right: 50px;" class="btn btn-primary" href="SendAcceptOrder.php?item='.$row[3].'">Reply</a>';

      echo "</div>";
    }
    else {
      echo "<div class=inline style='padding: 0 50px 0 50px '>";
      echo "<b>Sender Email</b><br>";
      echo "$row[0]<br>";
      echo "<b>Subject</b><br>";
      echo "$row[1]<br>";
      echo "<b>Message</b><br>";
      echo "$row[2]";
      echo "<br><br>";
      echo '<a style="text-decoration: none; width:120%; background-color: #29abe2;border-radius: 7px;padding: 10px 50px;display: block;color: #fff;margin-right: 50px;" class="btn btn-primary" href="SendAcceptOrder.php?item='.$row[3].'">Reply</a>';
echo "<br />";
echo "<br />";
echo "<br />";
      echo "</div>";
    }
    $index++;
  }
?>
</body>
</html>
