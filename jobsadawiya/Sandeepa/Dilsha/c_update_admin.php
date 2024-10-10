<?php
require 'c_config.php';
include('navbar.php');

$sql = "SELECT m_id, name, email, phone, message, time, status FROM contact_us";
$result = $conn->query($sql);

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'deleteerror') {
        echo "<script>alert('Error deleting message. Please try again.');</script>";
    } 
}

echo "<h1 class='title-center'> <br> Message Management</h1>";  

if ($result->num_rows > 0) {
    echo "<table class='message-table'>";  

    echo "<thead><tr>" . 
    "<th> Message ID </th>" . 
    "<th> Customer Name </th>" . 
    "<th> Email </th>" . 
    "<th> Phone Number </th>" . 
    "<th> Message </th>" . 
    "<th> Date/Time (Last Updated) </th>" . 
    "<th> Status </th>" . 
    "<th> Actions </th></tr></thead><tbody>";

    while ($row = $result->fetch_assoc()) { // get rows one by one 

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

$conn->close(); 
?>

<script>

    // Confirm message deletion
    function confirmDelete() {
        return confirm("Are you sure you want to delete this message?");
    }
</script>


<style>
.title-center {
    padding-top: 80px;
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


.respond-btn , .pending-btn, .delete-btn{
    min-width: 100px; 
    display: inline-block; 
    text-align: center;
    padding: 8px 16px;
    font-size: 14px;
    cursor: pointer;
    border: none;
    color: #fff;
    border-radius: 4px;
    margin: 0 5px; 
}

.respond-btn {
    background-color: #4CAF50; 
}

.pending-btn{
    background-color: #2196F3; 
}

.delete-btn {
    background-color: #f44336; 
}

.respond-btn , .pending-btn, .delete-btn {
    opacity: 0.9;  
}


@media screen and (max-width: 768px) {
    .message-table {
        width: 100%;  
        font-size: 14px; 
    }
    
    .message-table th, .message-table td {
        padding: 8px;  
    }
    
    .respond-btn, .pending-btn, .delete-btn {
        min-width: 80px; 
        padding: 6px 12px; 
    }
}

@media screen and (max-width: 480px) {
    .message-table {
        font-size: 12px;  
    }

    .respond-btn, .pending-btn, .delete-btn {
        font-size: 12px;  
        padding: 5px 10px;  
    }

    .title-center {
        font-size: 20px;  
    }
}
</style>
