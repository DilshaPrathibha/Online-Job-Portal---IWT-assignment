<?php

require 'config.php'; // Assuming config.php contains the database connection

// Job details
$jobname = $_POST["jname"];
$joblocation = $_POST["jlocation"];
$emptype = $_POST["emptype"];
$jobsalary = $_POST["jsalary"];
$jdescription = $_POST["jdescription"];
$jobskills = $_POST["jskills"];

// Company details
$companyname = $_POST["cname"];
$cemployee = $_POST["cemployee"];
$companylocation = $_POST["clocation"];
$companyabout = $_POST["cabout"];
$companyemail = $_POST["cemail"];

// Check if a job with the same name already exists
$check_job = "SELECT * FROM jobs WHERE Title = '$jobname'";
$result = $con->query($check_job);

if ($result->num_rows > 0) {
    echo "Job already exists. Please use a unique job name.";
} else {
    // Corrected column name for employment type (adjust this to match your actual schema)
    $sql_job = "INSERT INTO jobs VALUES ('$jobname', '$joblocation', '$emptype', '$jobsalary', '$jdescription', '$jobskills')";
    
    // Insert company details
    $sql_company = "INSERT INTO company VALUES ('$companyname', '$cemployee', '$companylocation', '$companyabout', '$companyemail')";

    // Execute both SQL statements
    if ($con->query($sql_job) && $con->query($sql_company)) {
        /*echo "Insert successful";*/
        header("Location:http://localhost/jobsadawiya/Sandeepa/Malith/read.php");
        exit;
    } else {
        echo "ERROR: " . $con->error;
    }
}

$con->close();

?>
