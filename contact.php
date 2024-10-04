<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact Us</title>
    <link rel="icon" href="/images/favicon.png" type="image/png">
</head>

<body>
    <div class="contact">
        <div class="contactImg">
            <img src="images/contact_cover.png" alt="contact cover" id="contact-cover">
        </div>
        <div class="contactForum">
            <fieldset>
                <legend><b>Contact Us</b></legend>
                <form class="contactForm" method="post" action="c_insert.php">
                    <input type="text" name="cname" placeholder="Name" required> <br>
                    <input type="email" name="cemail" placeholder="Email" required> <br>
                    <input type="text" name="cphone" placeholder="Phone Number" required> <br>
                    <textarea name="cmessage" placeholder="Your Message..." required></textarea> <br><br>
                    <button type="submit">Submit</button>
                </form>
            </fieldset>
        </div>
    </div>

    <section class="location-info">
        <div class="location-map">
            <h2>Our Location</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d496.04117625383344!2d80.54639002930917!3d5.949265943001073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae138d4871611eb%3A0xb61d2dbf9146d81!2sSLIIT%20Matara%20Center!5e0!3m2!1sen!2slk!4v1728037208477!5m2!1sen!2slk" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-info">
            <h2>Contact Information</h2>
            <p><b>Mailing Address:</b> <br>EH Cooray Building, No.24: 5th Floor, E.H.Cooray Tower, B535, Matara</p>
            <p><b>Phone:</b> <br><a href="tel:+94123456789">+94 123456789</a></p>
            <p><b>Email:</b> <br> <a href="mailto:my.jobs@gmail.com">support@jobsadawiya.com</a></p>
        </div>
    </section>

</body>

</html>