<!DOCTYPE html>
<?php session_start(); ?>
<!--The home page contains a table where users can pick devices to configure.-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main/style.css">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>Home</title>
    </head>
    <h1><a href=�logout.php�>Logout</a></h2>
    <body>
        <div id="container">
            <div id="content-home">
                <table border="1">
                    <tr>
                        <th>Select:</th>
                        <th>Pods:</th>
                        <th>List of Equipment:</th>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="selectedPod1" value="pod1">
                        </td>
                        <td>1</td>
                        <td>Pending...</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="selectedPod2" value="pod2">
                        </td>
                        <td>2</td>
                        <td>Pending...</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="selectedPod3" value="pod3">
                        </td>
                        <td>3</td>
                        <td>Pending...</td>
                    </tr>
                </table>
                <input type="button" value="Select Pod" onclick="selectPod()"></input>
            </div>
        </div>
    </body>

</html>