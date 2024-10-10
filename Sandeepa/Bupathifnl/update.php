<?php

require 'config.php';

$id = $_POST["SID"];
$sfname  =   $_POST["fname"];
$slname  =   $_POST["lname"];
$semail  =   $_POST["email"];
$suname  =   $_POST["uname"];
$spwd =   $_POST["pwd"];

if(empty($id)||empty($sfname)||empty($slname)||empty($semail)||empty($suname)|| empty($spwd))
 {
  echo "all required";
 }
else
    {
      
$sql = "UPDATE users 
set  user_first = '$sfname',
user_last = '$slname',
user_email = '$semail',
user_uid = '$suname',
user_pwd = '$spwd'
where  user_id = $id";

if($conn->query($sql))
{
echo "update sucessfull";
}

else
{
echo "error".$conn->error;
}

$conn->close();       

 }
         





?>