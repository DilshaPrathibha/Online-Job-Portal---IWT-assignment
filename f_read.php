<?php

/* read by admin */

require 'c_config.php';


$sql = "SELECT id, name, email, type, rating, message, time FROM feedback";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border='1'>";   /* '' */

    echo "<th> Feedback ID </th>" .
        "<th> Name </th>" .
        "<th> Email </th>" .
        "<th> Type </th>" .
        "<th> Rating <br> (0 - 5)</th>" .
        "<th> Message </th>" .
        "<th> Date and Time </th>";

    while ($row = $result->fetch_assoc()) { /* get rows one by one */

        echo "<tr>";

        echo "<td>" . $row["id"] . "</td>" . 
             "<td>" . $row["name"] . "</td>" . 
             "<td>" . $row["email"] . "</td>" . 
             "<td>" . $row["type"] . "</td>" . 
             "<td>" . $row["rating"] . "</td>" . 
             "<td>" . $row["message"] . "</td>" .
             "<td>" . $row["time"] . "</td>";
       
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No Results";
}

$conn->close();
?>