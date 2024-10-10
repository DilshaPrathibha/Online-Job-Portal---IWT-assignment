<?php
require 'c_config.php';

/* from feedback.php */
$f_name = $_POST["fname"];
$f_email = $_POST["femail"];
$f_type = $_POST["ftype"];
$f_rating = $_POST["frating"];
$f_message = $_POST["fmessage"];

date_default_timezone_set('Asia/Colombo');
$datetime = date("Y-m-d H:i:s");

$sql = "INSERT INTO feedback VALUES ('','$f_name', '$f_email', '$f_type', '$f_rating', '$f_message', '$datetime')";

if ($conn->query($sql)) {
    echo "<script>
            alert('Thank you for your feedback!');
            window.location.href = '../home/home.php';
          </script>";
    exit(); 
} else {
    echo "Error: " . $conn->error;  
}

$conn->close();
?>
