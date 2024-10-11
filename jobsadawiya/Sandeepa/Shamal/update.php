<?php
require 'config.php'; 
$nic = $_POST["nic"];
$degree = $_POST["degree"];
$project = $_POST["project"];
$gpa = $_POST["gpa"];
$hire = $_POST["hire"];
$lap = $_POST["lap"];
$permanant = $_POST["permanant"];
$interest = $_POST["interest"];
$sql="UPDATE sdeveloper set NIC='$nic',Degree='$degree',Previous_Experience='$project',GPA='$gpa',Timescale='$hire',Desition='$lap',Explanation='$permanant',Reason_for_intern='$interest' where NIC='$nic'";
if($con->query($sql))
{
    echo "updated";
}
else{
    echo"Not updated";
}
$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$number = $_POST["number"];
$education = $_POST["education"];
$sqlcompany="UPDATE customercare1 set Id='$id',Name='$name',Email='$email',Address='$address',MobileNumber='$number',EducationQualification='$education' where Id='$id'";
if($con->query($sqlcompany))
{
    /*echo "updated";*/
    header("Location:http://localhost/jobsadawiya/Sandeepa/Shamal/read.php");
    exit;
}
else{
    echo"Not updated";
}
?>
 