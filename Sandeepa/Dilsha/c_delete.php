<?php
require 'c_config.php';

if (isset($_POST['cid'])) {
    $cid = $_POST['cid'];

    $sql = "DELETE FROM contact_us WHERE m_id = '$cid'"; // $ cid

    if ($conn->query($sql) === TRUE) {
        header("Location: c_read.php?status=deletesuccess");
        exit();
    } else {
        header("Location: c_read.php?status=deleteerror"); 
        exit();
    }
}
