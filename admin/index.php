<?php
session_start();
$servername = "localhost";
$username = "dbezzat";
$password = "dbezzat";
$database="madeup";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))
  {
    $name =$_POST['user'];
    $pass =$_POST['pass'];
    if (!empty($_POST['SellerLogin']))
     {
       $seller='true';
     }
     else {
       $seller='false';
     }
  //  echo $name. ' '.$phone.' '.$email;

  }
if (isset($_POST['rememberme'])) {
    /* Set cookie to last 1 year */
    setcookie('username', $name, time()+60*60*24*365, '/account', 'www.example.com');
    setcookie('password', md5($pass), time()+60*60*24*365, '/account', 'www.example.com');

} else {
    /* Cookie expires when browser closes */
    setcookie('username', $_POST['username'], false, '/account', 'www.example.com');
    setcookie('password', md5($_POST['password']), false, '/account', 'www.example.com');
}

  if($seller==='true')
  {
    $query= "SELECT * FROM `supplier` WHERE `Email`= '" . $name . "' AND `Password`= '" . $pass . "' OR
                                             `Name`= '" . $name . "' AND `Password`= '" . $pass . "' ";

  }
  else {
    $query= "SELECT * FROM `customer` WHERE `Email`= '" . $name . "' AND `Password`= '" . $pass . "' OR
                                             `Name`= '" . $name . "' AND `Password`= '" . $pass . "' ";
  }

  // $sql =mysqli_query($conn,$query);
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0)
  {
    $_SESSION["Username"] = $name;
    $_SESSION["type"] = $seller;

    while($row = mysqli_fetch_array($result))
      {
        $_SESSION["UserId"] = $row['Id'];
      }


      echo "'".$_SESSION["UserId"]."'";

    header('Location: ../index.php');
  }
else {

  echo '<script language="javascript">';
echo 'alert("Please Check Your Data");';
echo 'window.location.href="login.php";';
echo '</script>';
}

mysqli_close($conn);

 ?>
