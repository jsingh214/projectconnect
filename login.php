<?php
session_start();
 if($_REQUEST['username']== "" && $_REQUEST['password']==”?){
 $_SESSION['username'] = “”;
 $_SESSION['password'] = “?;
 header(“Location: home.php”);
 }
 else{
 header(“Location: index.php”);
 }
?>