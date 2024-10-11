<html>
<head>
    <link rel="stylesheet" href="readtable.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet" />
</head>    
<body>    




<div class="btn" style="display: flex;">

    <a href="http://localhost/jobsadawiya/Sandeepa/Shamal/user_account_page.php">
    <button style="margin-right: 5px;">Back</button></a>

    <form method="post" action="postajobupdate.php" >
    <button style="margin-right: 5px; background-color: green;">Update</button>
    </form>
    
    <form method="post" action="postajobdelete.php">
    <button style="margin-right: 5px; background-color: red;">Delete</button>
    </form>

</div>


<?php
require 'config.php'; // Database connection

// Fetch and display job details
$sqljob = "SELECT Title, jLocation, Employmenttype, SalaryRange, jDescription, Skills FROM jobs";
$result_job = $con->query($sqljob);

if ($result_job) { 
    if ($result_job->num_rows > 0) {
        echo "<div class='table'><table border='1'>";
        
        // Add table headers
        echo "<tr>";
        echo "<th>Job Title</th>" .
             "<th>Location</th>" .
             "<th>Employment Type</th>" .
             "<th>Salary Range</th>" .
             "<th>Job Description</th>" .
             "<th>Skills</th>";
        echo "</tr>";
        
        while ($row = $result_job->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["Title"] . "</td>" .
                 "<td>". $row["jLocation"] . "</td>" .
                 "<td>". $row["Employmenttype"] . "</td>" .
                 "<td>". $row["SalaryRange"] . "</td>" .
                 "<td>". $row["jDescription"] . "</td>" .
                 "<td>". $row["Skills"] . "</td>";
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
$sqlcompany = "SELECT cName, Employe, cLocation, About, Email FROM company";
$result_company = $con->query($sqlcompany);

if ($result_company) { 
    if ($result_company->num_rows > 0) {
        echo "<div class='table'><table border='1'>";
        // Add table headers
        echo "<tr>";
        echo "<th>Company Name</th>" .
             "<th>Employee</th>" .
             "<th>Location</th>" .
             "<th>About</th>" .
             "<th>Email</th>";
        echo "</tr>";
        
        while ($row = $result_company->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["cName"] . "</td>" .
                 "<td>". $row["Employe"] . "</td>" .
                 "<td>". $row["cLocation"] . "</td>" .
                 "<td>". $row["About"] . "</td>" .
                 "<td>". $row["Email"] . "</td>";
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



</body>
</html>
