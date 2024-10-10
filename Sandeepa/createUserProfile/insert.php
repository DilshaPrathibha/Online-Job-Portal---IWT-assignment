<?php

require 'config.php';

$userName=$_POST["Name"];
$userTitle=$_POST["Title"];
$userDescription=$_POST["Description1"];
$aboutDescription=$_POST["Description2"];
$companyName=$_POST["cName"];
$employmentType=$_POST["eType"];
$workTitle=$_POST["eTitle"];
$startDate=$_POST["sDate"];
$endDate=$_POST["eDate"];
$workDescription=$_POST["Description3"];
$educationDescription=$_POST["Description4"];
$skillsDescription=$_POST["Description5"];

$sql="INSERT INTO user_account VALUES('','$userName','$userTitle','$userDescription','$aboutDescription','$companyName','$employmentType','$workTitle','$startDate','$endDate','$workDescription','$educationDescription','$skillsDescription')";

if($con->query($sql))
{
    echo "<script>
        alert('User account has been successfully created');
        window.location.href = 'http://localhost/jobsadawiya/Sandeepa/home/home.php';
    </script>";
    
    exit;
    
}
else
{
    echo "Error".$con->error;
}

$con->close();

?>