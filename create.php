<?php
/*Connection information for our user database.*/
require('connect_users.php');

$password = mysqli_real_escape_string($connection, $_POST["password"]);
$crypt_password = sha1($password);

$sql="INSERT INTO members (username, password, firstname, lastname, email)
VALUES
('$_POST[username]','$crypt_password','$_POST[firstname]','$_POST[lastname]','$_POST[email]')";

if (!mysqli_query($connection,$sql))
  {
  die('Error: ' . mysqli_error($connection));
  }
mysqli_close($connection);
header("Location: create_user.php");
?>