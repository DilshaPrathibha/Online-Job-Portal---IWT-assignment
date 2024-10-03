<?php
require 'c_config.php';

//  status query parameters to show a message
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

if ($result->num_rows > 0) {

    echo "<table border='1'>";   /* '' */

    echo "<th> Date/Time <br> (Last Updated) </th>" .
        "<th> Message </th>" .
        "<th> Customer Details </th>" .
        "<th> Status </th>";

    while ($row = $result->fetch_assoc()) { /* get rows one by one */

        echo "<tr>";

        echo "<td>" . $row["time"] . "</td>" .
            "<td>" . $row["message"] . "</td>" .
            "<td>" . $row["name"] . "<br>" . $row["email"] . "<br>" . $row["phone"] . "</td>" .
            "<td>" . $row["status"] . "</td>";

        echo "<td><form action='contact_update.php' method='POST'>
    <input type='hidden' name='cid' value='" . $row["m_id"] . "'>
    <input type='submit' value='Edit'></form></td>";

        echo "<td><form action='c_delete.php' method='POST' onsubmit='return confirmDelete();'>
    <input type='hidden' name='cid' value='" . $row["m_id"] . "'> 
    <input type='submit' value='Delete'> 
    </form></td>"; /* input type='hidden'*/

        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No Results";
}

$conn->close(); // Close the connection
?>

<script>
    function confirmDelete() {
        return confirm("Are sure you want to delete this message?");
    }
</script>