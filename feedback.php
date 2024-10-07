<?php
    include('navbar.php');
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        .feedback-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .feedback-form h1 {
            text-align: center;
            margin-top: 80px;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .feedback-form form {
            display: flex;
            flex-direction: column;
        }

        .feedback-form label {
            margin: 10px 0 5px;
            font-size: 14px;
            color: #333;
        }

        .feedback-form input[type="text"],
        .feedback-form input[type="email"],
        .feedback-form textarea,
        .feedback-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            color: #333;
        }

        .feedback-form input[type="text"]:focus,
        .feedback-form input[type="email"]:focus,
        .feedback-form textarea:focus,
        .feedback-form select:focus {
            outline: none;
            border-color: #007bff;
        }

        .feedback-form .rating {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            direction: rtl;
        }

        .feedback-form .rating input {
            display: none;
        }

        .feedback-form .rating label {
            font-size: 24px;
            color: #ccc;
            cursor: pointer;
            transition: color 0.2s ease-in-out;
        }

        .feedback-form .rating label:hover,
        .feedback-form .rating label:hover~label {
            color: #007bff;
        }

        .feedback-form .rating input:checked~label {
            color: #007bff;
        }

        .feedback-form .rating input:checked+label,
        .feedback-form .rating input:checked+label~label {
            color: #007bff;
        }

        .feedback-form button {
            padding: 12px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
        }

        .feedback-form button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="feedback-form">
            <h1>Feedback</h1>

            <form class="feedback_Form" method="post" action="f_incert.php">
                <label for="name">Your Name*</label>
                <input type="text" id="name" name="fname" placeholder="Your Name" required>

                <label for="email">Your Email*</label>
                <input type="email" id="email" name="femail" placeholder="Your Email" required>

                <label for="type">Feedback Type</label>
                <select id="type" name="ftype">
                    <option value="general">General Feedback</option>
                    <option value="bug">Bug Report</option>
                    <option value="feature">Feature Request</option>
                </select>

                <label for="rating">Rate Your Experience</label>
                <div class="rating">
                        <input type="radio" id="star5" name="frating" value="5" />
                        <label for="star5" title="5 stars">★</label>
                        <input type="radio" id="star4" name="frating" value="4" />
                        <label for="star4" title="4 stars">★</label>
                        <input type="radio" id="star3" name="frating" value="3" />
                        <label for="star3" title="3 stars">★</label>
                        <input type="radio" id="star2" name="frating" value="2" />
                        <label for="star2" title="2 stars">★</label>
                        <input type="radio" id="star1" name="frating" value="1" />
                        <label for="star1" title="1 star">★</label>
                </div>

                <label for="message">Your Message</label>
                <textarea id="message" name="fmessage" rows="4" placeholder="Tell us about your experience or suggestions"></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>

<?php
    include('footer.php');
?>
