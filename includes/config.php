<?php
$servername = "localhost";
$databasename = "eindopdracht_b2";
$username = "Martijn";
$password = "Welkom1234";

//Creating a connection
$conn = new mysqli($servername, $username, $password, $databasename);

//check connection
if($conn->connect_error)
{
  die("Connection failed.");
}
 ?>
