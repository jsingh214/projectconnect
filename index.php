<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
header(“Location: home.php”);
}
?>
<!-- This is the login page for project connect.-->
<!DOCTYPE html>
<html>
    
    <head>
        <link rel="stylesheet" type="text/css" href="main/style.css">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>Welcome</title>
    </head>
    
    <body>
        <div id="content-index">
            <div id="center">
			<!--Form code for logging into connect's system.-->
                <form id='login' action='login.php' method='post' accept-charset='UTF-8'>
                    <fieldset>
                        <legend>Login</legend>
                        <input type='hidden' name='submitted' id='submitted' value='1' />
                        <div class="break">
                            <label for='username'>Username:</label>
                            <input type='text' name='username' id='username' maxlength="50" />
                        </div>
                        <div class="break">
                            <label for='password'>Password:</label>
                            <input type='password' name='password' id='password' maxlength="50" />
                        </div>
                        <div class="break">
                            <input type='submit' name='Submit' value='Submit' />
						</div>
                        <div class="break">
						<a href="create.php">Sign Up</a>
						</div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>

</html>