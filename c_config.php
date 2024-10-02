<?php
// jobportal - DB name
$conn = new mysqli("localhost", "root", "", "jobportal");

if($conn -> connect_error)
{
    die("Connectrrion failed: ".$conn -> connect_error);
}
?>