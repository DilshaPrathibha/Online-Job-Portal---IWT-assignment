<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create user profile</title>
    <link rel="stylesheet" href="create profile.css">
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
                        <!--<li><a href="../Shamal/Login.php">Login</a></li>-->
                        <li><a href="../createUserProfile/create profile.php">CreateUserProfile</a></li>
                    </ul>
                </div>
            </nav>
        </div>
</div>

<form method="post" action="update.php">
<div class="container">
<!--General Information-->
    <div class="general_info">
        <div class="title">Update User Profile</div>
        
            <!--<div class="avatar_head">Avatar</div>
            <div class="avatar_part">
                <div class="avatar"></div>
                <div class="avatar_buttons">
                    <button id="change">Change</button>
                    <button id="remove">Remove</button>
                </div>
            </div>-->
            <div class="user-details">
                <div class="input_part">
                    <span class="details">User ID</span>
                    <input type="text" name="uid" id="uid" placeholder="Enter your id" required>
                </div>
                <div class="input_part">
                    <span class="details">Full Name</span>
                    <input type="text" name="Name" id="Name" placeholder="Enter your name" required>
                </div>
                <div class="input_part">    
                    <span class="details">Title</span>
                    <input type="text" name="Title" id="Title" placeholder="Enter your profession" required>
                </div>
                <div class="full-width">    
                    <span class="Description">Description</span>
                    <textarea name="Description1" style="width: 100%;" id="description" rows="4" placeholder="Example Text"></textarea>
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
                    <input type="text" name="cName" id="cName"  placeholder="Enter your name" required>
                </div>
                <div class="input_part">    
                    <span class="details">Employee Type</span>
                    <input type="text" name="eType" id="eType" placeholder="Enter your profession" required>
                </div>
                <div class="input_part">
                    <span class="details">Title</span>
                    <input type="text" name="eTitle"  id="eTitle"  placeholder="Enter your name" required>
                </div>
                <div class="input_part">    
                    <span class="details">Start Date</span>
                    <input type="text" name="sDate" id="sDate" placeholder="Enter your profession" required>
                </div>
                <div class="input_part">    
                    <span class="details">End Date</span>
                    <input type="text" name="eDate" id="eDate" placeholder="Enter your profession" required>
                </div>
                <div class="full-width">    
                    <span class="Description">Description</span>
                    <textarea name="Description3" style="width: 100%;" id="description" rows="4" placeholder="Example Text"></textarea>
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
    <label id="display"  style="color: red;"></label> <br>

    <input type="submit" onclick="return val()" value="Update">

    <script>

    function val(){    
        let  uid,name,title,nm,et,sd,ed;

    uid =    document.getElementById("uid").value;
    name =    document.getElementById("Name").value;
    title =    document.getElementById("Title").value;
    nm =    document.getElementById("cName").value;
    et =    document.getElementById("eType").value;
    sd =    document.getElementById("sDate").value;
    ed =    document.getElementById("eDate").value;

    let  emsg = "";

    if(uid=="")
    {
      emsg += "please enter user id <br>";
    }

    if(name=="")
    {
      emsg += "please enter user id <br>";
    }

    if(title=="")
    {
      emsg += "please enter user id <br>";
    }

    if(nm=="")
    {
      emsg += "please enter user id <br>";
    }

    if(et=="")
    {
      emsg += "please enter user id <br>";
    }

    if(sd=="")
    {
      emsg += "please enter user id <br>";
    }

    if(ed=="")
    {
      emsg += "please enter user id <br>";
    }


    if (emsg!=="")
    {
        document.getElementById("display").innerHTML = emsg ;
        return false
    }

    return true;
}


    </script>
    

</div>
</div>
</form>
</body>
</html>