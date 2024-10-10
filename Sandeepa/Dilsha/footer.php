<style>
.footer-bar{
    background-color: #24262b; /*set footer bg color*/
    padding: 70px 0;
}

.footer-bar .container{
    max-width: 100%;
    margin: auto;
}

.footer-bar .container .row{
    display: flex;
    flex-wrap: wrap;
}

.footer-col ul{
    list-style: none;
}

.footer-col{
    width: 25%;
    padding: 0 15px;
}


.footer-col h4{
    font-size: 18px;
    color: #fff;
    text-transform: capitalize; /*automaticall conver first letter into capital*/
    font-weight: 500;
    margin-bottom: 30px;
    position: relative; /*used position an element relative to its normal position in the document flow*/
}

.footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: rgb(77, 132, 191);
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}

.footer-col ul li:not(:last-child){
    margin-bottom: 10px;
}

.footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #fff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all 0.3 ease;
}

.footer-col ul li a:hover{
    color: #fff;
    padding-left: 8px;
}

.footer-col .social-links a{
    display: inline-block;
    width: 40px;
    width: 40px;
    background-color: #bbbbbb;
    background-color: rgba(255, 255, 255, 0.2);
    margin-right: 10px;
    margin: 0 10px 10px 0;
    text-align: center;
    line-height: 40px; /*all set same line*/
    border-radius: 50%;
    color: #fff ;
    transition: 0.5 all ease;
}

.footer-col .social-links a:hover{
    color: #24262b;
    background-color: #fff;
}

.copyright{
    width: 100%;
    text-align: center;
    padding: 25px 0;
    background: #fff;
    font-weight: 300;
}
</style>


<div class="footer-bar">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>JobAdawiya</h4>
                    <ul>
                        <li><a href="../home/home.php">Home</a></li>
                        <li><a href="../Bupathifnl/aboutus.php">About Us</a></li>
                        <li><a href="../Malith/postajob.php">Post a Job</a></li>
                        <li><a href="find.php">Find a Job</a></li>
                        <li><a href="../Shamal/index.php">Intership</a></li>
                        <li><a href="../Bupathifnl/signup.php">Sign up</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
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