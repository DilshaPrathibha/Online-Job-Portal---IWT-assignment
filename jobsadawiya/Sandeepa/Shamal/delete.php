<?php
 
 require 'config.php'; 
 $degree = $_POST["degree"];
 $id = $_POST["id"];
 $sql="DELETE FROM sdeveloper where Degree='$degree'";
  if($con->query($sql)) 
  {
    echo "Deleted succefully";
  } 
else{
    echo "NOT deleted";
}
$sql_company="DELETE FROM customercare1 where Id='$id'";
if($con->query($sql_company)) 
{
  header("Location:http://localhost/jobsadawiya/Sandeepa/Shamal/read.php");
  exit;
} 
else{
  echo "NOT deleted";
}
?> 