<?php
require('connect_equipment.php');
session_start();
$qry = "UPDATE pods SET mem_id = null WHERE mem_id = ".$_SESSION['mem_id'];
 if (!mysqli_query($connection, $qry))
     {
     die('Error: ' . mysqli_error($connection));
     }
   
   mysqli_close($connection);
   session_destroy();
   header('Location: admin.php');
   ?>