<?php

// $conn = mysqli_connect('localhost','u541293459_gargipaperkraf','Narayan@1101');

$conn = mysqli_connect("localhost","root","","dynamicp1");

mysqli_select_db($conn,"dynamicp1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>