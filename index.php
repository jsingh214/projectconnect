<!DOCTYPE html>
<!-- This is the login page for project connect.-->
<html lang="en">

    <head>
        <meta charset="utf8">
        <link rel="stylesheet" type="text/css" href="main/style.css">
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
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>

</html>
