<?php
require 'c_config.php';

if (isset($_POST['cid'])) {
    $cid = $_POST['cid'];

    $sql = "DELETE FROM contact_us WHERE m_id = '$cid'";

    if ($conn->query($sql) === TRUE) {
        header("Location: c_update_admin.php?status=deletesuccess"); // Redirect back to c_update_admin.php with status=success"
        exit();
    } else {
        header("Location: c_update_admin.php?status=deleteerror"); 
        exit();
    }
}
