<?php
   /*User validation for our home page.*/
   require('connect_users.php');
   
   if (empty($_POST['username'])) {
       echo "<p>You need to enter a username!</p>";
   }
   if (empty($_POST['password'])) {
       echo "<p>You need to enter a password!</p>";
   } 
   $username = mysqli_real_escape_string($connection, $_POST["username"]);
   $password = mysqli_real_escape_string($connection, $_POST["password"]);
   $crypt_password = sha1($password);
   
   $userdata = mysqli_query($connection,
       "SELECT * FROM members WHERE username='$username' and password='$crypt_password'"
   ) or die (mysqli_error($connection));
   $num_row = mysqli_num_rows($userdata);
   
   /*This is where validation starts, if the number of rows, which is always 1, for the user doesn't equal 1, don't let though, otherwise let through.*/
   
   if($num_row == 1) {
       while($row=mysqli_fetch_array($userdata)){
       session_start();
       $_SESSION['username'] = $username;
       if($_SESSION['username']  == 'admin'){
       header('Location: admin.php');
       }
       else{
       header('Location: home.php');
       }
       }
       
   } else {
       header('Location: index.php');
       echo "<p>You username or password is incorrect!</p>";
   }
   
   
   /*Closes the connection here because connection only stays open until user is validated and in.*/
   mysqli_close($connection);
   ?>