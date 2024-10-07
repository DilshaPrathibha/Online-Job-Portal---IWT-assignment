<?php
require 'c_config.php';

$sql = "SELECT m_id, name, email, phone, message, time, status FROM contact_us";
$result = $conn->query($sql);

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'deleteerror') {
        echo "<script>alert('Error deleting message. Please try again.');</script>";
    } 
}

echo "<h1 class='title-center'>Message Management</h1>";  // Centered heading with CSS class

if ($result->num_rows > 0) {
    echo "<table class='message-table'>";  // Apply CSS class

    echo "<thead><tr>" . 
    "<th> Message ID </th>" . 
    "<th> Customer Name </th>" . 
    "<th> Email </th>" . 
    "<th> Phone Number </th>" . 
    "<th> Message </th>" . 
    "<th> Date/Time (Last Updated) </th>" . 
    "<th> Status </th>" . 
    "<th> Actions </th></tr></thead><tbody>";

    while ($row = $result->fetch_assoc()) { /* get rows one by one */

        echo "<tr>";
        echo "<td>" . $row["m_id"] . "</td>" . 
             "<td>" . $row["name"] . "</td>" . 
             "<td>" . $row["email"] . "</td>" . 
             "<td>" . $row["phone"] . "</td>" . 
             "<td>" . $row["message"] . "</td>" . 
             "<td>" . $row["time"] . "</td>";

        if ($row["status"] == 'responded') {
            echo "<td>
                    <form action='c_pending_admin.php' method='POST' style='display:inline-block;'>
                        <input type='hidden' name='cid' value='" . $row["m_id"] . "'>
                        <input type='hidden' name='status' value='pending'>
                        <input type='submit' value='Responded' class='respond-btn'>
                    </form>
                  </td>";
        } else {
            echo "<td>
                    <form action='c_respond_admin.php' method='POST' style='display:inline-block;'>
                        <input type='hidden' name='cid' value='" . $row["m_id"] . "'>
                        <input type='hidden' name='status' value='responded'>
                        <input type='submit' value='Pending' class='pending-btn'>
                    </form>
                  </td>";
        }

        echo "<td><form action='c_delete_admin.php' method='POST' onsubmit='return confirmDelete();' style='display:inline-block;'>
                <input type='hidden' name='cid' value='" . $row["m_id"] . "'> 
                <input type='submit' value='Delete' class='delete-btn'> 
              </form></td>";
    
        echo "</tr>";
    }

    echo "</tbody></table>";
} else {
    echo "<p>No Results</p>";
}

$conn->close(); // Close the connection
?>

<script>
    // Confirm marking as responded
    function confirmresponded() {
        return confirm("Are you sure you want to mark this message as pending?");
    }

    // Confirm message deletion
    function confirmDelete() {
        return confirm("Are you sure you want to delete this message?");
    }
</script>

<!-- CSS Styling -->
<style>
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

/* Action buttons style */
.respond-btn , .pending-btn, .delete-btn{
    min-width: 100px; /* Ensures all buttons are at least 100px wide */
    display: inline-block; /* Ensures buttons stay in line */
    text-align: center;
    padding: 8px 16px;
    font-size: 14px;
    cursor: pointer;
    border: none;
    color: #fff;
    border-radius: 4px;
    margin: 0 5px;  /* Spacing between buttons */
}

.respond-btn {
    background-color: #4CAF50;  /* Green */
}

.pending-btn{
    background-color: #2196F3;  /* Blue */
}

.delete-btn {
    background-color: #f44336;  /* Red */
}

.respond-btn , .pending-btn, .delete-btn {
    opacity: 0.9;  /* Hover effect */
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
    
    .respond-btn, .pending-btn, .delete-btn {
        min-width: 80px; /* Reduce button width slightly for smaller screens */
        padding: 6px 12px;  /* Adjust padding */
    }
}

@media screen and (max-width: 480px) {
    .message-table {
        font-size: 12px;  /* Even smaller font size for mobile */
    }

    .respond-btn, .pending-btn, .delete-btn {
        font-size: 12px;  /* Smaller button font size */
        padding: 5px 10px;  /* Smaller button padding */
    }

    .title-center {
        font-size: 20px;  /* Smaller heading font for mobile */
    }
}
</style>
