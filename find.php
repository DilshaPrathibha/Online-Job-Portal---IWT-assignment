<?php

include('c_config.php');
include('navbar.php');

$search_keyword = "";
$search_location = "";
$search_job_type = "";
$workFromHome = false;  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_keyword = $_POST['keyword'] ?? "";
    $search_location = $_POST['location'] ?? "";
    $search_job_type = $_POST['employment_type'] ?? "";
    $workFromHome = isset($_POST['workFromHome']);  // Check if checkbox is selected
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

// If the "Remote" checkbox is selected, filter for remote jobs
if ($workFromHome) {
    $sql .= " AND jLocation = 'Remote'";
}

// Execute the query
$result = $conn->query($sql);

$jobs = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $jobs[] = $row;
    }
}

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
                    <input type="text" name="keyword" class="search-text" placeholder="I’m looking for a job..." value="<?php echo htmlspecialchars($search_keyword); ?>">
                    <select name="location">
                        <option value="">Location</option>
                        <option value="Remote" <?php if ($search_location == 'Remote') echo 'selected'; ?>>Remote</option>
                        <option value="On-site" <?php if ($search_location == 'On-site') echo 'selected'; ?>>On-site</option>
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
                    <select name="employment_type">
                        <option value="">Job Type</option>
                        <option value="Full-time" <?php if ($search_job_type == 'Full-time') echo 'selected'; ?>>Full-time</option>
                        <option value="Part-time" <?php if ($search_job_type == 'Part-time') echo 'selected'; ?>>Part-time</option>
                    </select>
                    <select>
                        <option>Experience Level</option>
                        <option>Entry Level</option>
                        <option>Mid-Level</option>
                        <option>Senior Level</option>
                    </select>
                    <select>
                        <option>Posted</option>
                        <option>Last 24 hours</option>
                        <option>Last 7 days</option>
                    </select>

                    <form method="POST" action="find.php">
                        <div class="work-type">
                            <input type="checkbox" id="workFromHome" name="workFromHome" <?php if (isset($_POST['workFromHome'])) echo 'checked'; ?>>
                            <label for="workFromHome">Work From Home/Hybrid</label>
                        </div>
                        <button type="submit" class="search-btn">Search</button>
                    </form>
                </form>
            </aside>

            <!-- Job Results Section -->
            <section class="job-results">
                <p class="jobs_count">
                    <?php
                    // Count jobs found
                    echo count($jobs) . " jobs found";
                    ?>
                </p>

                <div class="job-listings" id="job-listings">
                    <!-- Job cards will be injected here by JavaScript -->
                </div>

                <div class="pagination" id="pagination">
                    <!-- Pagination buttons will be injected here by JavaScript -->
                </div>
            </section>
        </div>
    </main>


    <script>
    const jobs = <?php echo json_encode($jobs); ?>;
    const jobsPerPage = 5;
    let currentPage = 1;

    const displayJobs = (page) => {
        const start = (page - 1) * jobsPerPage;
        const end = page * jobsPerPage;
        const paginatedJobs = jobs.slice(start, end);

        const jobListings = document.getElementById('job-listings');
        jobListings.innerHTML = '';

        paginatedJobs.forEach(job => {
            const jobCard = `
                <div class='job-card'>
                    <div class='company-logo'>
                        <img src='images/company_logo.png' alt='Company Logo'>
                    </div>
                    <div class='job-info'>
                        <h3>${job.Title}</h3>
                        <p>${job.jDescription}</p>
                        <p><strong>Location:</strong> ${job.jLocation}</p>
                        <p><strong>Employment Type:</strong> ${job.Employmenttype}</p>
                        <p><strong>Salary Range:</strong> ${job.SalaryRange}</p>
                        <p><strong>Skills Required:</strong> ${job.Skills}</p>
                        <button class="apply-btn" onclick="applyJob('${job.Title}')">Apply</button>
                    </div>
                </div>`;
            jobListings.innerHTML += jobCard;
        });
    };

    const displayPagination = () => {
        const totalPages = Math.ceil(jobs.length / jobsPerPage);
        const pagination = document.getElementById('pagination');
        pagination.innerHTML = '';

        const goBack = `<a href="#" class="${currentPage === 1 ? 'disabled' : ''}" onclick="goToPage(${currentPage - 1})">«</a>`;
        pagination.innerHTML += goBack;

        for (let i = 1; i <= totalPages; i++) {
            const pageLink = `<a href="#" class="${i === currentPage ? 'active' : ''}" onclick="goToPage(${i})">${i}</a>`;
            pagination.innerHTML += pageLink;
        }

        const goNext = `<a href="#" class="${currentPage === totalPages ? 'disabled' : ''}" onclick="goToPage(${currentPage + 1})">»</a>`;
        pagination.innerHTML += goNext;
    };

    const goToPage = (page) => {
        if (page < 1 || page > Math.ceil(jobs.length / jobsPerPage)) return;
        currentPage = page;
        displayJobs(page);
        displayPagination();
    };

    const applyJob = (jobTitle) => {
        alert(`Applied successfully for : ${jobTitle}`);

        // Redirect or handle apply logic
        // window.location.href = `/apply?jobTitle=${encodeURIComponent(jobTitle)}`;
    };

    // Initial load
    displayJobs(currentPage);
    displayPagination();



/* stop scrolling filters on the footer */
    window.addEventListener('scroll', () => {
    const filters = document.querySelector('.filters');
    const footer = document.querySelector('footer');

    const filtersHeight = filters.offsetHeight;
    const footerTop = footer.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    // Check if filters should stop being sticky and scroll with the footer
    if (footerTop < windowHeight) {
        filters.classList.add('footer-fixed');
    } else {
        filters.classList.remove('footer-fixed');
    }
});

</script>


</body>

</html>

<?php
    include('footer.php');
?>
