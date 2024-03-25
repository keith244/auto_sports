<?php

    $con = mysqli_connect('localhost','root','','auto_sports');
    if (mysqli_connect_error()){
        echo "Failed to connect to MySql" . mysqli_connect_error();
    }
?>