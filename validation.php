<?php
require('connect.php');

if (empty($_POST['username'])) {
 echo "<p>You need to enter a username!</p>"
 }
 
 if (empty($_POST['password'])) {
 echo "<p>You need to enter a password!</p>"
 }
?>
