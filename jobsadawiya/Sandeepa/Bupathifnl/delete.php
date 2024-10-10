<?php
require 'config.php';

$uid = $_POST["id"];

$sql = "DELETE from users
         where  user_id = '$uid'";

if ($conn->query($sql)) 
 {
   echo "deleted sucessfully.";
 } 
 
 else
 {
  echo "not success";
 }

?>