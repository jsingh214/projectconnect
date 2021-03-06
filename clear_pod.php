<!DOCTYPE html>
<!--The home page contains a table where users can pick devices to configure.-->
<?php
session_start();
if ($_SESSION["username"] == null) {
    header('Location: index.php');
}
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="main/style.css">
        <title>Home</title>
    </head>
    <a href="logout.php"><button class="logout">Logout</button> </a>
    <a href="admin.php"><button class="logout">Admin Panel</button> </a>
    <body>
    <header>
    </header>
        <form name='pods' action='clear.php' method='post'>
        <?php
        echo "<h1>Warning: Clearing pods will sign out admin each time to clear session data.</h1>" ;
require('connect_equipment.php');

$check = true;
if ($connection->connect_errno) {
    echo "Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
    $check = false;
}

if ($check == true) {
    $sql       = "SELECT * FROM pods p LEFT JOIN members m ON p.mem_id = m.mem_id";
    $result_db = $connection->query($sql);
    
    if (!$result_db) {
        echo $connection->error . ' Error performing query!';
    } else {
        echo "<table border='1'><tr><td></td><td><label><strong>Pod Number:</strong></label></td><td><label><strong>Pod Devices:</strong></label></td><td><label><strong>Status:</strong></label></td></tr>";
        while ($row = $result_db->fetch_object()) {
            if (!is_null($row->mem_id)) {
                echo "<tr><td><input onclick=\"this.form.submit();\" type=\"radio\" name=\"pod\" 
                             value=\"{$row->pod_id}\"
                             name=\"{$row->pod_id}\"
                             id=\"id{$row->pod_id}\"/></td>";
                echo "<td><label for=\"id{$row->pod_id}\">
                                $row->pod_id</label></td>";
                echo "<td><label for=\"id{$row->pod_desc}\">
                                $row->pod_desc</label></td>";
                echo "<td><label for=\"id{$row->mem_id}\">
                                Checked out by: $row->username</label><br/></td></tr>";
            }   
        }      

        echo "</table>";
    }
}
?>
    </form>
    </body>
</html>