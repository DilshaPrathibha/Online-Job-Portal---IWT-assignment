<!DOCTYPE html>
<html>
  <head>
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
      <form id="paygtwy" method = "post"  action = "payinsert.php" onsubmit="return payval();" >
        <br>
        <br>
        <label>email</label>
        <input type="text" id ="email" class="pgtwayinpts" name="email"> <br>
        <label>Phone</label>
        <input type="tel" id ="phone" class="pgtwayinpts" name="phone"><br>
        <label>NIC</label>
        <input type="text" id ="nic"class="pgtwayinpts" name="nic"><br>
        <select class="pgtwayinpts" id = "packege" name="packege" >
          <option disabled selected>select a  packege from this list</option>
          <option value = "1">1</option>
          <option value = "2">2</option>
          <option value = "3">3</option>
          <option value = "4">4</option>
          <option value = "0" default>4</option>


        </select>
        <br>

        <select class="pgtwayinpts"   name = "additional">
          <option disabled selected>select additional services if you want</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
        <br>
        <br>
        <select class="pgtwayinpts" name="bank" id = "bank">
          <option disabled selected>select your bank from this list</option>
          <option>BOC</option>
          <option>HNB</option>
          <option>COMERSIAL</option>
          <option>SDB</option>
          <option>UNION BANK</option>
          <option>PEOPLES BANK</option>
        </select>
        <img src="project/media/pngegg.png" alt="payment methods" style=" max-width: 100%; height: auto; ">
        <input type="text" class="pgtwayinpts"placeholder="Card Holders Name " name = "hname" id = "hname">
        <input type="text" class="pgtwayinpts" placeholder="Card Number " name = "cno" id = "cno">
        <input type="text" class="pgtwayinpts" placeholder="expire date " name = "expdte" id = "expdte">
        <input type="text" class="pgtwayinpts" placeholder="cvv" name="cv" id = "cv">
        <br>
        <br>
        
        <label id="display" style="color: red;"></label>
        
        <input type = "submit" id = "purchase" value = "pay">

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
    window.location.href = "http://localhost/php/payinfo.php";
    return true;


  }
} 

        </script>

      

      </form>
 
    </main>

    <footer>

    </footer>
  </body>
</html>