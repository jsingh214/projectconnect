<!DOCTYPE html>

<!-- This is the login page for project connect.-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="main/style.css">
        <title>Welcome</title>
    </head>
    <body>
	<header>
	</header>
    <!--
	<nav>
	<a href="index.php"><b>Home</b></a> 	
	<a href="admin.php"><b>Admin</b></a>
	<a href="logout.php"><b>Logout</b></a>
	</nav>
    -->
        <!--Form code for logging into connect's system.-->
        <form id='login' action='submit.php' method='post' accept-charset='UTF-8'>
        <!--The fieldset is being used for the thin white border around the form.-->
         <fieldset>
            <h1>Create User</h1>
            <input type='hidden' name='submitted' id='submitted' value='1' />
            <p><label>
                Username:
                <input type='text' name='username' maxlength="50" />
            </label></p>
            <p><label>
                Password:
                <input type='password' name='password' maxlength="50" />
            </label></p>
            <p><label>
                First Name:
                <input type='firstname' name='firstname' maxlength="50" />
            </label></p>
            <p><label>
                Last Name:
                <input type='lastname' name='lastname' maxlength="50" />
            </label></p>
            <p><label>
                Email:
                <input type='email' name='email' maxlength="50" />
            </label></p>
            <p><button>Submit</button></p>
            </fieldset>
        </form>
    </body>
</html>