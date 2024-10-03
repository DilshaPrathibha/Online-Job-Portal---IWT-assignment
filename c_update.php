<?php
require 'c_config.php';

$ID = $_POST["cid"];
$name = $_POST["cname"];
$email = $_POST["cemail"];
$phone = $_POST["cphone"];
$message = $_POST["cmessage"];

if (empty($name) || empty($email) || empty($phone) || empty($message)) {

    header("Location: c_read.php?status=incompleteupdate");
    exit();
} else {
    $sql = "UPDATE contact_us SET name='$name', email='$email', phone='$phone', message='$message' WHERE m_id='$ID'";

    if ($conn->query($sql) === TRUE) {
        header("Location: c_read.php?status=updatessuccesfull");
        exit();
    } else {
        header("Location: c_read.php?status=updateerror");
        exit();
    }
}
