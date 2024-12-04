<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/index.css">
    <title>eDoc</title>
    <style>
        table{
            animation: transitionIn-Y-bottom 0.5s;
        }
    </style>
        
</head>
<body>
    
    <div class="full-height">
        <center>
        <table border="0">
            <tr>
                <td width="80%">
                    <font class="edoc-logo">edoc.PN</font>
                    <font class="edoc-logo-sub">| Live for life</font>
                </td>
                <td width="10%">
                   <a href="login.php"  class="non-style-link"><p class="nav-item">LOGIN</p></a>
                </td>
                <td  width="10%">
                    <a href="signup.php" class="non-style-link"><p class="nav-item" style="padding-right: 10px;">REGISTER</p></a>
                </td>
            </tr>
            
            <tr>
                <td  colspan="3">
                    <p class="heading-text">Avoid Hassles & Delays.</p>

                </td>
            </tr>
            <tr>
                <td  colspan="3">
                    <p class="sub-text2">How is health today, Sounds like not good!<br>Don't worry. Find your doctor online Book as you wish with eDoc. <br>
                    We offer you a free doctor channeling service, Make your appointment now.</p>
                </td>
            </tr>
            <tr>
                
                <td colspan="3">
                    <center>
                    <a href="login.php" >
                        <input type="button" value="Make Appointment" class="login-btn btn-primary btn" style="padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;">
                    </a>
                </center>
                </td>
                
            </tr>
            <tr>
                <td colspan="3">
                   
                </td>
            </tr>
        </table>
        <p class="sub-text2 footer-hashen">A Web Solution by Hashen.</p>
    </center>
    
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/animations.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <?php
    require_once './css/index.php';
    ?>

    <title>eDoc</title>
    <style>
        table {
            animation: transitionIn-Y-bottom 0.5s;
        }
        
        /* General styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        h2 {
            color: #005c57;
            text-align: center;
            margin: 20px 0;
        }

        p {
            margin: 0 0 10px;
            color: #555;
            font-size: 14px;
        }

        /* Services Section */
        .services__session {
            padding: 40px 20px;
        }

        .infor__title {
            margin-bottom: 30px;
        }

        .services__list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            justify-items: center;
        }

        .service__item {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .service__item:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 18px;
            color: #005c57;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 14px;
            color: #555;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007e85;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #005c57;
        }

        /* Modal Styles */
        .modal-content {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .modal-header {
            background-color: #007e85;
            color: #fff;
            padding: 15px;
            border-bottom: none;
        }

        .modal-title {
            font-size: 20px;
        }

        .modal-body {
            padding: 20px;
        }

        .modal-body h6 {
            font-size: 16px;
            color: #005c57;
            margin-top: 15px;
            margin-bottom: 10px;
        }

        .modal-body ul {
            padding-left: 20px;
            margin-bottom: 20px;
        }

        .modal-body ul li {
            margin-bottom: 5px;
            font-size: 14px;
        }

        .modal-body form {
            margin-top: 20px;
        }

        .modal-body form input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .modal-body form button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007e85;
            color: #fff;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .modal-body form button:hover {
            background-color: #005c57;
        }

        .btn-close {
            background: none;
            border: none;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .services__list {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .service__item {
                width: 90%;
            }

            .modal-body form input {
                width: calc(100% - 10px);
            }
        }
    </style>
</head>

<body>
    <div class="full-height">
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
    </div>
    <div class="baner__session">
        <div class="baner__text">
            <h1>
                Providing Quality Healthcare for a Brighter and Healthy Future
            </h1>
            <h2>A digital platform for medical documentation</h2>
            <button class="btn btn-primary">Appointments</button>
        </div>
    </div>
    <div class="infor__session">
        <center>
            <div class="infor__title">
                <h2>Our result in numbers</h2>
            </div>
            <div class="infor__list">
                <div class="infor__item">
                    <div class="infor__item__number"><span>99</span>%</div>
                    <div class="infor__item__text">
                        <h3>Customer satisfaction</h3>
                    </div>
                </div>

                <div class="infor__item">
                    <div class="infor__item__number"><span>15</span>k</div>
                    <div class="infor__item__text">
                        <h3>Online Patients</h3>
                    </div>
                </div>

                <div class="infor__item">
                    <div class="infor__item__number"><span>12</span>k</div>
                    <div class="infor__item__text">
                        <h3>Patients Recareved</h3>
                    </div>
                </div>

                <div class="infor__item">
                    <div class="infor__item__number"><span>240</span>%</div>
                    <div class="infor__item__text">
                        <h3>Company Growth</h3>
                    </div>
                </div>
            </div>
        </center>
    </div>
    <div class="services__session">
        <center>
            <div class="infor__title">
                <h2>Services we provide</h2>
            </div>
            <div class="services__list">
                <div class="service__item">
                    <div class="card" style="width: 18rem">
                        <img
                            class="card-img-top"
                            src="./img/dentist-checking-patients-teeth.jpg"
                            alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Dental treatments</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make
                                up the bulk of the card's content.
                            </p>
                            <a href="#" class="btn btn-primary">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="service__item">
                    <div class="card" style="width: 18rem">
                        <img
                            class="card-img-top"
                            src="./img/dentist-checking-patients-teeth.jpg"
                            alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Bones treatments</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make
                                up the bulk of the card's content.
                            </p>
                            <a href="#" class="btn btn-primary">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="service__item">
                    <div class="card" style="width: 18rem">
                        <img
                            class="card-img-top"
                            src="./img/dentist-checking-patients-teeth.jpg"
                            alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Diagnosis</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make
                                up the bulk of the card's content.
                            </p>
                            <a href="#" class="btn btn-primary">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="service__item">
                    <div class="card" style="width: 18rem">
                        <img
                            class="card-img-top"
                            src="./img/dentist-checking-patients-teeth.jpg"
                            alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Cardiology</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make
                                up the bulk of the card's content.
                            </p>
                            <a href="#" class="btn btn-primary">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="service__item">
                    <div class="card" style="width: 18rem">
                        <img
                            class="card-img-top"
                            src="./img/dentist-checking-patients-teeth.jpg"
                            alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Surgery</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make
                                up the bulk of the card's content.
                            </p>
                            <a href="#" class="btn btn-primary">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="service__item">
                    <div class="card" style="width: 18rem">
                        <img
                            class="card-img-top"
                            src="./img/dentist-checking-patients-teeth.jpg"
                            alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Eye care</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make
                                up the bulk of the card's content.
                            </p>
                            <a href="#" class="btn btn-primary">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>
    </div>
    <section class="team">
        <h2>Meet our team members</h2>
        <p>Learn more about the dedicated professionals bringing great results.</p>
        <div class="team-grid">
            <!-- Team member card -->
            <div class="team-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTrnn9Wh4DnVQ5f9wmaOxVILGDEWnTGBwk1Q&s" alt="Team Member">
                <h3>John Carter</h3>
                <p>CEO & Co-Founder</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, autem.</p>
            </div>
            <!-- Repeat for other members -->
            <div class="team-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTrnn9Wh4DnVQ5f9wmaOxVILGDEWnTGBwk1Q&s" alt="Team Member">
                <h3>Sophia Moore</h3>
                <p>Marketing Specialist</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, autem.</p>
            </div>
            <!-- Add more team members here -->
        </div>
    </section>

    <section class="testimonials">
        <h2>What our clients say</h2>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <p>"An amazing service!"</p>
                <h4>Emily Johnson</h4>
                <p>Client</p>
            </div>
            <div class="testimonial-card">
                <p>"One of a kind service!"</p>
                <h4>Michael Brown</h4>
                <p>Client</p>
            </div>
            <div class="testimonial-card">
                <p>"The best service!"</p>
                <h4>Sarah Davis</h4>
                <p>Client</p>
            </div>
        </div>
    </section>

    <section class="trusted-companies">
        <h2>Trusted by 10,000+ companies around the world</h2>
        <div class="companies-logos">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWJpwUvZMFKp_kXyJA2yd8zulrzNfK4ZIOgQ&s" alt="Google">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfS0jNFDznKpvTDW4dZQvNKS1nw7WJ7rC1VA&s" alt="Facebook">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Logo_of_YouTube_%282015-2017%29.svg/753px-Logo_of_YouTube_%282015-2017%29.svg.png" alt="YouTube">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuBI2KVWv2BVSrhpjaWAxnJ2z5FctP0b47jg&s" alt="Pinterest">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Webflow_logo.svg/1280px-Webflow_logo.svg.png" alt="Webflow">
        </div>
    </section>

</body>
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

</html>