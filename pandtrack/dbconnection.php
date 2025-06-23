<?php
$db_servername="localhost";
$db_username="root";
$db_password="";
$db_dbname="pantra";
$dbconnection=mysqli_connect($db_servername, $db_username, $db_password,$db_dbname);
date_default_timezone_set('Asia/Kolkata');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
