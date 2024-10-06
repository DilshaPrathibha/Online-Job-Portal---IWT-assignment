<?php

require 'c_config.php';

$sql = "SELECT Title, jLocation, Employmenttype, SalaryRange, jDescription, Skills FROM jobs";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border='1'>";

    echo "<th> Job title </th>" .
        "<th> Location </th>" .
        "<th> Employment Type </th>" .
        "<th> Salaary Rnage </th>" .
        "<th> Description <br> (0 - 5)</th>" .
        "<th> Skills </th>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";

        echo "<td>" . $row["Title"] . "</td>" . 
             "<td>" . $row["jLocation"] . "</td>" . 
             "<td>" . $row["Employmenttype"] . "</td>" . 
             "<td>" . $row["SalaryRange"] . "</td>" . 
             "<td>" . $row["jDescription"] . "</td>" . 
             "<td>" . $row["Skills"] . "</td>";
       
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No Results";
}

$conn->close();
?>