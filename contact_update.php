<?php
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
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9; /* Light background for the entire page */
            margin: 0;
            padding: 20px; /* Padding for the body */
        }

        .contactForum {
            max-width: 600px; /* Limit the width of the form */
            margin: auto; /* Center the form */
            background-color: white; /* White background for the form */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Shadow for the form */
            padding: 20px; /* Padding inside the form */
        }

        fieldset {
            border: none; /* Remove default border */
        }

        legend {
            font-size: 24px; /* Larger font for the legend */
            color: #333; /* Dark color for the text */
        }

        label {
            font-weight: bold; /* Bold labels */
            display: block; /* Make labels block elements */
            margin: 10px 0 5px; /* Margin for spacing */
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%; /* Full width inputs */
            padding: 10px; /* Padding inside inputs */
            margin-bottom: 15px; /* Margin below inputs */
            border: 1px solid #ddd; /* Light border */
            border-radius: 4px; /* Rounded corners */
            font-size: 16px; /* Font size */
        }

        textarea {
            height: 100px; /* Height for the textarea */
            resize: vertical; /* Allow vertical resizing */
        }

        input[type="submit"] {
            background-color: #4CAF50; /* Green background */
            color: white; /* White text */
            border: none; /* No border */
            padding: 10px 15px; /* Padding inside button */
            border-radius: 4px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor on hover */
            font-size: 16px; /* Font size */
        }

        input[type="submit"]:hover {
            background-color: #45a049; /* Darker green on hover */
        }

        @media screen and (max-width: 768px) {
            .contactForum {
                width: 90%; /* Full width on small screens */
            }

            legend {
                font-size: 20px; /* Smaller legend font for mobile */
            }
        }
    </style>
</head>

<body>

    <div class="contactForum">
        <fieldset>
            <legend><b>Contact Us</b></legend>
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
