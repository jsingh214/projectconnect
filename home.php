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
		echo $connection->error . ' Error perform query!';
  }


  else {
                 while ($row = $result_db->fetch_object()) {
			echo "<input type=\"radio\" name=\"pod\" 
                             value=\"{$row->pod_id}\" 
                             id=\"id{$row->pod_id}\"/>";
            echo "<label for=\"id{$row->pod_id}\">
                                $row->pod_id</label>";
			echo "<label for=\"id{$row->pod_desc}\">
                                $row->pod_desc</label>";
            echo "<label for=\"id{$row->status}\">
                                $row->status</label><br/>";
		}
	}
}

$connection->close();
?>

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
    </body>
</html>
