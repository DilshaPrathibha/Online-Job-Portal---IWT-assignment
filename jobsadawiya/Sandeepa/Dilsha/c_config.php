<?php

$conn = new mysqli("localhost", "root", "", "jobadawiya"); //

if($conn -> connect_error)
{
    die("Connectrrion failed: ".$conn -> connect_error);
}
?>