<?php

/* read by admin */
require 'c_config.php';
include('navbar.php');


$sql = "SELECT id, name, email, type, rating, message, time FROM feedback";
$result = $conn->query($sql);

echo "<h1 class='title-center'>Feedbacks</h1>";  // Centered heading with CSS class

if ($result->num_rows > 0) {

    echo "<table class='message-table'>";   // Apply CSS class

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

<!-- CSS Styling -->
<style>
    body{
        margin-top: 90px;
    }
    /* Style for centering the title */
.title-center {
    text-align: center;
    font-size: 24px;
    margin-top: 20px;
    color: #333;
}

/* Style for the table */
.message-table {
    width: 80%; /* Reduce the width of the table */
    margin: 20px auto; /* Center the table */
    border-collapse: collapse;
    font-size: 16px;
    text-align: left;
}

.message-table thead {
    background-color: #f2f2f2;
}

.message-table th, .message-table td {
    padding: 10px 12px; /* Reduced padding */
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
        width: 100%;  /* Full width for mobile */
        font-size: 14px;  /* Smaller font size */
    }
    
    .message-table th, .message-table td {
        padding: 8px;  /* Adjusted padding */
    }
}

@media screen and (max-width: 480px) {
    .message-table {
        font-size: 12px;  /* Even smaller font size for mobile */
    }

    .title-center {
        font-size: 20px;  /* Smaller heading font for mobile */
    }
}
</style>

<?php
    include('footer.php');
?>