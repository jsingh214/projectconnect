<!DOCTYPE html>
<!--The user administrator page.-->
<?php
    session_start();
    if ($_SESSION["username"] == null)
    {
        header('Location: index.php');
    }
    elseif ($_SESSION["username"] != "admin")
    {
        header('Location: home.php');
    }
?>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="main/style.css">
      <title>Home</title>
   </head>
   <a href="logout.php"><button>Logout</button> </a>
   <body>
      <header>
      </header>
      <ul>
         <li><a href="home.php">Project Connect Application</a></li>
         <li><a href="create_user.php">Create User</a></li>
         <li><a href="delete_user.php">Delete User</a></li>
      </ul>
   </body>
</html>
