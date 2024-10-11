<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create user profile</title>
    <!--form css-->
    <link rel="stylesheet" href="create profile.css">
    <!--navbar css-->
    <link rel="stylesheet" href="navbar.css">
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
                        <li><a href="../Shamal/Login.php">Dashboard</a></li>
                        <li><a href="../Bupathifnl/signup.php">SignUp</a></li>
                        <li><a href="../createUserProfile/create profile.php">CreateUserProfile</a></li>
                    </ul>
                </div>
            </nav>
        </div>
</div>
<div class="content"  style="padding-top:0px">
<form method="post" action="insert.php">
<div class="container">
<!--General Information--> 
    <div class="general_info">
        <div class="title">Create User Profile</div>
            <div class="user-details">
                <div class="input_part">
                    <span class="details">Full Name</span>
                    <input type="text" name="Name" id="Name" placeholder="Enter your name" required>
                </div>
                <div class="input_part">    
                    <span class="details">Title</span>
                    <input type="text" name="Title" id="Title"  placeholder="Enter your profession" required>
                </div>
                <div class="input_part">    
                    <span class="Description">Description</span>
                    <textarea name="Description1" style="width: 215%;"  rows="4" placeholder="Example Text"></textarea>
                </div>
            </div>
    </div>
<!--About-->
    <div class="about">
        <div class="title">About</div>
            <div class="input_part">    
                <span class="Description">Description</span>
                <textarea name="Description2" rows="4" placeholder="Example Text"></textarea>
            </div>
    </div>    
<!--Working Experience-->    
    <div class="work">
        <div class="title">Working Experience</div>
            <div class="user-details">
                <div class="input_part">
                    <span class="details">Company Name</span>
                    <input type="text" name="cName" id="cName" placeholder="Enter your name" >
                </div>
                <div class="input_part">    
                    <span class="details">Employee Type</span>
                    <input type="text" name="eType"  id="eType" placeholder="Enter your profession" >
                </div>
                <div class="input_part">
                    <span class="details">Title</span>
                    <input type="text" name="eTitle" id="eTitle" placeholder="Enter your name" >
                </div>
                <div class="input_part">    
                    <span class="details">Start Date</span>
                    <input type="text" name="sDate" id="sDate"   placeholder="Enter your profession" >
                </div>
                <div class="input_part">    
                    <span class="details">End Date</span>
                    <input type="text" name="eDate" id="eDate"  placeholder="Enter your profession" >
                </div>
                <div class="full-width">    
                    <span class="Description">Description</span>
                    <textarea name="Description3" style="width: 100%;"  rows="4" placeholder="Example Text"></textarea>
                </div>
            </div>          
    </div>
<!--Education-->
<div class="education">
    <div class="title">Education</div>
  
        <div class="input_part">    
            <span class="Description">Description</span>
            <textarea name="Description4" rows="4" placeholder="Example Text"></textarea>
        </div>  
</div>
<!--Skills-->
<div class="skills">
    <div class="title">Skills</div>
   
        <div class="input_part">    
            <span class="Description">Description</span>
            <textarea name="Description5" rows="4" placeholder="Example Text"></textarea>
        </div>  
</div>    
<div>
<label id="display" style=" color: red;"></label>
<input type="submit"  onclick=" return  datacheck()" value="Save"> 
</div>
</div>
</form>
<script>
    function datacheck (){

        var  nm,ttle,cnm,etp,ettle,sdt,edt;

        nm = document.getElementById("Name").value;
        ttle = document.getElementById("Title").value;
        cnm = document.getElementById("cName").value;
        etp = document.getElementById("eType").value;
        ettle = document.getElementById("eTitle").value;
        sdt = document.getElementById("sDate").value;
        edt = document.getElementById("eDate").value;

        let msg = "";


        if (nm=="")
         {
           msg  += "please enter name <br>";
         }

         
        if (ttle=="")
         {
            msg  += "please enter profession <br>";
         }

         
        if (cnm=="")
         {
            msg   += "please enter company name <br>";
         }

         
        if (etp=="")
         {
            msg  += "please enter type  <br>";
         }

         
        if (ettle=="")
         {
            msg  += "please enter title  <br>";
         }

         
        if (sdt=="")
         {
            msg  += "please enter start date  <br>";
         }

         
        if (edt=="")
         {
            msg   += "please enter   end date <br>";
         }


         if (msg!=="")
         {
            document.getElementById("display").innerHTML = msg;
            return false;
         }

         return true;
         alert("user profile has been created sucsessfullly");
    }
</script>

</div>
</body>
</html>