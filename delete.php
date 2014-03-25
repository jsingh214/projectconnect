<?php
/*Connection information for our user database.*/
$connection = mysqli_connect('localhost', 'vpn', 'sp2014', 'vpn');

if (!$connection) {
    die('Connection Error: (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

foreach($_POST['delete'] as $mem_id) {
    mysqli_query("DELETE FROM members WHERE ID=".$mem_id)
}

mysqli_close($connection);
?>