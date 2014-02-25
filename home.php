<?php
require('connect_equipment.php');

        //echo Welcome: ; echo $_SESSION['username'];
        $result = mysqli_query($connection,"SELECT * FROM pods");
        $rows = array();
        echo "<table border='1'>
        <tr>
        <th>Pod Number:</th>
        <th>Pod Equipment:</th>
        
        </tr>";

        while($row = mysqli_fetch_array($result))
          {
          $table = $rows[0];
          $rowButtons .= "<input type='radio' name='table' value={$table}>{$table}<br>\n";
          "<tr>";
          "<td>" . $row['pod_id'] . "</td>";
          "<td>" . $row['pod_desc'] . "</td>";
          "</tr>";
          }
        echo "</table>";
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
    <form name='equipment' action='validation.php' method='post'>
    <?php echo $rowButtons; ?>
    <br><br>
    <input type="submit" value="Select Pod">
    </form>
    </body>
</html>
