<?php

$conn = new mysqli("localhost","root","","userdata");

 if ($conn->connect_error)
 {
   die("connection faild".$conn->connect_error);
 }
 else
 {
   echo "sucessfull";
 }
?>