<?php
require('connect.php');
mysqli_select_db($connection, "members");

if (empty($_POST['username'])) {
    echo "<p>You need to enter a username!</p>";
}
if (empty($_POST['password'])) {
    echo "<p>You need to enter a password!</p>";
} 
$username = mysqli_real_escape_string($connection, $_POST["username"]);
$password = mysqli_real_escape_string($connection, $_POST["password"]);

$userdata = mysqli_query(
    $connection,
    "SELECT * FROM members WHERE username='$username' and password='$password'"
) or die (mysqli_error($connection));
$login = mysqli_fetch_array($userdata, MYSQL_ASSOC);
mysqli_num_rows($login);
if(mysqli_result() == 1) {
    session_start();
    $_SESSION['username'] = $username;
    header('Location: home.php');
} else {
  //  header('Location: index.php');
    echo "<p>You username or password is incorrect!</p>";
}
/*Closes the connection here because connection only stays open until user is validated and in.*/
mysqli_close($connection);
?>
