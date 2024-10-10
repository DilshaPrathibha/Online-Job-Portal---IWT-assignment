<?php
session_start();
require "config.php";

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['username']) && isset($_POST['spassword'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['spassword']);

    if (empty($uname)) {
        header("Location: Login.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: Login.php?error=Password is required");
        exit();
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM users WHERE username = ? AND spassword = ?");
    $stmt->bind_param("ss", $uname, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        
        if ($row['username'] === "sandy" && $row['spassword'] === '1212') {
            echo "Logged In!";
            $_SESSION['user_name'] = $row['username'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: http://localhost/jobsadawiya/Sandeepa/adminDashboard/index.php");
            exit();
        } else if ($row['username'] === $uname && $row['spassword'] === $pass) {
            echo "Logged In!";
            $_SESSION['user_name'] = $row['username'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: user_account_page.php");
            exit();
        } else {
            header("Location: Login.php?error=Incorrect User Name or Password");
            exit();
        }
    } else {
        header("Location: Login.php?error=Incorrect User Name or Password");
        exit();
    }
} else {
    header("Location: Login.php?error=Please fill in both fields");
    exit();
}

?>
