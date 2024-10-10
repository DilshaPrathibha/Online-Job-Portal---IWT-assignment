<?php
session_start();
require "config.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: Login.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: Login.php?error=Password is required");
        exit();
    }

    $sql = "SELECT * FROM users WHERE username='$uname' AND spassword='$pass'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        
        if ($row['user_name'] === "sandy" && $row['password'] === '1212') {
            echo "Logged In!";
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: http://localhost/jobsadawiya/Sandeepa/adminDashboard/index.php");
            exit();

        } else if ($row['user_name'] === $uname && $row['password'] === $pass) {
            echo "Logged In!";
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: http://localhost/jobsadawiya/Sandeepa/Shamal/user_account_page.php");
            exit();
        } else {
            header("Location: Login.php?error=Incorrect User Name or Password");
            exit();
        }
    } else {
        header("Location: Login.php?error=Incorrect User Name or Password");
        exit();
    }
}
?>
