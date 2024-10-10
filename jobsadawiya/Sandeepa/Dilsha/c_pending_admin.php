<?php
require 'c_config.php';

if (isset($_POST["cid"])) {
    $ID = $_POST["cid"];


    $sql = "UPDATE contact_us SET status='pending' WHERE m_id='$ID'";

    if ($conn->query($sql) === TRUE) {

        header("Location: c_update_admin.php?status=setpending");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
