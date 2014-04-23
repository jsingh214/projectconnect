<?php
/*Connection information for our user database.*/
$connection = mysqli_connect('localhost', 'root', 'Sp2014', 'connect');

if (!$connection) {
    die('Connection Error: (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
mysqli_select_db($connection, "members");
?>
