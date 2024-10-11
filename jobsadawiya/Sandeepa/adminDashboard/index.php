<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="navbar.css">
     <!--link box icons-->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet" />

    <style>
        .nav-bar2 {
            background-color: grey;
            padding: 10px 0;
        }

        .nav-bar2 nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 5%;
        }

        .nav-bar2 .logo a {
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        .nav-bar2 ul {
            list-style: none;
            display: flex;
            gap: 15px;
        }

        .nav-bar2 ul li a {
            text-decoration: none;
            font-size: 18px;
            color: white;
            padding: 10px;
        }

        .nav-bar2 ul li a:hover {
            color: pink;
        }
    </style>

</head>
<body>

    <div class="nav-bar" style="margin-top: -20px; margin-left: -55px;">
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

    

    <div class="notify-bar" style="padding-top: 80px;">
        <div class="container">
            <div class="header">
                <span>My Job Management</span>
                <span class="notification">Notifications <span style="color: red;">●</span></span>
            </div>
            <a href="../user profile/Ashinsana.php"><button id="profile">Watch User Profiles</button></a>
            
        </div>
    </div>
    <div class="chart">
        <div class="container">
            <div class="box">
                <div class="percent">
                    <svg>
                        <circle cx="70" cy="70" r="70"></circle>
                        <circle cx="70" cy="70" r="70"></circle>
                    </svg>
                    <div class="number">
                        <h2>36<span>%</span></h2>
                    </div>
                </div>
                <h2 class="text">Pending Users</h2>
            </div>
            <div class="box">
                <div class="percent">
                    <svg class="c2">
                        <circle cx="70" cy="70" r="70"></circle>
                        <circle cx="70" cy="70" r="70"></circle>
                    </svg>
                    <div class="number">
                        <h2>20<span>%</span></h2>
                    </div>
                </div>
                <h2 class="text">Active Users</h2>
            </div>
            <div class="box">
                <div class="percent">
                    <svg class="c3">
                        <circle cx="70" cy="70" r="70"></circle>
                        <circle cx="70" cy="70" r="70"></circle>
                    </svg>
                    <div class="number">
                        <h2>30<span>%</span></h2>
                    </div>
                </div>
                <h2 class="text">Dormant Users</h2>
            </div>
            <div class="box">
                <div class="percent">
                    <svg class="c4">
                        <circle cx="70" cy="70" r="70"></circle>
                        <circle cx="70" cy="70" r="70"></circle>
                    </svg>
                    <div class="number">
                        <h2>14<span>%</span></h2>
                    </div>
                </div>
                <h2 class="text">Deleted Users</h2>
            </div> 
            <div class="buttons">
                <div class="btn1">
                    <span><i class='bx bx-like'></i></span>
                    <span>Total Job Seekers</span>
                    <span>10,750</span>
                </div>
                <div class="btn2">
                    <span><i class='bx bx-bell'></i></span>
                    <span>Total Job Providers</span>
                    <span>24,100</span>
                </div>
            </div>     
        </div>
    </div>
    <div class="table-row">
        <div class="container">
            <div class="table">
                <table>
                    <caption style="text-align: left; font-weight: bolder; font-size: 20px; margin-bottom: 10px;">List of Posted Job</caption>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Posted</th>
                            <th>Expires</th>
                            <th>Sheduled</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Software Engineer</td>
                            <td>2024-10-03</td>
                            <td>2024-11-02</td>
                            <td>2024-10-15</td>
                            <td>COLOMBO</td>
                        </tr>
                        <tr>
                            <td>Data Analyst</td>
                            <td>2024-10-01</td>
                            <td>2024-10-31</td>
                            <td>2024-10-14</td>
                            <td>COLOMBO</td>
                        </tr>
                        <tr>
                            <td>Marketing Manager</td>
                            <td>2024-10-04</td>
                            <td>2024-11-04</td>
                            <td>2024-10-13</td>
                            <td>COLOMBO</td>
                        </tr>
                        <tr>
                            <td>UI/UX Designer</td>
                            <td>2024-10-02</td>
                            <td>2024-11-01</td>
                            <td>2024-10-16</td>
                            <td>REMOTE</td>
                        </tr>
                    </tbody>
                </table>
                <div class="social">
                    <a href="https://www.google.com/"><button id="google"><i class='bx bxl-google'></i>Post to Google</button></a>
                    <a href="https://lk.linkedin.com/"><button id="linkdin"><i class='bx bxl-linkedin' ></i>Post to Linkdin</button></a>
                    <a href="https://web.facebook.com/"><button id="facebook"><i class='bx bxl-facebook-circle' ></i>Post to Facebook</button></a>
                    <a href="https://x.com/"><button id="twitter"><i class='bx bxl-twitter' ></i>Post to Twitter</button></a>
                </div>
            </div>
        </div>
    </div>     
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
                            <li><a href="../dilsha/f_read.php">User Feedbacks</a></li>
                            <li><a href="../dilsha/c_update_admin.php">Manage Messages</a></li>
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
                            <a href="https://web.facebook.com/"><i class='bx bxl-facebook-circle'></i></a>
                            <a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
                            <a href="https://lk.linkedin.com/"><i class='bx bxl-linkedin'></i></a>
                            <a href="https://x.com/"><i class='bx bxl-twitter'></i></a>
                            <a href="https://www.youtube.com/"><i class='bx bxl-youtube'></i></a>
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