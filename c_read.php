<?php
require 'c_config.php';

// status query parameters to show a message
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'deleteerror') {
        echo "<script>alert('Error deleting message. Please try again.');</script>";
    } elseif ($_GET["status"] == "updateerror") {
        echo "<script>alert('Error updating message. Please try again.');</script>";
    } elseif ($_GET["status"] == "incompleteupdate") {
        echo "<script>alert('All fields required!');</script>";
    }
}

$sql = "SELECT m_id, name, email, phone, message, time, status FROM contact_us";
$result = $conn->query($sql);

echo "<h1 class='title-center'>Message History</h1>";  // Centered heading with CSS class

if ($result->num_rows > 0) {
    echo "<table class='message-table'>";  // Apply CSS class

    echo "<thead><tr>" . 
        "<th> Date/Time (Last Updated) </th>" . 
        "<th> Message </th>" . 
        "<th> Status </th>" . 
        "<th> Actions </th></tr></thead><tbody>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";

        $messageTime = strtotime($row["time"]);
        $currentTime = time();
        $timeDiff = $currentTime - $messageTime;
        $recentThreshold = 86400;  // 24 hours

        if ($timeDiff <= $recentThreshold) {
            echo "<td>" . $row["time"] . "</td>" . 
                "<td>" . $row["message"] . "</td>" . 
                "<td>" . $row["status"] . "</td>";

            echo "<td>
                <form action='contact_update.php' method='POST' style='display:inline-block;'>
                    <input type='hidden' name='cid' value='" . $row["m_id"] . "'>
                    <input type='submit' value='Edit' class='edit-btn'>
                </form>
                <form action='c_delete.php' method='POST' onsubmit='return confirmDelete();' style='display:inline-block;'>
                    <input type='hidden' name='cid' value='" . $row["m_id"] . "'>
                    <input type='submit' value='Delete' class='delete-btn'>
                </form>
            </td>";
        }

        echo "</tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<p>No results found</p>";
}

$conn->close();
?>

<script>
function confirmDelete() {
    return confirm("Are you sure you want to delete this message?");
}
</script>


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
.edit-btn , .delete-btn{
    padding: 8px 16px;
    font-size: 14px;
    cursor: pointer;
    border: none;
    color: #fff;
    background-color: #4CAF50;  /* Green for both */
    border-radius: 4px;
    margin: 0 5px;  /* Spacing between buttons */
    min-width: 80px;  /* Ensures both buttons are the same width */
}

.edit-btn {
    background-color: #4CAF50;  /* Green */
}

.delete-btn {
    background-color: #f44336;  /* Red */
}


.edit-btn , .delete-btn {
    opacity: 0.9;  /* Hover effect */
}

/* 
.edit-btn, .action-btn [disabled] {
    background-color: #ccc;
    cursor: not-allowed;
}*/

</style>