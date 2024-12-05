<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/animations.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/ContactUs.css">
    <link rel="stylesheet" href="css/footer.css" />
</head>
    <?php
        require_once './css/index.php';
        require_once './css/blogs.php';
    ?>
<body>
    <div class="contactUs_containers">
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
    <div class="hero"><img src="./img/aboutUs.png" alt="img about us "> </div>
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
            <p class="frm_text">Subscribe to our newsletter</p>
            <div class="newsletters">
                <form>
                    <input type="email" placeholder="Enter your email">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
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
    </div>
</body>
</html>