<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>post a job page</title>
        <link rel="stylesheet" href="../Malith/nav.css">
        <link rel="stylesheet" href="../Malith/style1.css">
    <!--link box icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet" />
    </head>
    <body style="background-color: #ffffff !important;">

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
                        <li><a href="../Shamal/user account page.php">Dashboard</a></li>
                        <li><a href="../Bupathifnl/signup.php">SignUp</a></li>
                        <li><a href="../Shamal/Login.php">Login</a></li>
                        <li><a href="../createUserProfile/create profile.php">CreateUserProfile</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>



        <?php

        require 'config.php';  
  
        ?>
        
    
         <diV id="con2" style="margin-left:45px; margin-top:20px;">
         <h1 >Post a job</h1>
            <img src="images/download.png">
            <p>Target your job to the right people</p>
            <a href="../Malith/package.php" style="text-decoration:none; "><button style="margin-top:20px; border-radius:30px">Upgrade to <br> <span style="font-size:15px;">Premium<span></button></a>
         </diV>
         <div id="con1">

        <header>Software Developer Internship</header>

        <form method="post"class="form"action="update.php">

            <label>1. Do you possess a Bachelor's degree / diploma in computer
                science / information technology or related field?</label>
            <input type="text" name="degree"><br>

            <label>2. Tell us a little bit about the project you have done previously. 
            </label>
            <textarea name="project"></textarea><br>

            <label>3. What is your current GPA?</label>
            <input type="text" name="gpa"><br>

            <label>4. If we decide to hire you, how soon can you join? </label>
            <textarea name="hire"></textarea><br>

            <label>5. Do you have your own laptop? If you were chosen are
                you able to bring that to work daily?</label>
                <input type="text" name="lap"><br>

            <label for="skills">6. Are you aware you need to commit to a minimum of 6
                month periods with the possibility to move to a permanent
                cadre?</label>
                <input type="text" name="permanant"><br>

            <label>7. Why do you want to do an internship at my jobs?</label>
            <textarea name="interest"></textarea>

        <header>Customer care assistant person</header>

        <label>Id</label>
        <input type="text"name="id"><br>
        <label>Name</label>
        <input type="text"name="name"><br>
        <label>Email</label>
        <input type="text"name="email"><br>
        <label>Address</label>
        <textarea name="address"></textarea>
        <label>Contact-Number</label>
        <input type="text"name="number"><br>
        <label>Educational Qualifications</label>
        <textarea name="education"></textarea><br>

        
        
        <button>Submit</button>
        
       
    </div>

</form>
</div>

    <!--footer-->
    <div>
    <div class="footer-bar">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>JobAdawiya</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Post a Job</a></li>
                        <li><a href="#">Find a Job</a></li>
                        <li><a href="#">Intership</a></li>
                        <li><a href="#">Sign up</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">payment options</a></li>
                        <li><a href="#">www.JobsAdawiya@gmail.com</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                            <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-linkedin'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-youtube'></i></a>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright <i class='bx bx-copyright'></i> MyAwesomeSite 2024. All rights reserved.</p>
</div>
    </body>
</html>