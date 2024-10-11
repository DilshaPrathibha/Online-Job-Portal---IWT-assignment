<?php

require 'config.php'; // Assuming config.php contains the database connection

// Software Developer Internship
$nic = $_POST["nic"];
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


    
    $sdeveloper = "INSERT INTO sdeveloper VALUES ('$nic','$degree', '$project', '$gpa', '$hire', '$lap', '$permanant', '$interest')";
    
   
    $customercare1 = "INSERT INTO customercare1 VALUES ('$id', '$name', '$email', '$address', '$number', '$education')";

    // Execute both SQL statements
    if ($con->query($sdeveloper) && $con->query($customercare1)) {
        /*echo "Insert successful";*/
        echo "<script>
        alert('successfully submitted');
        window.location.href = 'http://localhost/jobsadawiya/Sandeepa/home/home.php';
    </script>";
    } else {
        echo "ERROR: " . $con->error;
    }
//}

$con->close();

?>
