<?php

include('c_config.php');

// Initialize search variables
$search_keyword = "";
$search_location = "";
$search_job_type = "";

// Handle search form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_keyword = $_POST['keyword'] ?? "";
    $search_location = $_POST['location'] ?? "";
    $search_job_type = $_POST['employment_type'] ?? "";
}

// SQL query to fetch jobs based on the filters
$sql = "SELECT * FROM jobs WHERE 1=1";

if (!empty($search_keyword)) {
    $sql .= " AND Title LIKE '%$search_keyword%'";
}

if (!empty($search_location)) {
    $sql .= " AND jLocation LIKE '%$search_location%'";
}

if (!empty($search_job_type)) {
    $sql .= " AND Employmenttype LIKE '%$search_job_type%'";
}

// Execute the query
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a Job</title>
    <link rel="stylesheet" href="css/find.css">
</head>

<body>

<!-- Search Bar Section -->
<main>
    <div class="search-bar-container">
        <form method="POST" action="find.php">
            <div class="search-bar">
                <input type="text" name="keyword" placeholder="I’m looking for a job..." value="<?php echo htmlspecialchars($search_keyword); ?>">
                <select name="location">
                    <option value="">Location</option>
                    <option value="Remote" <?php if($search_location == 'Remote') echo 'selected'; ?>>Remote</option>
                    <option value="On-site" <?php if($search_location == 'On-site') echo 'selected'; ?>>On-site</option>
                </select>
                <button type="submit">Search</button>
            </div>
        </form>
    </div>

    <!-- Main Content -->
    <div class="content">
        <!-- Filters Section -->
        <aside class="filters">
            <form method="POST" action="find.php">
                <select name="industry">
                    <option>All Industries</option>
                    <option>Technology</option>
                    <option>Marketing</option>
                    <option>Education</option>
                </select>
                <select name="employment_type">
                    <option value="">Job Type</option>
                    <option value="Full-time" <?php if($search_job_type == 'Full-time') echo 'selected'; ?>>Full-time</option>
                    <option value="Part-time" <?php if($search_job_type == 'Part-time') echo 'selected'; ?>>Part-time</option>
                </select>
                <select>
                    <option>Job Level</option>
                    <option>Entry Level</option>
                    <option>Mid Level</option>
                </select>
                <select>
                    <option>Posted</option>
                    <option>Last 24 hours</option>
                    <option>Last 7 days</option>
                </select>

                <div class="work-type">
                    <input type="checkbox" id="workFromHome" name="workFromHome">
                    <label for="workFromHome">Work From Home/Hybrid</label>
                </div>

                <div class="save-search-name">
                    <input type="text" placeholder="Give it a name">
                </div>
                <button class="save-search">Save this search</button>
                <button type="submit" class="search-btn">Search</button>
            </form>
        </aside>

        <!-- Job Results Section -->
        <section class="job-results">
            <p class="jobs_count">
                <?php
                // Count jobs found
                echo $result->num_rows . " jobs found";
                ?>
            </p>

            <div class="job-listings">
                <?php
                // Display job results
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <div class='job-card'>
                            <div class='company-logo'>
                                <img src='/images/company_logo.png' alt='Company Logo'>
                            </div>
                            <div class='job-info'>
                                <h3>" . htmlspecialchars($row['Title']) . "</h3>
                                <p>" . htmlspecialchars($row['jDescription']) . "</p>
                                <p><strong>Location:</strong> " . htmlspecialchars($row['jLocation']) . "</p>
                                <p><strong>Employment Type:</strong> " . htmlspecialchars($row['Employmenttype']) . "</p>
                                <p><strong>Salary Range:</strong> " . htmlspecialchars($row['SalaryRange']) . "</p>
                                <p><strong>Skills Required:</strong> " . htmlspecialchars($row['Skills']) . "</p>
                            </div>
                        </div>";
                    }
                } else {
                    echo "<p>No jobs found</p>";
                }
                ?>
            </div>

           
            <div class="jobs_pagination">
                <a href="#">«</a>
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">»</a>
            </div>
        </section>
    </div>
</main>

</body>

</html>
