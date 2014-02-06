<?php
/*Connection information for our user database.*/
$connection = mysqli_connect('localhost', 'vpn', 'sp2014', 'vpn');

if (!$connection) {
    die('Connection Error: (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

echo 'Connection Successful...' . mysqli_get_host_info($connection) . "\n";
?>