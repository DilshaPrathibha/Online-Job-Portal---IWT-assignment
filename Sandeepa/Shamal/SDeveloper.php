<?php

    $con=new mysqli("localhost", "root", "", "intern");

    if($con->connect_error)
    {
        die("Connection Failed ".$con->connect_error);
    }

?>