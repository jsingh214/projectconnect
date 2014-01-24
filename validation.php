<?php
require('connect.php');

if (empty($_POST['username'])) {
 echo "<p>You need to enter a username!</p>";
 }
 
 if (empty($_POST['password'])) {
 echo "<p>You need to enter a password!</p>";
 }
 
 $username = mysql_real_escape_string($_POST["username"]);
 $password = mysql_real_escape_string($_POST["password"]);

    $userdata = mysql_query("SELECT * FROM Users WHERE username='$username' and password='$password'")
    or die (mysql_error());

    $data = mysql_fetch_array($userdata, MYSQL_ASSOC);

    if(mysql_num_rows($userdata) == 1){

session_start();

$_SESSION['username'] = $username;
header('Location: index.php');

    }else{
header('Location: home.php');
    }
?>
