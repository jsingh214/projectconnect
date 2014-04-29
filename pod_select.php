<?php

function checkoutPod($pod_id){
    require('connect_equipment.php');
    session_start();
    $mem_id = $_SESSION['mem_id'];   
    $qry = "UPDATE pods SET mem_id = ".$mem_id." WHERE pod_id = ".$pod_id;

    if (!mysqli_query($connection, $qry))
     {
     die('Error: ' . mysqli_error($connection));
     }
   
   mysqli_close($connection);
}


    if (isset($_POST["pod"])
    && $_POST["pod"] == "1") {
        checkoutPod($_POST["pod"]);
        header('Location: http://155.42.107.197:7778/anyterm.html');
    } else if (isset($_POST["pod"])
    && $_POST["pod"] == "2") {
        checkoutPod($_POST["pod"]);
        header('Location: http://155.42.107.197:7778/anyterm.html');
    } else {
        echo "Error!";
    }

    ?>
