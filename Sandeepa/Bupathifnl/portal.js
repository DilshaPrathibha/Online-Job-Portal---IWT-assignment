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
    emsg+= "frist name cannot be null. <br>";

  }

  if (ln==="")
    {
      emsg+= "frist name cannot be null. <br>";
  
    }
     if (un==="")
  {
    emsg+= "frist name cannot be null. <br>";

  }

  if (fn==="")
    {
      emsg+= "frist name cannot be null. <br>";
    }
    if (ag===""|| isNaN(ag))
      {
        emsg+= "frist name cannot be null. <br>";
    
      }

      if (ph===""|| isNaN(ph))
        {
          emsg+= "frist name cannot be null. <br>"; 
      
        }

        if (pw!==pwc)
          {
            emsg+= "frist name cannot be null. <br>";
        
          } 

          if (tc==false)
          {
            emsg+= "frist name cannot be null. <br>";
          }

 if (emsg!=="")
 {
   document.getElementById("display").innerHTML=emsg;
   event.preventDefault();
 }


 };

