<?php
//config.php

$host='localhost';
$user='dbezzat';
$password='dbezzat';
$dbase='madeup';

$conn = mysqli_connect($host, $user, $password,$dbase);

//test database
if (!$conn) {
      echo "coulden't make aconnection!";
      exist;
}

//SQL- عمل استعلام داخل قاعدة البيانات عن طريق
$query ="SELECT * from Product";

    //جلب نتائج الاستعلام
    $sql =mysqli_query($conn,$query);

//show the result
echo "<TABLE BORDER=1>";
echo "<TR><TH>Product name</TH> <TH>Roast Type</TH> <TH>Quantity</TH></tr>";

    echo "</TABLE>";

//Disconnect with the database
mysqli_free_result ($sql);
mysqli_close ($conn);
