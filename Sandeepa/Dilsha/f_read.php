<?php

/* read by admin */
require 'c_config.php';
include('navbar.php');


$sql = "SELECT id, name, email, type, rating, message, time FROM feedback";
$result = $conn->query($sql);

echo " <h1 class='title-center'> <br> Feedbacks</h1>";  

if ($result->num_rows > 0) {

    echo "<table class='message-table'>";   

    echo "<thead><tr>" . 
    "<th> Feedback ID </th>" .
    "<th> Name </th>" .
    "<th> Email </th>" .
    "<th> Type </th>" .
    "<th> Rating <br> (0 - 5)</th>" .
    "<th> Message </th>" .
    "<th> Date and Time </th>" .
    "</tr></thead><tbody>";

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
    echo "</tbody></table>";
} else {
    echo "No Results";
}

$conn->close();
?>

<style>
    body{
        margin-top: 90px;
    }
   
.title-center {
    text-align: center;
    font-size: 24px;
    margin-top: 20px;
    color: #333;
}


.message-table {
    width: 80%; 
    margin: 20px auto; 
    border-collapse: collapse;
    font-size: 16px;
    text-align: left;
}

.message-table thead {
    background-color: #f2f2f2;
}

.message-table th, .message-table td {
    padding: 10px 12px; 
    border: 1px solid #ddd;
}

.message-table th {
    font-weight: bold;
    background-color: #f7f7f7;
}

.message-table tr:hover {
    background-color: #f1f1f1;
}

/* Responsive styles */
@media screen and (max-width: 768px) {
    .message-table {
        width: 100%;  
        font-size: 14px; 
    }
    
    .message-table th, .message-table td {
        padding: 8px;  
    }
}

@media screen and (max-width: 480px) {
    .message-table {
        font-size: 12px;  
    }

    .title-center {
        font-size: 20px;  
    }
}
</style>

<?php
    include('footer.php');
?>