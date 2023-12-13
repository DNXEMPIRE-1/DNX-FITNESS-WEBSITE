<?php

    $con=mysqli_connect('localhost','phpmyadmin','Admin@123','fitness');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>
