<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
}

nav{
    top: 0;
    position: fixed;
    background: #1b1b1b;
    width: 100%;
    z-index: 12;
}

nav .menu{
    max-width: 1250px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
}

.menu .logo a{
    text-decoration: none;
    color: #fff;
    font-size: 30px;
    font-weight: 600;
}

.menu ul{
    display: inline-flex;
    list-style: none;
    float: right;
}

.menu ul li{
    margin-left: 7px;
}

.menu ul li a{
    text-decoration: none;
    color: #fff;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.menu ul li a:hover{
    background: #fff;
    color: #000;
}


@media (max-width: 768px) {
    nav .menu {
        flex-direction: column;
        align-items: flex-start;
        padding: 10px;
    }

    .menu ul {
        display: none;
        flex-direction: column;
        width: 100%;
    }

    .menu ul li {
        width: 100%;
    }

    .menu ul li a {
        display: block;
        width: 100%;
        padding: 10px 0;
        text-align: center;
    }

 
    .menu .hamburger {
        display: block;
        cursor: pointer;
        width: 30px;
        height: 30px;
        position: relative;
    }

    .menu .hamburger span {
        display: block;
        width: 100%;
        height: 3px;
        background-color: #fff;
        margin: 5px 0;
        transition: all 0.4s ease;
    }

   
    .menu.active ul {
        display: flex;
    }

    .menu.active .hamburger span:nth-child(1) {
        transform: rotate(45deg) translateY(8px);
    }

    .menu.active .hamburger span:nth-child(2) {
        opacity: 0;
    }

    .menu.active .hamburger span:nth-child(3) {
        transform: rotate(-45deg) translateY(-8px);
    }
}

</style>

<div class="nav-bar">
    <div class="container">
        <nav>
            <div class="menu">
                <div class="logo">
                    <a href="../home">Jobs අඩවිය</a>
                </div>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul>
                    <li><a href="../home/home.php">Home</a></li>
                    <li><a href="../Bupathifnl/aboutus.php">AboutUs</a></li>
                    <li><a href="contact.php">ContactUs</a></li>
                    <li><a href="find.php">FindAJob</a></li>
                    <li><a href="../Malith/postajob.php">PostAJob</a></li>
                    <li><a href="../Shamal/index.php">Internship</a></li>  
                    <li><a href="../Shamal/login.php">Dashboard</a></li>
                    <li><a href="../Bupathifnl/signup.php">SignUp</a></li>
                    <!--<li><a href="../Shamal/Login.php">Login</a></li>-->
                    <li><a href="../createUserProfile/create profile.php">CreateUserProfile</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>


<script>
    document.querySelector('.hamburger').addEventListener('click', function() {
        document.querySelector('.menu').classList.toggle('active');
    });
</script>
