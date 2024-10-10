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
                        <li><a href="../adminDashboard/index.php">Dashboard</a></li>
                        <li><a href="../Bupathifnl/signup.php">SignUp</a></li>
                        <!--<li><a href="../Shamal/Login.php">Login</a></li>-->
                        <li><a href="../createUserProfile/create profile.php">CreateUserProfile</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>



       
    
         <diV id="con2" style="margin-left:45px; margin-top:20px;">
         <h1 >Post a job</h1>
            <img src="images/download.png">
            <p>Target your job to the right people</p>
            <a href="../Malith/package.php" style="text-decoration:none; "><button style="margin-top:20px; border-radius:30px">Upgrade to <br> <span style="font-size:15px;">Premium<span></button></a>
         </diV>
         <div id="con1">
        <header>Job information</header>
        <form method="post"class="form"action=insert.php>
            <label>Job Title</label>
            <input type="text" name="jname" id="jname" placeholder="Graphic Designer"><br>
            <label>Job Location</label>
            <input type="text"name="jlocation" id="jlocation"  placeholder="Location"><br>
            <label>Employmnent Type</label>
            <select name="emptype" name="emptype" id="emptype" >
                <option>Full-time</option>
                <option>Part-time</option>
                <option>freelance</option>
            </select>
            <label>Salary Range</label>
            <input type="text"name="jsalary" id="jsalary"placeholder="60000-120000"><br>
           
            <label>Job Description</label>
            <textarea name="jdescription" id="jdescription" placeholder="Job Description "></textarea>
            <label for="skills">Skills</label>
            <input type="text" name="jskills" id="jskills" placeholder="Graphic, Social Media, Layout, Color">
        <header>Company Details</header>
        <label>Name</label>
        <input type="text"name="cname" id="cname" placeholder="Name"><br>
        <label>Employee</label>
        <input type="text"name="cemployee" id="cemployee" placeholder="100-200 "><br>
        <label>Location</label>
        <input type="text"name="clocation" id="clocation" placeholder="Location "><br>
        <label>About</label>
        <textarea name="cabout" id="cabout" placeholder="About"></textarea>
        <h3>Receive appliction</h3>
        <br>
        <label> <input type="radio" id="check">Email</label>
        <input type="text"name="cemail" id="cemail" placeholder="mail@example.com">
        <br>
        <label id="display" style=" color:red"></label><br>
        <button  type ="submit"   onclick="return checkdata()">Submit</button>
        <button>Reset</button>

        <script>
            function checkdata () {

                let  jt,jl,et,sr,jd,sk,nm,emp,lc,ab,rsve,eml,js,error;

             error = "";
                jt = document.getElementById("jname").value;
                jl = document.getElementById("jlocation").value;
                et = document.getElementById("emptype").value;
                js = document.getElementById("jsalary").value;
                jd = document.getElementById("jdescription").value;
                sk = document.getElementById("jskills").value;
                nm = document.getElementById("cname").value;
                emp = document.getElementById("cemployee").value;
                lc = document.getElementById("clocation").value;
                ab = document.getElementById("cabout").value;
                rsve = document.getElementById("check").checked;
                eml = document.getElementById("cemail").value;
               

            if (jt=="")
            {
               error += "please enter job title  <br>"; 
            }

            if (jl=="")
            {
               error += "please enter job location  <br>"; 
            }
            if (et=="")
            {
               error += "please enter job employement type  <br>"; 
            }
            if (js=="")
            {
               error += "please enter salery range <br>"; 
            }
            if (jd=="")
            {
               error += "please enter job discription  <br>"; 
            }
            if (sk=="")
            {
               error += "please enter job skills  <br>"; 
            }
            if (nm=="")
            {
               error += "please enter  company name  <br>"; 
            }
            if (lc=="")
            {
               error += "please enter job title  <br>"; 
            }
            if (emp=="")
            {
               error += "please enter company emplooyee details <br>"; 
            }
            if (ab=="")
            {
               error += "please enter about company details   <br>"; 
            }
           
            if (eml=="")
            {
               error += "please enter valid email adress <br>"; 
            }


            if(error!=="")
            {
                document.getElementById("display").innerHTML = error;
                return false;
            }

            return true;


            }
        </script>

       
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