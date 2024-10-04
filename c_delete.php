<?php
require 'c_config.php';

if (isset($_POST['cid'])) {
    $cid = $_POST['cid'];

    $sql = "DELETE FROM contact_us WHERE m_id = '$cid'"; // $ cid

    if ($conn->query($sql) === TRUE) {
        header("Location: c_read.php?status=deletesuccess"); // Redirect back to c_read.php with status=success"
        exit();
    } else {
        header("Location: c_read.php?status=deleteerror"); // status=deleteerror"
        exit();
    }
}
