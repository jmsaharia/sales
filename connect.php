<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='sales';
//$limit =9;
$con;
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error($con);
  }
  ?>



