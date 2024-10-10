<?php

require 'config.php'; // Assuming config.php contains the database connection

// Software Developer Internship
$degree = $_POST["degree"];
$project = $_POST["project"];
$gpa = $_POST["gpa"];
$hire = $_POST["hire"];
$lap = $_POST["lap"];
$permanant = $_POST["permanant"];
$interest = $_POST["interest"];

// Customer care assistant person
$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$number = $_POST["number"];
$education = $_POST["education"];

// Check if a job with the same name already exists
$check_job = "SELECT * FROM sdeveloper WHERE Degree = '$degree'";
$result = $con->query($check_job);

//if ($result->num_rows > 0) {
   // echo "";
//} else {
    // Corrected column name for employment type (adjust this to match your actual schema)
    $sql_job = "INSERT INTO sdeveloper VALUES ('$degree', '$project', '$gpa', '$hire', '$lap', '$permanant', '$interest')";
    
    // Insert company details
    $sql_company = "INSERT INTO customercare1 VALUES ('$id', '$name', '$email', '$address', '$number', '$education')";

    // Execute both SQL statements
    if ($con->query($sql_job) && $con->query($sql_company)) {
        /*echo "Insert successful";*/
        echo "<script>
        alert('User account has been successfully created');
        window.location.href = 'http://localhost/jobsadawiya/Sandeepa/home/home.php';
    </script>";
    } else {
        echo "ERROR: " . $con->error;
    }
//}

$con->close();

?>
