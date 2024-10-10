<?php

    session_start();

    include("indexSign.php");

    if($_SERVER['REQUEST_METHOD']== "POST")
    {
        $firstname=$_POST['fname'];
        $lastname=$_POST['lname'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $password=$_POST['pwd'];
        $Pnumber=$_POST['number'];
        $address=$_POST['address'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
       {
            $query="INSERT INTO loginform (Firstname, Lastname, Email, Gender, Password, PhoneNumber, Address)
            VALUES ('$firstname', '$lastname', '$email', '$gender', '$password', '$Pnumber', '$address')";

            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert ('Register Successful') </script>";
         
        } 

        else
        {
            echo "<script type='text/javascript'> alert ('Enter valid information') </script>";
        }

    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>

        <link rel="stylesheet" href="signupStyles.css">

    </head>
    <body>
        <div class="signup">
            <h1>Sign Up</h1>
            <h3>It's free and only take a minute</h3>
            <form method="post">
                <label>First Name:</label>
                <input type="text" name="fname" required>

                <label>Last Name</label>
                <input type="text" name="lname" required>

                <label>Email</label>
                <input type="Email" name="email" required>

                <label>Gender</label>
                <input type="text" name="gender" required>

                <label>Password</label>
                <input type="text" name="pwd" required>

                <label>Phone Number</label>
                <input type="text" name="number" required>

                <label>Address</label>
                <input type="text" name="address" required>

                <br><br>

                <input type="submit" name="" value="Submit">
            </form>

                <p>By clicking the Sign Up button, you agree to our<br>
                <a href="#Privacy Policy">Privacy Policy</a> and
                <a href="#Terms and Conditions">Terms and Conditions.</a></p>
                
                <p>Already have an account? <a href="Login.php">Login Here</a></p>
            </div>
    </body>
</html>