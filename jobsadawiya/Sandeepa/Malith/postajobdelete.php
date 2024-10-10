<!DOCTYPE html>
<html>
    <head>
        <title>
          Deletedetailpage
        </title>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="nav.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet" />
    </head>
    <body>
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
        
        <h1>Delete Your Details</h1>
    
        
         <div id="con1">
        <h3 id="pragh">Delete The Job Details</h3>
        <form method="post"action=delete.php>
            <label>Job Title</label>
            <input type="text" name="jname"placeholder="Graphic Designer"><br>
           
        <h3 id="pragh">Delete Company Details</h3>
            <label>Name</label>
            <input type="text"name="cname"placeholder="Name"><br>
            <br>
       <button onclick="return notify()">Delete</button>
       <button>Reset</button>

       <script>
       function notify () {
        confirm("do you wish to proceed !");
       }

       </script>
        
    </div>

</form>
</div>
<div class="footer-bar">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>JobAdawiya</h4>
                    <ul>
                        <li><a href="../home/home.php">Home</a></li>
                        <li><a href="../Bupathifnl/aboutus.php">About Us</a></li>
                        <li><a href="../Malith/postajob.php">Post a Job</a></li>
                        <li><a href="../Dilsha/find.php">Find a Job</a></li>
                        <li><a href="../Shamal/index.php">Intership</a></li>
                        <li><a href="../Bupathifnl/signup.php">Sign up</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="../Dilsha/faq.php">FAQ</a></li>
                        <li><a href="../Dilsha/contact.php">Contact Us</a></li>
                        <li><a href="../Malith/package.php">payment options</a></li>
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
