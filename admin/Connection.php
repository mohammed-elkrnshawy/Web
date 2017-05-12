<<?php
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
?>
