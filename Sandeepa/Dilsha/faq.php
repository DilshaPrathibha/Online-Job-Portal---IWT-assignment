<?php
    include('navbar.php');
    ?>
    
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>

    <style>
        .faq {
            max-width: 60rem;
            margin: 60px auto;
            font-family: Arial, sans-serif;
        }

        .faq h2 {
            padding-top: 30px;
            text-align: center;
            margin-top: 80px;
            margin-bottom: 20px;
            font-size: 2rem;
            color: #333;
        }

        .faq-item {
            margin: 25px 0;
            border-bottom: 1px solid #aaa;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .question {
            width: 100%;
            background-color: #dcdcdc;
            border: none;
            outline: none;
            padding: 18px;
            text-align: left;
            font-size: 20px;
            cursor: pointer;
            position: relative;
            border-radius: 12px 12px 0 0;
            transition: background-color 0.3s ease;
        }

        .question:hover {
            background-color: #c4c4c4;
        }

        .question::after {
            content: '▼';
            font-size: 22px;
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
        }

        .question.active::after {
            content: '▲';
        }

        .answer {
            padding: 0 20px;
            display: block;
            max-height: 0;
            overflow: hidden;
            background-color: #f0f0f0;
            transition: max-height 0.4s ease-out;
            border-radius: 0 0 12px 12px;
        }

        .answer p {
            padding: 18px 0;
        }

        .answer ul {
            padding: 18px 0;
        }

        .question.active+.answer {
            max-height: 600px;
        }

        .contact-ref {
            text-align: center;
            margin: 40px 0;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .contact-ref p {
            font-size: 18px;
            /* Set font size */
            color:darkslategray;
            /* Dark gray text color */
        }

        .contact-ref a {
            color: #007bff;
            text-decoration: none; /* remove underline */
            font-weight: bold;
        }

        .contact-ref a:hover {
            text-decoration: underline;
            /* Underline on hover for interaction */
        }
    </style>
</head>

<body>

    <div class="faq">
        <h2>Frequently Asked Questions</h2>
        <br>

        <div class="faq-item">
            <button class="question"> What is this job portal?</button>
            <div class="answer">
                <p>This job portal is an online platform that connects job seekers with employers. It allows users to search for job openings, post resumes, and apply for jobs.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="question">How do I create an account?</button>
            <div class="answer">
                <br>
                <p>To create an account:</p>
                <ol>
                    <li>&nbsp;Click on the <b>"Sign Up"</b> button on the homepage.</li>
                    <li>&nbsp;Fill in your details.</li>
                    <li>&nbsp;Verify your email address.</li><br>
                </ol>

            </div>
        </div>
        <div class="faq-item">
            <button class="question">Is there a fee to use the job portal?</button>
            <div class="answer">
                <p>No, but creating an account and applying for jobs is completely free for job seekers.</p>

            </div>
        </div>
        <div class="faq-item">
            <button class="question"> How can I search for jobs?</button>
            <div class="answer">
                <p>You can search for jobs using keywords, job titles, or filters such as location, job type, and salary range on the job search page.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="question"> Can I upload my resume?</button>
            <div class="answer">
                <p>Yes, after creating an account, you can upload your resume in the profile section to make it easier for employers to find you.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="question">How do I apply for a job?</button>
            <div class="answer">
                <p>Once you find a job you are interested in, click on the job title and follow the instructions to apply, which may include submitting your resume and cover letter.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="question"> How do I reset my password?</button>
            <div class="answer">
                <p>Click on the “Forgot Password?” link on the login page, enter your email address, and follow the instructions sent to your email to reset your password.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="question">What should I do if I encounter a technical issue?</button>
            <div class="answer">
                <br>
                <p>If you experience any technical issues, please contact our support team through the "Contact Us" page for assistance.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="question">Can employers contact me directly?</button>
            <div class="answer">
                <p>Employers may reach out to you directly through:</p>
                <ul>
                    <li>The contact information you provide in your profile</li>
                    <li>The portal's <b>messaging system</b>.</li>
                </ul>
            </div>
        </div>
        <div class="faq-item">
            <button class="question">How can I provide feedback about the portal?</button>
            <div class="answer">
                <p>We welcome your feedback! Please use the "Feedback" section on our website to share your thoughts and suggestions.</p>
            </div>
        </div>
    </div>

    <script>
        // JavaScript for FAQ functionality
        document.querySelectorAll('.question').forEach(header => {
            header.addEventListener('click', function() {
                this.classList.toggle('active');
                const content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        });
    </script>

    <div class="contact-ref">
        <p>If you have further questions, please <a href="contact.php"><b>Contact us</b></a>. We are here to help!</p>
    </div>
</body>

</html>

<?php
    include('footer.php');
?>
