<?php
        require 'c_config.php';
        
        /* getting from contact.php */ 
        $c_name = $_POST["cname"];
        $c_email = $_POST["cemail"];
        $c_phone = $_POST["cphone"];
        $c_message = $_POST["cmessage"];

        // contact_us - table name
        $sql = "INSERT INTO contact_us VALUES ('','$c_name', '$c_email', '$c_phone', '$c_message', '', '')"; 
 
        if ($conn ->query($sql)) {
            echo "Incert Successful";
        }else{
            echo "Error".$conn -> error;
        }

        $conn -> close(); // close conn
    ?>