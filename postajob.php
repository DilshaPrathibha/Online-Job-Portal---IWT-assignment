<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>post a job page</title>
        <link rel="stylesheet" href="nav.css">
        <link rel="stylesheet" href="style1.css">
    <!--link box icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet" />
    </head>
    <body>
    <div class="nav-bar">
        <div class="container">
            <nav>
                <div class="menu">
                    <div class="logo">
                        <a href="#">Jobs Adawiya</a>
                    </div>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">AboutUs</a></li>
                        <li><a href="#">ContactUs</a></li>
                        <li><a href="#">FindAJob</a></li>
                        <li><a href="#">PostAJob</a></li>
                        <li><a href="#">Internship</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">SignUp</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">CreateUserProfile</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>



        <?php

        require 'config.php';  
  
        ?>
        
    
         <diV id="con2">
         <h1>Post a job</h1>
            <img src="images/cute.jpg">
            <p>Target your job to the right people</p>
            <a href="https//www.google.com">Upgrade to <br>Premium</a>
         </diV>
         <div id="con1">
        <header>Job information</header>
        <form method="post"class="form"action=insert.php>
            <label>Job Title</label>
            <input type="text" name="jname"placeholder="Graphic Designer"><br>
            <label>Job Location</label>
            <input type="text"name="jlocation"placeholder="Location"><br>
            <label>Employmnent Type</label>
            <select name="emptype">
                <option>Full-time</option>
                <option>Part-time</option>
                <option>freelance</option>
            </select>
            <label>Salary Range</label>
            <input type="text"name="jsalary"placeholder="60000-120000"><br>
            <div class="checkbox">            
            <label><input type="checkbox">net</label>
            <label> <input type="checkbox">gross</label><br>
            </div>
            <label>Job Description</label>
            <textarea name="jdescription"placeholder="Job Description "></textarea>
            <label for="skills">Skills</label>
            <input type="text" id="skills" name="jskills" placeholder="Graphic, Social Media, Layout, Color">
        <header>Company Details</header>
        <label>Name</label>
        <input type="text"name="cname"placeholder="Name"><br>
        <label>Employee</label>
        <input type="text"name="cemployee"placeholder="100-200 "><br>
        <label>Location</label>
        <input type="text"name="clocation"placeholder="Location "><br>
        <label>About</label>
        <textarea name="cabout"placeholder="About"></textarea>
        <h3>Receive appliction</h3>
        <br>
        <label> <input type="radio">Email</label>
        <input type="text"name="cemail"placeholder="mail@example.com">
        <br>
        
        <button>Submit</button>
        <button>Reset</button>

       
    </div>

</form>
</div>

    <!--footer-->
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