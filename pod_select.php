<?php
function checkoutPod($pod_id){
    require('connect_equipment.php');
    session_start();
    $mem_id = $_SESSION['mem_id'];   
    if (!mysqli_query($connection, "UPDATE pods SET mem_id = ".$mem_id." WHERE pod_id = ".$pod_id))
     {
     die('Error: ' . mysqli_error($connection));
     }
   
   mysqli_close($connection);
}


    if (isset($_POST["pod"])
    && $_POST["pod"] == "1") {
        checkoutPod($_POST["pod"]);
        header('Location: anyterm-1.1.29/browser/anyterm.html');
    } else if (isset($_POST["pod"])
    && $_POST["pod"] == "2") {
        checkoutPod($_POST["pod"]);
        header('Location: anyterm-1.1.29/browser/anyterm.html');
    } else if (isset($_POST["pod"])
    && $_POST["pod"] == "3") {
        checkoutPod($_POST["pod"]);   
        header('Location: pod3.php');
    } else {
        echo "Error!";
    }

    ?>