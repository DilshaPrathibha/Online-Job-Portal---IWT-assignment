<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>
    <a href="newLogout.php">Logout</a>

</body>
</html>

<?php
} else {
    header("Location: Login.php");
    exit();
}
?>
