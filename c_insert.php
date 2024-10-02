<?php
        require 'c_config.php';
        
        /* getting from contact.php */ 
        $c_name = $_POST["cname"];
        $c_email = $_POST["cemail"];
        $c_phone = $_POST["cphone"];
        $c_message = $_POST["cmessage"];

        date_default_timezone_set('Asia/Colombo');
        $datetime = date("Y-m-d H:i:s");

        // contact_us - table name
        $sql = "INSERT INTO contact_us VALUES ('','$c_name', '$c_email', '$c_phone', '$c_message', '$datetime', 'pending')"; 
 
        if ($conn ->query($sql)) {
            echo "Incert Successful";
        }else{
            echo "Error".$conn -> error;
        }

        $conn -> close(); // close conn
    ?>