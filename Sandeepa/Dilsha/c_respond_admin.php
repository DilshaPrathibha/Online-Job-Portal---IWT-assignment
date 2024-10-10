<?php
require 'c_config.php';

if (isset($_POST["cid"])) {
    $ID = $_POST["cid"];

    // Update the status to 'responded'
    $sql = "UPDATE contact_us SET status='responded' WHERE m_id='$ID'";

    if ($conn->query($sql) === TRUE) {
        // Redirect to c_update_admin.php - success status
        header("Location: c_update_admin.php?status=responded");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close(); // Close the connection
?>
