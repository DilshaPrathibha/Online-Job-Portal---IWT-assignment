<!DOCTYPE html>
<html>
  <head>
    <title>jobs adaviya</title>
    <link rel="stylesheet" href="portal.css">

  </head>
  <body>
    <header>
      <div class="logo">
        <img src="logo.png" alt="Logo">
        <h1>JOBS Portal</h1>
    </div>
    
    <!-- Navigation Links -->
    <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Find a Job</a></li>
        <li><a href="#">Post a Job</a></li>
        <li><a href="#">Internship</a></li>
        <li><a href="#">Dashboard</a></li>
    </ul>

    <!-- Search, Signup and Login -->
    <div class="auth-buttons">
        <input type="text" placeholder="Search">
        <button type="button">SignUp</button>
        <button type="button">Login</button>
    </div>

    </header>

    <main>
      <img  id="userlogo" src="media/user-profile_5645043.png" alt="user logo" >
      <div id="signup">First Things First.Enter Data To Register </div>
      <br>
      <label>already have account? </label> <a href="#signin">sign in</a><br>
      <br>
      
      <div class="flex-container">
        <div class="input" >
          <form method = "post" action = "insert.php">
          
          <label>first name</label><br>
          <input type="text" class="input_field" name="fname">
      
        </div>
        <div class="input" >
          <label>last name</label><br>
          <input type="text" class="input_field" name="lname">
      

        </div>
      </div>

      <img src="media/4957136.jpg" alt="our emplooyees photo" style="float: right; width: 800px; height: auto; border-radius: 25px; margin: 40px; box-shadow: 3px 3px 5px;">

      <div class="flex-container">
        <div class="input" >
          
          <label>user name</label><br>
          <input type="text" class="input_field" name="uname">
      
        </div>
        <div class="input" >
          <label>age</label><br>
          <input type="text" class="input_field" name="age">
      

        </div>
      </div>

      <div class="flex-container">
        <div class="input" >
          
          <label>home town</label><br>
          <input type="text" class="input_field" name="town">
      
        </div>
        <div class="input" >
          <label>phone</label><br>
          <input type="text" class="input_field" name="phone">


      

        </div>
      </div>

      <div class="flex-container">
        <div class="input" >
          
          <label>password</label><br>
          <input type="password" class="input_field" name="pwd">
      
        </div>
        <div class="input" >
          <label>confirm password</label><br>
          <input type="password" class="input_field" name="pwdconfirm">
      

        </div>
      </div>

      <div class="input" >
        <label>register as</label><br>
        <select class="input_field"name="reg">
          <option value="recruter">recruter</option>
          <option value="job seeker">job seeker</option>
          <option value="Internship seeker">Internship seeker</option>
        </select>
      </div>

      <input type="checkbox" name="terms" value="agreed" ><label>i accept terms and conditions</label>
      <br>
      <label > email</label>
      <input type = "text" name = "email">
      
      <br>
      <br>
      <label id="display" style="color: red;"></label>

      <input type = "submit"   onclick = "validate(event)" id="register">Register</button>
</form>

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
  pwc = document.getElementById("pwdconfirm").value;
  tc = document.getElementById("terms").checked;
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

  if (tc==false)
          {
            emsg+= "must accept terms and conditions to continue. <br>";
          }

 if (emsg!=="")
 {
   document.getElementById("display").innerHTML=emsg;
   event.preventDefault();
 }


 };


    </script>

</form>

    </main>

    <footer>

    </footer>
  </body>
</html>