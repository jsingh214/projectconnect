<?php
/*Connection information for our user database.*/
$connection = mysqli_connect('localhost', 'vpn', 'sp2014', 'vpn');

if (!$connection) {
    die('Connection Error: (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
$password = mysqli_real_escape_string($connection, $_POST["password"]);
$crypt_password = sha1($password);

$sql="INSERT INTO members (username, password, firstname, lastname, email)
VALUES
('$_POST[username]','$_POST[crypt_password]','$_POST[firstname]','$_POST[lastname]','$_POST[email]')";

if (!mysqli_query($connection,$sql))
  {
  die('Error: ' . mysqli_error($connection));
  }
echo "1 record added";

mysqli_close($connection);
?>