<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account Page</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: aliceblue;
            margin: 0;
            padding: 0;
        }

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

        .table-container {
            display: flex;
            justify-content: center;
            margin: 50px auto;
        }

        table {
            border-collapse: collapse;
            margin: 0 20px;
            width: auto;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        .profile-card {
            width: 300px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 0 auto;
        }

        .profile-card .profile-img {
            width: 100px;
            border-radius: 50%;
        }

        .profile-card .name {
            font-size: 24px;
            font-weight: bold;
        }

        .profile-card .job {
            color: grey;
        }

        .profile-card .media-buttons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            color: white;
            margin: 0 5px;
        }

        .profile-card .buttons button {
            background-color: #4267b2;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 10px;
            cursor: pointer;
        }

        .profile-card .buttons button:hover {
            background-color: #1daaf2;
        }

        .profile-card .analytics {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .profile-card .analytics .data {
            text-align: center;
        }

        .footer-bar {
            background-color: grey;
            color: white;
            padding: 50px 0;
            margin-top: 50px;
        }

        .footer-bar .footer-col h4 {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .footer-bar .footer-col ul {
            list-style-type: none;
            padding: 0;
        }

        .footer-bar .footer-col ul li {
            margin-bottom: 10px;
        }

        .footer-bar .footer-col ul li a {
            text-decoration: none;
            color: white;
        }

        .footer-bar .social-links a {
            margin-right: 10px;
            color: white;
            font-size: 24px;
        }

        .copyright {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
        }

        @media (max-width: 768px) {
            .table-container {
                flex-direction: column;
                align-items: center;
            }

            .profile-card {
                width: 100%;
                padding: 10px;
            }

            .nav-bar nav {
                flex-direction: column;
            }

            .nav-bar ul {
                flex-direction: column;
            }

            .nav-bar ul li {
                margin-bottom: 10px;
            }
        }
    </style>

<link rel="stylesheet" href="../home/navbar.css">

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

    <div class="nav-bar2" style="padding-top:100px">
        <nav>
            <div class="logo">
                <a href="#">Summery</a>
            </div>
            <ul>
                <li><a href="http://localhost/jobsadawiya/Sandeepa/createUserProfile/read.php">User Profiles</a></li>
                <li><a href="http://localhost/jobsadawiya/Sandeepa/Malith/read.php">Post Jobs</a></li>
                <li><a href="http://localhost/jobsadawiya/Sandeepa/Bupathifnl/read.php">Paments</a></li>
                <li><a href="http://localhost/jobsadawiya/Sandeepa/Dilsha/c_update_admin.php">Contacts</a></li>
                <li><a href="http://localhost/jobsadawiya/Sandeepa/Shamal/read.php">Interns</a></li>
                
            </ul>
        </nav>
    </div>

    <div class="table-container">
        <table>
            <tr>
                <td>All Applicants</td>
            </tr>
            <tr>
                <td>Screening Passed</td>
            </tr>
            <tr>
                <td>Screening Incomplete</td>
            </tr>
            <tr>
                <td>Screening Failed</td>
            </tr>
            <tr>
                <td>Booked for Interview 1</td>
            </tr>
            <tr>
                <td>Booked for Interview 2</td>
            </tr>
            <tr>
                <td>Interview No Show</td>
            </tr>
            <tr>
                <td>Rejected</td>
            </tr>
            <tr>
                <td>Job Offered</td>
            </tr>
            <tr>
                <td>Fake Answered</td>
            </tr>
            <tr>
                <td>Unreachable</td>
            </tr>
        </table>

        <table>
            <tr>
                <td>
                    <input type="checkbox" name="check"> Kasun Sandaruwan<br>
                    <input type="button" value="Screening Passed" style="color: green;">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="check"> Kasun Sandaruwan<br>
                    <input type="button" value="Screening Passed" style="color: green;">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="check"> Kasun Sandaruwan<br>
                    <input type="button" value="Screening Passed" style="color: green;">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="check"> Kasun Sandaruwan<br>
                    <input type="button" value="Screening Failed" style="color: red;">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" placeholder="Search">
                </td>
            </tr>
        </table>
    </div>

    <div class="profile-card" style="display: flexbox; flex-direction: row-reverse;">
        <div class="image">
            <img src="download.png" alt="Profile Image" class="profile-img">
        </div>
        <div class="text-data">
            <span class="name">Anura Kumara</span><br>
            <span class="job">Job seeker</span>
        </div>
        <div class="media-buttons">
            <a href="#" style="background: #72BF78"><i class='bx bx-phone-call'></i></a>
            <a href="#" style="background: #1daaf2"><i class='bx bx-message'></i></a>
            
        </div>
        <div class="buttons">
            <button class="button">Select</button>
            <button class="button" style="background-color: #B8001F;">Reject</button>
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
