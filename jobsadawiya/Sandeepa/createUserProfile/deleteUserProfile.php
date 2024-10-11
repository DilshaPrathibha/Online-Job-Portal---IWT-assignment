<!DOCTYPE html>
<html>
    <head>
        <title>
          Deletedetailpage
        </title>
        <link rel="stylesheet" href="../Malith/style1.css">
        <link rel="stylesheet" href="../Malith/nav.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet" />
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
    <?php

        require 'config.php';  
  
    ?>
        
    <div id="con1" style="margin-top:100px;">
    <h3 id="pragh">Delete Info:</h3>
    <form method="post"action=delete.php>
    <label>User ID</label>
    <input type="text" name="uid"><br>
           
    <button style="margin-top:40px;" onclick="return conf()" >Delete</button>
    <button>Cancel</button>

    <script>
        function conf(){
            confirm("do you wish to proceed");
        }
       </script>
        
    </div>

    </form>
    </div>
    </body>
</html>
