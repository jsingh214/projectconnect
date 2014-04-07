<?php
    if (isset($_POST["$row"])
    && $_POST["$row"] == "1") {
        header('Location: pod1.php');
    } else if (isset($_POST["2"])
    && $_POST["$row"] == "2") {
        header('Location: pod2.php');
    } else if (isset($_POST["3"])
    && $_POST["$row"] == "3") {
        header('Location: pod3.php');
    } else {
        echo "Error!";
    }
?>