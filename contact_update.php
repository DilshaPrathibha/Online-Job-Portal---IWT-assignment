<?php
require 'c_config.php';
include('navbar.php');


if (isset($_GET['status'])) {
    if ($_GET["status"] == "incompleteupdate") {
        echo "<script>alert('All fields required!');</script>";
    }
}


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
    echo "Invalid request!"; // ( no id caught )
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Messages</title>
    <style>
        legend {
            padding-top: 80px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        .contactForum {
            max-width: 600px;
            margin: auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        fieldset {
            border: none;
        }

        legend {
            font-size: 24px;
            color: #333;
        }

        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        textarea {
            height: 100px;
            resize: vertical;/
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        @media screen and (max-width: 768px) {
            .contactForum {
                width: 90%;
            }

            legend {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>

    <div class="contactForum">
        <fieldset>
            <legend><b>Update Message</b></legend>
            <form id="contacthistory" method="post" action="c_update.php">
                <input type="hidden" name="cid" value="<?= $cid ?>">
                <label for="name">Name:</label>
                <input type="text" name="cname" value="<?= $row['name'] ?>" placeholder="Name" required>

                <label for="email">Email:</label>
                <input type="email" name="cemail" value="<?= $row['email'] ?>" placeholder="Email">

                <label for="Phone">Phone Number:</label>
                <input type="text" name="cphone" value="<?= $row['phone'] ?>" placeholder="Phone Number">

                <label for="message">Message:</label>
                <textarea name="cmessage" placeholder="Your Message..." required><?= $row['message'] ?></textarea>

                <input type="submit" value="Update">
            </form>
        </fieldset>
    </div>

</body>

</html>


<?php 
    include('footer.php');
?>