<!DOCTYPE html>
<html>
  <head>
    <title>jobs adaviya</title>
    <link rel="stylesheet" href="../Dilsha/css/contact.css">
    <link rel="stylesheet" href="portal.css">
    <link rel="stylesheet" href="../home/navbar.css">
    
    <!--Boxing CSS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'
     rel="stylesheet" />

  </head>
  <body main style="background-image: url('media/2.jpg'); background-size: cover;">
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


  <div class="content" style="padding-top:100px;">
    <main>
      <div id="signup" style="margin-left:45px;">First Things First, Enter Data To <span>Sign Up</span> </div>
      <br>
      <img  id="userlogo" src="media/signup.png" alt="user logo" style="margin-left:45px;">
      <br>
      <label>already have an account? </label> <a href="../Shamal/Login.php">LogIn</a><br>
      <br>
      
      <div class="flex-container" style="margin-left:45px; float:left; margin-left:0px;">

      <div>
      </main>

      <!--<img src="media/11.jpg" alt="our emplooyees photo" style="float: right; width: 800px; height: auto; border-radius: 12px; margin: 100px 40px;">-->

      <!--<form style="margin-top:80px;">-->
      
        

      

      <div class="contact">
        
        <div class="contactForum" style="width:100%;">
            
                <dev><b>Sign-Up</b></dev>
                <form class="contactForm" method="post" action="insert.php">
                    <input type="text" class="input_field" id="fname" name="fname" placeholder="Enter first name" > <br>
                    <input type="text" class="input_field" id="lname" name="lname" placeholder="Enter last name" > <br>
                    <input type="text" class="input_field" id="uname" name="uname" placeholder="Give User name" > <br>
                    <input type="text" class="input_field" id="age" name="age" placeholder="Enter your age" > <br>
                    <input type="text" class="input_field" id="town" name="town" placeholder="Enter home town" > <br>
                    <input type="text" class="input_field" id="phone" name="phone" placeholder="Enter contact number" > <br>
                    <input type="password" class="input_field" id="pwd" name="password" placeholder="Give password" > <br>
                    <input type="password" class="input_field" id="pwdc" name="pwdc" placeholder="re enter password" > <br>
                    
                    <br>
                    <label id="display" style="color: red;"></label>

                    <input type="submit" value="Register" onclick="validate(event)" id="register" style="color:#090909">

                  



                    <script>

                        let fn  ,ln , un , ag,  ht,email,pw,tc,ph,pwc;
                        
                        function validate (){
                         
                          fn = document.getElementById("fname").value;
                          ln = document.getElementById("lname").value;
                          un = document.getElementById("uname").value;
                          ag = document.getElementById("age").value;
                          ht = document.getElementById("town").value;
                          ph = document.getElementById("phone").value;
                          pw = document.getElementById("pwd").value;
                          pwc = document.getElementById("pwdc").value;
                          
                          let emsg = "";
                        
                          
                        
                          if (fn==="")
                          {
                            emsg+= "First name cannot be null. <br>";
                        
                          }
                        
                          if (ln==="")
                            {
                              emsg+= "Last  name cannot be null. <br>";
                          
                            }
                             if (un==="")
                          {
                            emsg+= "User name cannot be null. <br>";
                        
                          }
                        
                            
                          if (ag===""|| isNaN(ag))
                              {
                                emsg+= "Age cannot be null or not a number. <br>";
                            
                              }
                        
                          if (ph===""|| isNaN(ph))
                                {
                                  emsg+= "Password cannot be null or not a number cannot be null. <br>"; 
                              
                                }
                                
                        
                          if (pw!==pwc)
                                  {
                                    emsg+= "Password doesnt match. <br>";
                                
                                  } 
                        
                          
                        
                         if (emsg!=="")
                         {
                           document.getElementById("display").innerHTML=emsg;
                           event.preventDefault();
                         }
                        
                        
                         };
                        
                        
                            </script>
                </form>
            
        </div>
    </div>

<div class="footer-bar" style="margin-top:300px;" >
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