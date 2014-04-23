<!DOCTYPE html>
<!--The home page contains a table where users can pick devices to configure.-->
<?php
    session_start();
    if ($_SESSION["username"] == null)
    {
        header('Location: index.php');
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
        <form name='pods' action='pod_select.php' method='post'>
        <?php
require('connect_equipment.php');

$check = true;
if ($connection->connect_errno) {
	echo "Failed to connect to MySQL: (" . $connection->connect_errno . ") "
	. $connection->connect_error;
    $check=false;
} 

if($check==true) {
  $sql = "SELECT * FROM pods";
  $result_db = $connection->query($sql);

  if (!$result_db) {
		echo $connection->error . ' Error performing query!';
  }
  else {
  echo "<table border='1'>";
                 while ($row = $result_db->fetch_object()) {
                 
			echo "<tr><td><input type=\"radio\" name=\"pod\" 
                             value=\"{$row->pod_id}\"
                             name=\"{$row->pod_id}\"
                             id=\"id{$row->pod_id}\"/></td>";
            echo "<td><label for=\"id{$row->pod_id}\">
                                $row->pod_id</label></td>";
			echo "<td><label for=\"id{$row->pod_desc}\">
                                $row->pod_desc</label></td>";
            //echo "<td><label for=\"id{$row->status}\">
            //                    $row->status</label><br/></td></tr>";
		}
        echo "</table>";
	}
}
?>

    <p><input type="submit" value="Select Pod"></p>
    </form>
    </body>
</html>
