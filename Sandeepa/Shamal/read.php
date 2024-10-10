<html>
<head>
    <link rel="stylesheet" href="../Malith/readtable.css">
</head>    
<body>
    

<a href="http://localhost/jobsadawiya/Sandeepa/home/home.php"><button style="padding:8px 10px; margin: 8px 8px">
            Back to Home <i class='bx bx-home'></i></button></a>


<?php
require 'config.php'; // Database connection

// Fetch and display job details
$sqljob = "SELECT Degree, Previous_Experience, GPA, Timescale, Desition, Explanation, Reason_for_intern FROM sdeveloper";
$result_job = $con->query($sqljob);

if ($result_job) { 
    if ($result_job->num_rows > 0) {
        echo "<div class='table'><table border='1'>";
        
        // Add table headers
        echo "<tr>";
        echo "<th>Degree</th>" .
             "<th>Previous_Experience</th>" .
             "<th>GPA</th>" .
             "<th>Timescale</th>" .
             "<th>Desition</th>" .
             "<th>Explanation</th>" .
             "<th>Reason_for_intern</th>";
        echo "</tr>";
        
        while ($row = $result_job->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["Degree"] . "</td>" .
                 "<td>". $row["Previous_Experience"] . "</td>" .
                 "<td>". $row["GPA"] . "</td>" .
                 "<td>". $row["Timescale"] . "</td>" .
                 "<td>". $row["Desition"] . "</td>" .
                 "<td>". $row["Explanation"] . "</td>" .
                 "<td>". $row["Reason_for_intern"] . "</td>";
            echo "</tr>";
        }
        echo "</table></div><br>";
    } else {
        echo "No results found.";
    }
} else {
    echo "ERROR: " . $con->error;
}

// Fetch and display company details
$sqlcompany = "SELECT Id, Name, Email, Address, MobileNumber, EducationQualification FROM customercare1";
$result_company = $con->query($sqlcompany);

if ($result_company) { 
    if ($result_company->num_rows > 0) {
        echo "<div class='table'><table border='1'>";
        // Add table headers
        echo "<tr>";
        echo "<th>Id</th>" .
             "<th>Name</th>" .
             "<th>Email</th>" .
             "<th>Address</th>" .
             "<th>MobileNumber</th>" .
             "<th>EducationQualification</th>";
        echo "</tr>";
        
        while ($row = $result_company->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["Id"] . "</td>" .
                 "<td>". $row["Name"] . "</td>" .
                 "<td>". $row["Email"] . "</td>" .
                 "<td>". $row["Address"] . "</td>" .
                 "<td>". $row["MobileNumber"] . "</td>" .
                 "<td>". $row["EducationQualification"] . "</td>";
            echo "</tr>";
        }
        echo "</table></div><br>";
    } else {
        echo "No results found.";
    }
} else {
    echo "ERROR: " . $con->error;
}

// Close the connection
$con->close();
?>

<form method="post" action="updateintern.php">
    <button>Update</button>
</form>

<form method="post" action="deleteintern.php">
    <button>Delete</button>
</form>

</body>
</html>
