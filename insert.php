<?php
/*This code checks the connection to the database and contains information.*/
$con = mysqli_connect('localhost', 'vpn', 'sp2014', 'vpn');

if (mysqli_connect_errno())
  {
  echo "Failed to connect: " . mysqli_connect_error();
  }

$sql="INSERT INTO members (username, password, firstname, lastname, email)
VALUES
('$_POST[username]','$_POST[password]','$_POST[firstname]', '$_POST[lastname]', '$_POST[email]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  header("Location: create.php");
  die();
  }
echo "User has been created.";
header("Location: home.php");
die();

mysqli_close($con);
?>