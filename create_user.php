<!DOCTYPE html>
<!-- This is the login page for project connect.-->
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
      <title>Welcome</title>
   </head>
   <body>
      <a href="logout.php"><button class="logout">Logout</button> </a>
      <a href="admin.php"><button class="logout">Admin Panel</button> </a>
      <header>
      </header>
      <!--Form code for logging into connect's system.-->
      <form id='login' action='create.php' method='post' accept-charset='UTF-8'>
         <!--The fieldset is being used for the thin white border around the form.-->
         <fieldset>
            <h1>Create User</h1>
            <input type='hidden' name='submitted' id='submitted' value='1' />
            <p><label>
               Username:
               <br><input type='text' name='username' maxlength="50" />
               </label>
            </p>
            <p><label>
               Password:
               <br><input type='password' name='password' maxlength="50" />
               </label>
            </p>
            <p><label>
               First Name:
               <br><input type='firstname' name='firstname' maxlength="50" />
               </label>
            </p>
            <p><label>
               Last Name:
               <br><input type='lastname' name='lastname' maxlength="50" />
               </label>
            </p>
            <p><label>
               Email:
               <br><input type='email' name='email' maxlength="50" />
               </label>
            </p>
            <p><button>Submit</button></p>
         </fieldset>
      </form>
   </body>
</html>