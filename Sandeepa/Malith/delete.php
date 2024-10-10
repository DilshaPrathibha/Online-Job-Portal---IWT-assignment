<?php
 
 require 'config.php'; 
 $jobname = $_POST["jname"];
 $companyname = $_POST["cname"];
 $sql="DELETE FROM jobs where Title='$jobname'";
  if($con->query($sql)) 
  {
    echo "Deleted succefully";
  } 
else{
    echo "NOT deleted";
}
$sql_company="DELETE FROM company where cName='$companyname'";
if($con->query($sql_company)) 
{
  header("Location:http://localhost/jobsadawiya/Sandeepa/Malith/read.php");
  exit;
} 
else{
  echo "NOT deleted";
}
?> 