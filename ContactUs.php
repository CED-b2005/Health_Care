<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/animations.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/ContactUs.css">
</head>
    <?php
        require_once './css/index.php';
    ?>
<body>
    <div class="contactUs_containers">
        <header>
            <div class="header__session">
                <div class="edoc__logo">
                    <img class="logo" src="./img/unnamed.png" alt="" />
                </div>
                <div class="header__navbar__session">
                    <ul class="header__navbar">
                        <li class="header__navebar__item">
                            <a href="Home.php">Home</a>
                        </li>
                        <li class="header__navebar__item">
                            <a href="Service.php">Service</a>
                        </li>
                        <li class="header__navebar__item">
                            <a href="ContactUs.php">Contact Us</a>
                        </li>
                        <li class="header__navebar__item">
                            <a href="Blog.php">Blog</a>
                        </li>
                    </ul>
                </div>
                <div class="header__login__session">
                    <ul class="header__login">
                        <li class="header__login__item">
                            <button class="btn login_btn">
                                <a href="login.php" class="non-style-link">
                                    <p class="nav-item">LOGIN</p>
                                </a>
                            </button>
                        </li>
                        <li class="header__login__item">
                            <button class="btn login_btn">
                                <a href="signup.php" class="non-style-link">
                                    <p class="nav-item" style="padding-right: 10px;">REGISTER</p>
                                </a>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hero"><img src="./img/aboutUs.png" alt="img about us "> </div>
        </header>
        <div class="container_contacts">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <form>
            <div class="form_group">
                <div class="form_row">
                <label for="first_name">First name</label>
                <input type="text" id="first-name" placeholder="Enter your first name">
                </div>
                <div class="form_row">
                <label for="last-name">Last name</label>
                <input type="text" id="last_name" placeholder="Enter your last name">
                </div>
            </div>
            <div class="form_group">
                <div class="form_row">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form_row">
                <label for="phone">Phone number</label>
                <input type="text" id="phone" placeholder="Enter your phone number">
                </div>
            </div>
            <div class="form_group">
                <label for="topic">Choose a topic</label>
                <select id="topic">
                <option value="">Select one...</option>
                <option value="general">General Inquiry</option>
                <option value="support">Support</option>
                <option value="feedback">Feedback</option>
                </select>
            </div>
            <div class="form_group">
                <label for="message">Message</label>
                <textarea id="message" placeholder="Type your message..."></textarea>
            </div>
            <div class="form_checkbox">
                <input type="checkbox" id="terms">
                <label for="terms">I accept the terms</label>
            </div>
            <button class="btn_submit_contacts">Submit</button>
            </form>
            <div class="newsletter">
                <p>Subscribe to our newsletter</p>
                <form>
                    <input type="email" placeholder="Enter your email">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
        <footer class="footer">
            <div class="logo-section">
                <h2>Healthcare</h2>
                <p>Copyright © 2022 BRIX Templates <br> All Rights Reserved</p>
            </div>
            <div class="links-section">
                <div class="links-column">
                    <h3>Product</h3>
                    <a href="#">Features</a>
                    <a href="#">Pricing</a>
                    <a href="#">Case studies</a>
                    <a href="#">Reviews</a>
                    <a href="#">Updates</a>
                </div>
                <div class="links-column">
                    <h3>Company</h3>
                    <a href="#">About</a>
                    <a href="#">Contact us</a>
                    <a href="#">Careers</a>
                    <a href="#">Culture</a>
                    <a href="#">Blog</a>
                </div>
                <div class="links-column">
                    <h3>Support</h3>
                    <a href="#">Getting started</a>
                    <a href="#">Help center</a>
                    <a href="#">Server status</a>
                    <a href="#">Report a bug</a>
                    <a href="#">Chat support</a>
                </div>
                <div class="social-section">
                    <h3>Follow us</h3>
                    <div class="social-icons">
                        <a href="#"><i>🌐</i> Facebook</a>
                        <a href="#"><i>🐦</i> Twitter</a>
                        <a href="#"><i>📷</i> Instagram</a>
                        <a href="#"><i>🔗</i> LinkedIn</a>
                        <a href="#"><i>▶️</i> YouTube</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>