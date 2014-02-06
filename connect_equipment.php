<?php
/*Connection information for our equipment database.*/
$connection = mysqli_connect('localhost', 'vpn', 'sp2014', 'equipment');

if (!$connection) {
    die('Connection Error: (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

echo 'Connection Successful...' . mysqli_get_host_info($connection) . "\n";
?>