<?php
/*Connection information for our user database.*/
$connection = mysqli_connect('localhost', 'vpn', 'sp2014', 'vpn');

if (!$connection) {
    die('Connection Error: (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

$sql="INSERT INTO members (username, password, firstname, lastname, email)
VALUES
('$_POST[username]','$_POST[password]','$_POST[firstname]','$_POST[lastname]','$_POST[email]')";

if (!mysqli_query($connection,$sql))
  {
  die('Error: ' . mysqli_error($connection));
  }
echo "1 record added";

mysqli_close($connection);
?>