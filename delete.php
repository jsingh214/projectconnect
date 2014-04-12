<?php
/*Connection information for our user database.*/
require('connect_users.php');


if (!mysqli_query($connection, "DELETE FROM members WHERE mem_id=".$_POST['delete']))
  {
  die('Error: ' . mysqli_error($connection));
  }

mysqli_close($connection);
header("Location: delete_user.php");
?>