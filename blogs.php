<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/animations.css" />
        <link rel="stylesheet" href="css/main.css" />
        <!-- <link rel="stylesheet" href="../css/blogs.css"> -->
        <link rel="stylesheet" href="css/footer.css" />
    
        <title>eDoc</title>
        <style>
            table {
                animation: transitionIn-Y-bottom 0.5s;
            }
        </style>
    </head>
</html>
<?php
        require_once './css/index.php';
        require_once './css/blogs.php';
        ?>
<body>
<header>
            <div class="header__session">
                <div class="edoc__logo">
                    <img class="logo" src="./img/unnamed.png" alt="Logo" />
                </div>
                <div class="header__navbar__session">
                    <ul class="header__navbar">
                        <li class="header__navbar__item">
                            <a href="Home.php">Home</a>
                        </li>
                        <li class="header__navbar__item">
                            <a href="Service.php">Service</a>
                        </li>
                        <li class="header__navbar__item">
                            <a href="ContactUs.php">Contact Us</a>
                        </li>
                        <li class="header__navbar__item">
                            <a href="Blog.php">Blog</a>
                        </li>
                    </ul>
                </div>
                <div class="header__login__session">
                    <ul class="header__login">
                        <li class="header__login__item">
                            <a href="login.php" class="non-style-link">
                                <p class="nav-item">LOGIN</p>
                            </a>
                        </li>
                        <li class="header__login__item">
                            <a href="signup.php" class="non-style-link">
                                <p class="nav-item">REGISTER</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <section class="blog-section">
            <h1 id="title">Read Our Latest News</h1>
            <div class="blog-container">
                <!-- Blog 1 -->
                <div class="blog-card">
                    <img src="../Health_Care/img/thanksgiving.jpg" alt="CutCalories">
                    
                    <div class="blog-content">
                        <span class="blog-category">Medical | March 31, 2022</span>
                        <!-- <h2>How to cut calories from your Thanksgiving dinner</h2> -->
                        <a href="https://www.universityhealth.com/blog/how-to-cut-calories-from-your-thanksgiving-dinner">How to cut calories from your Thanksgiving dinner</a>
                        <p>By Kimberly Nelson</p>
                    </div>
                </div>
                <!-- Blog 2 -->
                <div class="blog-card">
                    <img src="../Health_Care/img/adulting-college.jpg" alt="adulting">
                    <div class="blog-content">
                        <span class="blog-category">Medical | October 23, 2024</span>
                        <!-- <h2>Adulting: Encourage Your Kids to Be Their Own Health Advocates</h2> -->
                        <a href="https://www.universityhealth.com/blog/adulting-encourage-your-kids-to-be-their-own-health-advocates">Adulting: Encourage Your Kids to Be Their Own Health Advocates</a>
                        <p>By Jacqueline Boyle</p>
                    </div>
                </div>
                <!-- Blog 3 -->
                <div class="blog-card">
                    <img src="../Health_Care/img/stress - banner.jpg" alt="stress">
                    <div class="blog-content">
                        <span class="blog-category">Mental Health | October 11, 2024</span>
                        <!-- <h2>What’s the Difference between Stress and Anxiety?</h2> -->
                        <a href="https://www.universityhealth.com/blog/stress-and-anxiety">What’s the Difference between Stress and Anxiety?</a>
                        <p>By Angela Williams</p>
                    </div>
                </div>
                <div class="blog-card">
                    <img src="../Health_Care/img/heart palpitations banner.jpg" alt="stress">
                    <div class="blog-content">
                        <span class="blog-category"> Mental Health | November 26, 2024</span>
                        <a href="https://www.universityhealth.com/blog/when-to-worry-about-heart-palpitations">When to Worry About Heart Palpitations?</a>
                        <p>By Angela Williams</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-families">
        <div class="container">
            <div class="text-content">
                <p >CARING FOR THE HEALTH OF YOU AND YOUR FAMILY.</p>
                <h1 id="subheading"> Our Hospital</h1>
                <p>
                    We will work with you to develop individualised care plans, including management of chronic diseases.
                    If we cannot assist, we can provide referrals or advice about the type of practitioner you require.
                    We treat all enquiries sensitively and in the strictest confidence.
                </p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="icon" style="background-color: #e0f7fa;">
                        <img src="../Health_Care/img/tay.png" alt="Heart Icon">
                    </div>
                    <h2>5000+</h2>
                    <p>Happy Patients</p>
                </div>
                <div class="card">
                    <div class="icon" style="background-color: #ffebee;">
                        <img src="../Health_Care/img/Hospital.png" alt="Hospital Icon">
                    </div>
                    <h2>200+</h2>
                    <p>Hospitals</p>
                </div>
                <div class="card">
                    <div class="icon" style="background-color: #fff8e1;">
                        <img src="../Health_Care/img/Drugstore.png" alt="Laboratory Icon">
                    </div>
                    <h2>1000+</h2>
                    <p>Laboratories</p>
                </div>
                <div class="card">
                    <div class="icon" style="background-color: #e8f5e9;">
                        <img src="../Health_Care/img/doctor.png" alt="Doctor Icon">
                    </div>
                    <h2>700+</h2>
                    <p>Expert Doctors</p>
                </div>
            </div>
        </div>
    </section>

<footer class="footer">
    <div class="container">
        <div class="footer-column">
            <h4>Healthcare</h4>
            <p>&copy; 2022 BRIX<br>All Rights Reserved</p>
        </div>
        <div class="footer-column">
            <h4>Product</h4>
            <ul>
                <li><a href="#">Features</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Case Studies</a></li>
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Updates</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h4>Company</h4>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Culture</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h4>Support</h4>
            <ul>
                <li><a href="#">Getting Started</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Server Status</a></li>
                <li><a href="#">Report a Bug</a></li>
                <li><a href="#">Chat Support</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h4>Follow Us</h4>
            <ul class="social-links">
                <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i> LinkedIn</a></li>
                <li><a href="#"><i class="fab fa-youtube"></i> YouTube</a></li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>