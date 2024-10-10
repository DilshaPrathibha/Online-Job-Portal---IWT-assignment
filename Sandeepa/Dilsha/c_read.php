<?php
require 'c_config.php';
include('navbar.php');

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

echo "<h1 class='title-center'>Message History</h1>";

if ($result->num_rows > 0) {
    echo "<table class='message-table'>";

    echo "<thead><tr>" .
        "<th> Date/Time (Last Updated) </th>" .
        "<th> Message </th>" .
        "<th> Status </th>" .
        "<th colspan='2'>Actions</th></tr></thead><tbody>";

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
                </td>
                <td>
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

    .message-table th,
    .message-table td {
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

    .edit-btn,
    .delete-btn {
        padding: 8px 16px;
        font-size: 14px;
        cursor: pointer;
        border: none;
        color: #fff;
        background-color: #4CAF50;
        border-radius: 4px;
        margin: 0 5px;
        min-width: 80px;
    }

    .edit-btn {
        background-color: #4CAF50;
    }

    .delete-btn {
        background-color: #f44336;
    }

    .edit-btn,
    .delete-btn {
        opacity: 0.9;
    }
</style>


<?php
    include('footer.php');
?>