<!DOCTYPE html>
<!--The home page contains a table where users can pick devices to configure.-->
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
        <form name='pods' action='remove.php'>
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
                             id=\"id{$row->mem_id}\"/></td>";
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

    <p><button>Delete Pod</button></p>
    </form>
    </body>
</html>
