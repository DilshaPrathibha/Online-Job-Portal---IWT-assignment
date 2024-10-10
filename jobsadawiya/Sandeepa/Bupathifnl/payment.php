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

        <header>Payment</header>

        <form id="paygtwy" method = "post"  action = "payinsert.php" onsubmit="return payval();" >

            <label>Email</label>
            <input type="text" name="email" id="email"><br>

            <label>Phone</label>
            <input type="text" id ="phone" class="pgtwayinpts" name="phone"><br>

            <label>NIC</label>
            <input type="text" id ="nic"class="pgtwayinpts" name="nic"><br>

            <select class="pgtwayinpts" id = "packege" name="packege" >
                <option disabled selected>select a  packege from this list</option>
                <option value = "1">1</option>
                <option value = "2">2</option>
                <option value = "3">3</option>
                <option value = "4">4</option>
            </select><br>

            <select class="pgtwayinpts"   name = "additional">
                <option disabled selected>select additional services if you want</option>
                <option value = "1">1</option>
                <option value = "2">2</option>
                <option value = "3">3</option>
                <option value = "4">4</option>
            </select><br>

            <select class="pgtwayinpts" name="bank" id = "bank">
                <option disabled selected>select your bank from this list</option>
                <option value = "BOC">BOC</option>
                <option value = "HNB">HNB</option>
                <option value = "COMERSIAL">COMERSIAL</option>
                <option value = "SDB">SDB</option>
                <option value = "UNION BANK">UNION BANK</option>
                <option value = "PEOPLES BANK">PEOPLES BANK</option>
            </select>

            <img src="media/logos.png" alt="payment methods" style=" max-width: 20%; height: auto; ">

            <input type="text" class="pgtwayinpts"placeholder="Card Holders Name " name = "hname" id = "hname">
            <input type="text" class="pgtwayinpts" placeholder="Card Number " name = "cno" id = "cno">
            <input type="text" class="pgtwayinpts" placeholder="expire date 2022-02-02 format " name = "expdte" id = "expdte">
            <input type="text" class="pgtwayinpts" placeholder="cvv  3 digits XXX" name="cv" id = "cv"><br>
            
            <label id="display" style="color: red;"></label>

            <button type="submit" id="purchase">Pay</button>

            

            <script >

                function payval(){ 
       
                 var mail,ph,id,pckge,bnk,hold,crdno,exp,cvv;
                 var emsg = "";
                  mail = document.getElementById("email").value;
                  ph = document.getElementById("phone").value;
                  id =document.getElementById("nic").value;
                  pckge =document.getElementById("packege").value;
                 crdno=document.getElementById("cno").value;
                  bnk =document.getElementById("bank").value;
                  hold =document.getElementById("hname").value;
                  exp =document.getElementById("expdte").value;
                  cvv =document.getElementById("cv").value;
       
       
                  
         if (mail==="")
         {
           emsg+= "email cannot be null. <br>";
       
         }
       
                  
         if (ph==="")
         {
           emsg+= "phone number cannot be null. <br>";
       
         }
       
                  
         if (id==="")
         {
           emsg+= "NIC cannot be null. <br>";
       
         }
       
         if (pckge==="")
         {
           emsg+= "must select a packege. <br>";
       
         }
       
         if (bnk==="")
         {
           emsg+= "must select a bank. <br>";
       
         }
       
                  
         if (crdno==="")
         {
           emsg+= "card no cannot be null. <br>";
       
         }
       
                  
         if (hold==="")
         {
           emsg+= "holder name cannot be null. <br>";
       
         }
       
                  
         if (exp==="")
         {
           emsg+= "expire date cannot be null. <br>";
       
         }
       
                  
         if (cvv==="")
         {
           emsg+= "CVV cannot be null. <br>";
       
         }
         //card validation with php backend?front end;
       
       
         document.getElementById("display").innerHTML=emsg;
       
       
       
         if (emsg !== "")
          {
           return false;
          }
         else
         {
           
           return true;
       
       
         }
       } 
       
               </script>
       

        
        
        
        
       
    </div>

</form>

<div  >
      <div  style="height: 60px; width: 250px; border-radius: 15px; box-shadow: 3px 3px 5px; background-color: rgb(120, 120, 120); font-size: xx-large; color: rgb(9, 9, 9);" >
      <label id="displayy" style="height: 60px; width: 240px;"></label><br>
      </div>
      
      
      <button style="height: 60px; width: 60px; border-radius: 15px; box-shadow: 3px 3px 5px; background-color: rgb(120, 120, 120);  "  onclick="display('0')">0</button>
      <button style="height: 60px; width: 60px; border-radius: 15px; box-shadow: 3px 3px 5px;background-color: rgb(120, 120, 120);"onclick="display('1')">1</button>
      <button  style="height: 60px; width: 60px; border-radius: 15px; box-shadow: 3px 3px 5px;background-color: rgb(120, 120, 120);"onclick="display('2')">2</button> 
      <button style="height: 60px; width: 60px; border-radius: 15px; box-shadow: 3px 3px 5px; background-color: rgb(120, 120, 120);" onclick="display('3')">3</button><br>
      <button style="height: 60px; width: 60px; border-radius: 15px; box-shadow: 3px 3px 5px; background-color: rgb(120, 120, 120);" onclick="display('4')">4</button>
      <button style="height: 60px; width: 60px; border-radius: 15px; box-shadow: 3px 3px 5px; background-color: rgb(120, 120, 120);" onclick="display('5')">5</button>
      <button style="height: 60px; width: 60px; border-radius: 15px; box-shadow: 3px 3px 5px; background-color: rgb(120, 120, 120);" onclick="display('6')">6</button> 
      <button style="height: 60px; width: 60px; border-radius: 15px; box-shadow: 3px 3px 5px; background-color: rgb(120, 120, 120);" onclick="display('7')">7</button><br>
      <button style="height: 60px; width: 60px; border-radius: 15px; box-shadow: 3px 3px 5px; background-color: rgb(120, 120, 120);" onclick="display('8')">8</button>
      <button style="height: 60px; width: 60px; border-radius: 15px; box-shadow: 3px 3px 5px; background-color: rgb(120, 120, 120);" onclick="display('9')">9</button>
      <button style="height: 60px; width: 60px; border-radius: 15px; box-shadow: 3px 3px 5px; background-color: rgb(120, 120, 120);" onclick="display('+')">+</button> 
      <button style="height: 60px; width: 60px; border-radius: 15px; box-shadow: 3px 3px 5px;background-color: rgb(255, 219, 13);" onclick="execute()">=</button><br>
      <button style="height: 60px; width: 60px; border-radius: 15px; box-shadow: 3px 3px 5px; background-color: rgb(120, 120, 120);" onclick="display('*')">X</button>
      <button style="height: 60px; width: 60px; border-radius: 15px; box-shadow: 3px 3px 5px; background-color: rgb(120, 120, 120);" onclick="display('/')">/</button>
      <button style="height: 60px; width: 60px; border-radius: 15px; box-shadow: 3px 3px 5px; background-color: rgb(120, 120, 120);" onclick="display('-')">-</button>
      <button style="height: 60px; width: 60px; border-radius: 15px; box-shadow: 3px 3px 5px; background-color: rgb(27, 114, 219);" onclick="reset()">R</button> <br>


      <script>
       let view = document.getElementById("displayy");
        function display (X){
          
          view.innerHTML += X;

        }

        function execute (){
          let i,r;

          i = document.getElementById("displayy").innerHTML;
          r = eval ( i);
          document.getElementById("displayy").innerHTML = r;
          
          
        }

        function reset ()
        {
          document.getElementById("displayy").innerHTML = "";

        }
      </script>
      
    </div>


</div>

    <!--footer-->
    <div>
    <div class="footer-bar" style="margin-top:80px">
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