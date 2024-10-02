<?php
require 'config.php';

$uid = $_POST["delid"];

$sql = "DELETE from userpayment
         where  trx_id = '$uid'";

if ($conn->query($sql)) 
 {
   echo "deleted sucessfully.";
 } 
 
 else
 {
  echo "not success";
 }

?>