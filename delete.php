<?php
/*Connection information for our user database.*/
require('connect_users.php');

foreach($_POST['delete'] as $mem_id) {
    mysqli_query("DELETE FROM members WHERE ID=".$mem_id)
}

mysqli_close($connection);
?>