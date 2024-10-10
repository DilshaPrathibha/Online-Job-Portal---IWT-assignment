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
                        <li><a href="../Shamal/Login.php">Dashboard</a></li>
                        <li><a href="../Bupathifnl/signup.php">SignUp</a></li>
                        <!--<li><a href="../Shamal/Login.php">Login</a></li>-->
                        <li><a href="../createUserProfile/create profile.php">CreateUserProfile</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>



       
    
         <div id="con1">

        <header>Software Developer Internship</header>

        <form method="post"class="form"action=insert.php>

            <label>1. Do you possess a Bachelor's degree / diploma in computer
                science / information technology or related field?</label>
            <input type="text" name="degree"  id="degree" ><br>

            <label>2. Tell us a little bit about the project you have done previously. 
            </label>
            <textarea name="project" id="project"></textarea><br>

            <label>3. What is your current GPA?</label>
            <input type="text" name="gpa" id="gpa"><br>

            <label>4. If we decide to hire you, how soon can you join? </label>
            <textarea name="hire" name="hire"  id="hire" > </textarea><br>

            <label>5. Do you have your own laptop? If you were chosen are
                you able to bring that to work daily?</label>
                <input type="text" name="lap" id="lap"><br>

            <label for="skills">6. Are you aware you need to commit to a minimum of 6
                month periods with the possibility to move to a permanent
                cadre?</label>
                <input type="text" name="permanant"  id="permanant"><br>

            <label>7. Why do you want to do an internship at my jobs?</label>
            <textarea name="interest" id="interest"></textarea>

        <header>Customer care assistant person</header>

        <label>Id</label>
        <input type="text"name="id" id="id"><br>
        <label>Name</label>
        <input type="text"name="name" id="name" ><br>
        <label>Email</label>
        <input type="text"name="email" id="email"><br>
        <label>Address</label>
        <textarea name="address"  id="address" ></textarea>
        <label>Contact-Number</label>
        <input type="text"name="number" id="number"><br>
        <label>Educational Qualifications</label>
        <textarea name="education" id="education" ></textarea><br>


        <label id="display" style="color: red;"></label><br>
        
        <button  type="submit" onclick=" return vali()">Submit</button>


        <script>

        function vali (){    
            let dg,pg,gp,hr,lp,per,int,i,nm,eml,add,num,edu;
     
            let err = "";

        dg =    document.getElementById("degree").value;
        pg =    document.getElementById("project").value;
        gp =    document.getElementById("gpa").value;
        hr =    document.getElementById("hire").value;
        lp =    document.getElementById("lap").value;
        per =   document.getElementById("permanant").value;
        int =   document.getElementById("interest").value;
        i =    document.getElementById("id").value;
        nm =   document.getElementById("name").value;
        eml =   document.getElementById("email").value;
        add =    document.getElementById("address").value;
        num =    document.getElementById("number").value;
        edu =   document.getElementById("education").value;

        if(dg=="")
        {
          err += "please enter valid  degree <br>";   
        }

        if(pg=="")
        {
          err += "please enter valid  project <br>";   
        }

        if(gp=="")
        {
          err += "please enter valid  gpa <br>";   
        }
        if(hr=="")
        {
          err += "please enter valid  hire <br>";   
        }
        if(lp=="")
        {
          err += "please enter valid  lap <br>";   
        }
        if(per=="")
        {
          err += "please enter valid  permanent <br> ";   
        }
        if(int=="")
        {
          err += "please enter valid  intrest <br>";   
        }
        if(i=="")
        {
          err += "please enter valid  NIC <br>";   
        }
        if(nm=="")
        {
          err += "please enter valid  name  <br>";   
        }
        if(eml=="")
        {
          err += "please enter valid  email <br>";   
        }
        if(add=="")
        {
          err += "please enter valid  address <br>";   
        }
        if(num=="")
        {
          err += "please enter valid  number <br>";   
        }
        if(edu=="")
        {
          err += "please enter valid  education <br>";   
        }

        if(err!=="")
        {
            document.getElementById("display").innerHTML= err;
            return false
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