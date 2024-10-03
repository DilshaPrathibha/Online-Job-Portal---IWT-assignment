<?php /* */
require 'c_config.php';

if (isset($_POST['cid'])) {
    $cid = $_POST['cid'];

    // Fetch the record
    $sql = "SELECT * FROM contact_us WHERE m_id = '$cid'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No record found!";
        exit;
    }
} else {
    echo "Invalid request!"; // ( no id catched )
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Messages</title>
</head>

<body>

    <div class="contactForum">
        <fieldset>
            <legend><b>Contact Us</b></legend>
            <form id="contacthistory" method="post" action="c_update.php">
                <input type="hidden" name="cid" value="<?= $cid ?>">
                <input type="text" name="cname" value="<?= $row['name'] ?>" placeholder="Name" required> <br>
                <input type="email" name="cemail" value="<?= $row['email'] ?>" placeholder="Email"> <br>
                <input type="text" name="cphone" value="<?= $row['phone'] ?>" placeholder="Phone Number"> <br>
                <textarea name="cmessage" placeholder="Your Message..." required><?= $row['message'] ?></textarea> <br><br>
                <input type="submit" value="Update">
            </form>
        </fieldset>
    </div>

</body>

</html>