<?php
require 'config.php'; 
$jobname = $_POST["jname"];
$joblocation = $_POST["jlocation"];
$emptype = $_POST["emptype"];
$jobsalary = $_POST["jsalary"];
$jdescription = $_POST["jdescription"];
$jobskills = $_POST["jskills"]; 
$sql="UPDATE jobs set jLocation='$joblocation',Employmenttype='$emptype',SalaryRange='$jobsalary',jDescription='$jdescription',Skills='$jobskills' where Title='$jobname'";
if($con->query($sql))
{
    echo "updated";
}
else{
    echo"Not updated";
}
$companyname = $_POST["cname"];
$cemployee = $_POST["cemployee"];
$companylocation = $_POST["clocation"];
$companyabout = $_POST["cabout"];
$companyemail = $_POST["cemail"];
$sqlcompany="UPDATE company set employe='$cemployee',cLocation='$companylocation',About='$companyabout',Email='$companyemail' where cName='$companyname'";
if($con->query($sqlcompany))
{
    echo "updated";
}
else{
    echo"Not updated";
}
?>
 