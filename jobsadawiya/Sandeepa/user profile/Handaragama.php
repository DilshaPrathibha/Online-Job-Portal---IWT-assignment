<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Dashboard</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css">
    <style>
        
        .navbar {
            width: 200px; 
            background-color: #f2f2f2; 
            padding: 15px; 
            border-radius: 5px; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
        }

        .navbar a {
            display: block; 
            color: #333; 
            padding: 10px; 
            text-decoration: none; 
            margin-bottom: 10px; 
            border-radius: 5px; 
            transition: background-color 0.3s; 
        }

        .navbar a:hover {
            background-color: #e0e0e0; 
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Profile Section -->
        <div class="profile">
            <div class="profile-header">
                <div class="profile-pic">
                    <img class="propic" src="Malithpropic.jpg" alt="Avatar">
                    <span class="status-indicator"></span>
                </div>
                <div class="profile-name">Mr.Handaragama</div>
            </div>
            <div class="navbar" style="float: right;">
            <a href="Ashinsana.php">User 1</a>
                <a href="Dilsha.php">User 2</a>
                <a href="Herath.php">User 3</a>
                <a href="Handaragama.php">User 4</a>
                <a href="Karunanayake.php">User 5</a>
                <a href="http://localhost/jobsadawiya/Sandeepa/adminDashboard/index.php">Back</a>
            </div>
            <br><br>
            <div class="profile-info">
                <div class="form-group">
                    <label for="fname">First Name:-</label>
                    <input type="text" id="fname" value="Malith">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:-</label>
                    <input type="text" id="lname" value="Handaragama">
                </div>
                <div class="form-group">
                    <label for="email">Email:-</label>
                    <input type="email" id="email" value="malith@gmail.com">
                </div>
                <div class="form-group">
                    <label for="linkedin_link">LinkedIn profile link:-</label>
                    <input type="text" id="linkedin_link" value="linkedin.com/in/malith">
                </div>
                <div class="form-group">
                    <label for="phone">Phone number:-</label>
                    <input type="text" id="phone" value="0771548875">
                </div>
                <div class="form-group">
                    <label for="NIC">NIC:-</label>
                    <input type="text" id="NIC" value="2002987635463">
                </div>
                <div class="form-group">
                    <label for="Gender">Gender:-</label>
                    <input type="text" id="Gender" value="Male">
                </div>
                <div class="form-group">
                    <label for="DOB">Date of Birth:-</label>
                    <input type="text" id="DOB" value="14/11/2002">
                </div>
                <div class="form-group">
                    <label for="address">Address:-</label>
                    <input type="text" id="address" value="2/21, Dickoya Estate, Hatton">
                </div>
                <div class="form-group">
                    <label for="city">City:-</label>
                    <input type="text" id="city" value="Bandarawela">
                </div>
                <div class="form-group">
                    <label for="zipCode">Zip Code:-</label>
                    <input type="text" id="zipCode" value="90100">
                </div>
                <div class="form-group">
                    <label for="country">Country:-</label>
                    <input type="text" id="country" value="Sri Lanka">
                </div>
            </div>
        </div>

        <!-- Details Section -->
        <div class="details">
            <div class="skills">
                <h3>Skills</h3>
                <p>Analytical data-driven decision making. Performing multiple tasks, maintaining a positive attitude, and demonstrating a strong work ethic.</p>
            </div>
            <div class="education">
                <h3>Education</h3>
                <p>Graduated a Bachelor's degree in business administration. Currently emphasizing marketing and management principles. Enthusiastic about learning continuously and growing professionally.</p>
            </div>
            <div class="work-experience">
                <h3>Work Experience</h3>
                <p>Assisted in the development of a marketing plan, applying business administration principles to improve project outcomes.</p>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="stats">
            <div class="stat-box">
                <p>250 viewers</p>
            </div>
            <div class="stat-box">
                <p>400 impressions</p>
            </div>
            <div class="stat-box">
                <p>90 searches</p>
            </div>
        </div>
    </div>
</body>
</html>
