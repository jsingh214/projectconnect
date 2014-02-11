<?php
require('connect_equipment.php');
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
    <?php
        $result = mysqli_query($connection,"SELECT * FROM pods");

        echo "<table border='1'>
        <tr>
        <th>Pod Number:</th>
        <th>Pod Equipment:</th>
        
        </tr>";

        while($row = mysqli_fetch_array($result))
          {
          echo "<tr>";
          echo "<td>" . $row['pod_id'] . "</td>";
          echo "<td>" . $row['pod_desc'] . "</td>";
          echo "</tr>";
          }
        echo "</table>";
        ?>
    </body>
</html>
