<?php

    $db_server ="localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "malcomwdd";
    
    $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
    if($conn) {
        // echo "Connected to MySQL";
    } 
    else {
        echo "Not Connected to MySQL";
    }

?>