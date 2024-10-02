<?php

require 'config.php';

$sfname  =   $_POST["fname"];
$slname  =   $_POST["lname"];
$semail  =   $_POST["email"];
$suname  =   $_POST["uname"];
$spwd =      $_POST["pwd"];
$sage =      $_POST["age"];
$shtown  =   $_POST["town"];
$sphone  =   $_POST["phone"];
$srole  =   $_POST["reg"];
$sterms  =   $_POST["terms"];




$sql = "INSERT INTO users (user_id, first_name, last_name, username, age, hometown, phone, spassword, register_as, terms_accepted, email) 
VALUES ('', '$sfname', '$slname', '$suname', '$sage', '$shtown', '$sphone', '$spwd', '$srole', '$sterms', '$semail');";


 //$sql = "INSERT INTO users 
//VALUES ('1','$sfname', '$slname', '$suname', '$sage', '$shtown', '$sphone', '$spwd', '$srole', '$sterms', '$semail');";



 //$sql = "INSERT INTO users (first_name, last_name, username, age, hometown,phone,password,register_as,terms_accepted,email)
//VALUES ('$sfname', '$slname', '$suname', '$sage', '$shtown','$sphone','$spwd','$srole','$sterms','$semail'); ";

if($conn->query($sql))
{
  echo "insert sucessfull";
}

else
{
  echo "error".$conn->error;
}

$conn->close();
?>