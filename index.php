<!DOCTYPE html>
<!-- This is the login page for project connect.-->
<?php
    session_start();
    if (isset($_SESSION["username"]) && $_SESSION["username"] == "admin")
    {
        header('Location: admin.php');
    }
    elseif (isset($_SESSION["username"]) && $_SESSION["username"] != null)
    {
        header('Location: home.php');
    }

?>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="main/style.css">
      <title>Welcome</title>
   </head>
   <body>
      <header>
      </header>
      <!--Form code for logging into connect's system.-->
      <form id='login' action='validation.php' method='post' accept-charset='UTF-8'>
         <!--The fieldset is being used for the thin white border around the form.-->
         <fieldset>
            <h1>Login</h1>
            <input type='hidden' name='submitted' id='submitted' value='1' />
            <p><label>
               Username:
               <input type='text' name='username' maxlength="50" />
               </label>
            </p>
            <p><label>
               Password:
               <input type='password' name='password' maxlength="50" />
               </label>
            </p>
            <p><input type="submit" value="Login"></p>
         </fieldset>
      </form>
   </body>
</html>