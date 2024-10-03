<?php
require 'c_config.php';

$sql = "SELECT m_id, name, email, phone, message, time, status FROM contact_us";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";   /* '' */

    echo "<th> Message ID </th>" .
    "<th> Customer Name </th>" .
    "<th> Email  </th>" .
    "<th> Phone Number </th>" .
    "<th> Message </th>" .
    "<th> Date/Time <br> (Last Updated) </th>" .
    "<th> Status </th>" ;

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
                        <form action='c_pending_admin.php' method='POST' onsubmit='return confirmresponded();'>
                            <input type='hidden' name='cid' value='" . $row["m_id"] . "'>
                            <input type='hidden' name='status' value='pending'>
                            <input type='submit' value='Responded'>
                        </form>
                      </td>";
            } else {
                echo "<td>
                        <form action='c_respond_admin.php' method='POST'>
                            <input type='hidden' name='cid' value='" . $row["m_id"] . "'>
                            <input type='hidden' name='status' value='responded'>
                            <input type='submit' value='Pending'>
                        </form>
                      </td>";
            }

            echo "<td><form action='c_delete.php' method='POST' onsubmit='return confirmDelete();'>
    <input type='hidden' name='cid' value='" . $row["m_id"] . "'> 
    <input type='submit' value='Delete'> 
    </form></td>";
    
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No Results";
}

$conn->close(); // Close the connection
?>

<script>
    // confirm as responded
    function confirmresponded() {
        return confirm("Are sure you want to mark this message as pending?");
    }
</script>
