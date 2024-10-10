<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>

    <link rel="stylesheet" href="signupStyles.css">
    <link rel="stylesheet" href="../home/navbar.css">

</head>
<body style="background-color: #fff">

    <div class="nav-bar">
        <div class="container">
            <nav>
                <div class="menu">
                    <div class="logo">
                        <a href="#">Jobs අඩවිය</a>
                    </div>
                        <ul>
                        <li><a href="../home/home.php">Home</a></li>
                        <li><a href="../Bupathifnl/aboutus.php">AboutUs</a></li>
                        <li><a href="../Dilsha/contact.php">ContactUs</a></li>
                        <li><a href="../Dilsha/find.php">FindAJob</a></li>
                        <li><a href="../Malith/postajob.php">PostAJob</a></li>
                        <li><a href="../Shamal/index.php">Internship</a></li>
                        <li><a href="../Shamal/Login.php">Dashboard</a></li>
                        <li><a href="../Bupathifnl/signup.php">SignUp</a></li>
                        <!--<li><a href="../Shamal/Login.php">Login</a></li>-->
                        <li><a href="../createUserProfile/create profile.php">CreateUserProfile</a></li>
                        </ul>
                </div>
            </nav>
        </div>
    </div>

<div style="padding-top: 200px;">
    <div class="login">
        <h1>Log In</h1>
    
            <form method="post" action="newLogin.php">

            <?php if(isset($_GET['error'])){?>
                <p class="error"> <?php echo $_GET['error'];?></p>
            <?php } ?>
    
                <label>User Name</label>
                <input type="text" name="uname" >
    
                <label>Password</label>
                <input type="text" name="password" >
    
                <br><br>
    
                <input type="submit" value="Login">
            </form>
                <p>Not have an account? <a href="../Bupathifnl/signup.php">Sign Up</a></p>
    </div>

</div>
        
</body>
</html>