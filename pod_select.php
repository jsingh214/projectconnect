<?php

    if (isset($_POST["pod"])
    && $_POST["pod"] == "1") {
        header('Location: anyterm-1.1.29/browser/anyterm.html');
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