<?php
require 'config.php';

$uid = $_POST["delid"];

$sql = "DELETE from userpayment
         where  trx_id = '$uid'";

if ($conn->query($sql)) 
 {
   echo "deleted sucessfully.";
   header("Location:http://localhost/jobsadawiya/Sandeepa/Bupathifnl/payinfo.php");
  exit;
exit;
 } 
 
 else
 {
  echo "not success";
 }

?>