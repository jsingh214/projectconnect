<?php
/*This code checks the connection to the database and contains information.*/
$con = mysqli_connect('localhost', 'vpn', 'sp2014', 'vpn');

if (mysqli_connect_errno())
  {
  echo "Failed to connect: " . mysqli_connect_error();
  }

mysqli_close($con);
?>