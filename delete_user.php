<!DOCTYPE html>
<!--The home page contains a table where users can pick devices to configure.-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="main/style.css">
        <title>Home</title>
    </head>
    <body>
    <a href="logout.php"><button>Logout</button> </a>
    <a href="home.php"><button>Home</button> </a>
    <header>
	</header>
        <form name='users' action='delete.php' method='post'>
        <?php
require('connect_users.php');

$check = true;
if ($connection->connect_errno) {
	echo "Failed to connect to MySQL: (" . $connection->connect_errno . ") "
	. $connection->connect_error;
    $check=false;
} 

if($check==true) {
  $sql = "SELECT * FROM members";
  $result_db = $connection->query($sql);

  if (!$result_db) {
		echo $connection->error . ' Error performing query!';
  }


  else {
  echo "<table border='1'>";
  while ($row = $result_db->fetch_object()) {
                             
			echo "<tr><td><input type=\"radio\" name=\"delete\" 
                             value=\"{$row->mem_id}\" 
                             name=\"id{$row->mem_id}\"/></td>";
            echo "<td><label for=\"id{$row->firstname}\">
                                $row->firstname</label></td>";
			echo "<td><label for=\"id{$row->lastname}\">
                                $row->lastname</label></td>";
            echo "<td><label for=\"id{$row->email}\">
                                $row->email</label><br/></td></tr>";
		}
        echo "</table>";
	}
    }
?>

    <p><input type="submit" value="Delete User"></p>
    </form>
    </body>
</html>
