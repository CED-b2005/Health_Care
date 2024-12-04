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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>



    <?php
    require_once './css/index.php';
    ?>

    <title>eDoc</title>
    <style>
        table {
            animation: transitionIn-Y-bottom 0.5s;
        }

        /* General styles */
        .medical-services {
            background-color: #f8f9fa;
            /* padding: 40px 20px; */
            /* margin: 40px 20px; */
        }

        .medical-services__title h2 {
            color: #005c57;
            margin-bottom: 10px;
        }

        .medical-services__list {
            display: flex;
            flex-flow: row wrap;
            padding: 0px 60px;
            /* max-width: 80%; */
        }

        .medical-services__item {
            display: flex;
            justify-content: space-around;
            width: 18rem;
            height: 37rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* margin: 40px 20px; */
        }

        /* 
        .medical-services__item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        } */

        .medical-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 40px 20px;
        }

        .medical-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .medical-card__img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .medical-card__body {
            padding: 15px;
        }

        .medical-card__title {
            font-size: 18px;
            color: #005c57;
            margin-bottom: 10px;
        }

        .medical-card__btn {
            background-color: #007e85;
            border: none;
            color: #fff;
            padding: 10px 15px;
            text-transform: uppercase;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .medical-card__btn:hover {
            background-color: #005c57;
        }

        /* Modal styles */
        .modal-content {
            border-radius: 10px;
        }

        .modal-header {
            background-color: #007e85;
            color: white;
            padding: 15px;
        }

        .modal-subtitle {
            color: #005c57;
            margin: 10px 0;
            text-align: left;
        }

        .modal-list {
            color: #005c57;
            margin: 10px 20px;
            text-align: left;
            list-style-type: none;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            font-weight: bold;

        }
        .modal-text{
            text-align: left;
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
                            <a href="index.php">Home</a>
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
    <div class="service_page">
        <center>
            <div class="medical-services__title">
                <h2>Services We Provide</h2>
                <p>Explore the wide range of medical services we offer to cater to all your health needs.</p>
            </div>
            <div class="medical-services__list">
                <!-- Dental Treatments Service -->
                <div class="medical-services__item">
                    <div class="medical-card" style="width: 18rem">
                        <img
                            class="medical-card__img"
                            src="./img/dentist-checking-patients-teeth.jpg"
                            alt="Dental Treatments" />
                        <div class="medical-card__body">
                            <h5 class="medical-card__title">Dental Treatments</h5>
                            <p class="medical-card__text">
                                We offer a variety of dental treatments including routine check-ups, fillings, cleaning, and more advanced procedures like root canals and teeth whitening. Welcome to my services
                            </p>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#dentalModal">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Dental Treatments -->
                <div class="modal fade" id="dentalModal" tabindex="-1" aria-labelledby="dentalModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="dentalModalLabel">Dental Treatment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                                <h6 class="modal-subtitle">Types of Dental Services We Provide:</h6>
                                <ul class="modal-list">
                                    <li class="modal-list__item">Routine Check-ups & Cleanings</li>
                                    <li class="modal-list__item">Tooth Fillings & Cavities</li>
                                    <li class="modal-list__item">Root Canal Therapy</li>
                                    <li class="modal-list__item">Teeth Whitening</li>
                                    <li class="modal-list__item">Cosmetic Dentistry</li>
                                </ul>
                                <p class="modal-text">Our experienced dental team ensures that you receive the best possible care in a comfortable and friendly environment. Schedule an appointment with us today!</p>
                                <h6 class="modal-subtitle">Pricing:</h6>
                                <ul class="modal-list">
                                    <li class="modal-list__item">Check-up: $50</li>
                                    <li class="modal-list__item">Cleaning: $75</li>
                                    <li class="modal-list__item">Teeth Whitening: $200</li>
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dental Treatments Service -->
                <div class="medical-services__item">
                    <div class="medical-card" style="width: 18rem">
                        <img
                            class="medical-card__img"
                            src="https://eraclinickh.com/wp-content/uploads/2023/02/Dermatology-facial-skin-treatment.png"
                            alt="Dental Treatments" />
                        <div class="medical-card__body">
                            <h5 class="medical-card__title">Dermatology Treatments</h5>
                            <p class="medical-card__text">
                                Our experienced dental team ensures that you receive the best possible care in a comfortable and friendly environment. Schedule an appointment with us today! Welcome to my hopitals.
                            </p>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#dermaModal">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Dental Treatments -->
                <div class="modal fade" id="dermaModal" tabindex="-2" aria-labelledby="dermaModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="dermaModalLabel">Dermatology Treatments</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                                <h6 class="modal-subtitle">Types of Dental Services We Provide:</h6>
                                <ul class="modal-list">
                                    <li class="modal-list__item">Skin Check-ups & Diagnostics</li>
                                    <li class="modal-list__item">Acne Treatment & Scar Removal</li>
                                    <li class="modal-list__item">Psoriasis & Eczema Management</li>
                                    <li class="modal-list__item">Skin Allergy Testing</li>
                                    <li class="modal-list__item">Cosmetic Procedures (Botox, Fillers)</li>
                                </ul>
                                <p class="modal-text">Our experienced dental team ensures that you receive the best possible care in a comfortable and friendly environment. Schedule an appointment with us today!</p>
                                <h6 class="modal-subtitle">Pricing:</h6>
                                <ul class="modal-list">
                                    <li class="modal-list__item">Skin Consultation: $70</li>
                                    <li class="modal-list__item">Acne Treatment: $150</li>
                                    <li class="modal-list__item">Cosmetic Procedure: Starting at $300</li>
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dental Treatments Service -->
                <div class="medical-services__item">
                    <div class="medical-card" style="width: 18rem">
                        <img
                            class="medical-card__img"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQq_NtDcWVmC4EJCbNEPtwIcRvbIxkJXtRKnw&s"
                            alt="Dental Treatments" />
                        <div class="medical-card__body">
                            <h5 class="medical-card__title">Anaesthetics Treatments</h5>
                            <p class="medical-card__text">
                                Our anaesthetists ensure that your surgical procedures are as comfortable and pain-free as possible. We prioritize patient safety and effective pain relief during and after surgeries.

                            </p>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#anaestheticsModal">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Dental Treatments -->
                <div class="modal fade" id="anaestheticsModal" tabindex="-1" aria-labelledby="anaestheticsModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="anaestheticsModalLabel">Anaesthetics Treatments</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                                <h6 class="modal-subtitle">Types of Anaesthetics Services We Provide:</h6>
                                <ul class="modal-list">
                                    <li class="modal-list__item">General Anaesthesia</li>
                                    <li class="modal-list__item">Local Anaesthesia</li>
                                    <li class="modal-list__item">Regional Anaesthesia (Spinal & Epidural)</li>
                                    <li class="modal-list__item">Sedation for Minor Procedures</li>
                                    <li class="modal-list__item">Pain Management</li>
                                </ul>
                                <p class="modal-text">Our anaesthetists ensure that your surgical procedures are as comfortable and pain-free as possible. We prioritize patient safety and effective pain relief during and after surgeries.</p>
                                <h6 class="modal-subtitle">Pricing:</h6>
                                <ul class="modal-list">
                                    <li class="modal-list__item">Initial Consultation: $120</li>
                                    <li class="modal-list__item">General Anaesthesia: $500</li>
                                    <li class="modal-list__item">Regional Anaesthesia: $350</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dental Treatments Service -->
                <div class="medical-services__item">
                    <div class="medical-card" style="width: 18rem">
                        <img
                            class="medical-card__img"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP7mXM5E3YyMNsT3QRb0Dl4iOGbKis5vsJNA&s"
                            alt="Dental Treatments" />
                        <div class="medical-card__body">
                            <h5 class="medical-card__title">Psychiatry Treatments</h5>
                            <p class="medical-card__text">
                                Our child psychiatrists provide a safe, supportive environment for your child’s, offering personalized care and effective treatments for a wide range of emotional and behavioral issues.
                            </p>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#dentalModal">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Dental Treatments -->
                <div class="modal fade" id="childPsychiatryModallModal" tabindex="-1" aria-labelledby="childPsychiatryModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="childPsychiatryModalLabel">Child Psychiatry Services</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                                <h6 class="modal-subtitle">Types of Child Psychiatry Services We Provide:</h6>
                                <ul class="modal-list">
                                    <li class="modal-list__item">Assessment for Behavioral Issues</li>
                                    <li class="modal-list__item">Treatment for Anxiety and Depression</li>
                                    <li class="modal-list__item">Autism Spectrum Disorder (ASD) Diagnosis</li>
                                    <li class="modal-list__item">Attention-Deficit/Hyperactivity Disorder (ADHD) Management</li>
                                    <li class="modal-list__item">Psychotherapy and Counseling</li>
                                </ul>
                                <p class="modal-text">Our child psychiatrists provide a safe, supportive environment for your child’s mental health needs, offering personalized care and effective treatments for a wide range of emotional and behavioral issues.</p>
                                <h6 class="modal-subtitle">Pricing:</h6>
                                <ul class="modal-list">
                                    <li class="modal-list__item">Initial Consultation: $150</li>
                                    <li class="modal-list__item">Therapy Session: $100</li>
                                    <li class="modal-list__item">Follow-up Consultation: $80</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Dental Treatments Service -->
                <div class="medical-services__item">
                    <div class="medical-card" style="width: 18rem">
                        <img
                            class="medical-card__img"
                            src="./img/dentist-checking-patients-teeth.jpg"
                            alt="Dental Treatments" />
                        <div class="medical-card__body">
                            <h5 class="medical-card__title">Dental Treatments</h5>
                            <p class="medical-card__text">
                                We offer a variety of dental treatments including routine check-ups, fillings, cleaning, and more advanced procedures like root canals and teeth whitening. Welcome to my services
                            </p>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#dentalModal">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Dental Treatments -->
                <div class="modal fade" id="dentalModal" tabindex="-1" aria-labelledby="dentalModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="dentalModalLabel">Dental Treatment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                                <h6 class="modal-subtitle">Types of Dental Services We Provide:</h6>
                                <ul class="modal-list">
                                    <li class="modal-list__item">Routine Check-ups & Cleanings</li>
                                    <li class="modal-list__item">Tooth Fillings & Cavities</li>
                                    <li class="modal-list__item">Root Canal Therapy</li>
                                    <li class="modal-list__item">Teeth Whitening</li>
                                    <li class="modal-list__item">Cosmetic Dentistry</li>
                                </ul>
                                <p class="modal-text">Our experienced dental team ensures that you receive the best possible care in a comfortable and friendly environment. Schedule an appointment with us today!</p>
                                <h6 class="modal-subtitle">Pricing:</h6>
                                <ul class="modal-list">
                                    <li class="modal-list__item">Check-up: $50</li>
                                    <li class="modal-list__item">Cleaning: $75</li>
                                    <li class="modal-list__item">Teeth Whitening: $200</li>
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dental Treatments Service -->
                <div class="medical-services__item">
                    <div class="medical-card" style="width: 18rem">
                        <img
                            class="medical-card__img"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP7mXM5E3YyMNsT3QRb0Dl4iOGbKis5vsJNA&s"
                            alt="Dental Treatments" />
                        <div class="medical-card__body">
                            <h5 class="medical-card__title">Dermatology Treatments</h5>
                            <p class="medical-card__text">
                                Our experienced dental team ensures that you receive the best possible care in a comfortable and friendly environment. Schedule an appointment with us today!Welcome to my hopital.
                            </p>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#dermaModal">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Dental Treatments -->
                <div class="modal fade" id="dermaModal" tabindex="-2" aria-labelledby="dermaModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="dermaModalLabel">Dermatology Treatments</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                                <h6 class="modal-subtitle">Types of Dental Services We Provide:</h6>
                                <ul class="modal-list">
                                    <li class="modal-list__item">Skin Check-ups & Diagnostics</li>
                                    <li class="modal-list__item">Acne Treatment & Scar Removal</li>
                                    <li class="modal-list__item">Psoriasis & Eczema Management</li>
                                    <li class="modal-list__item">Skin Allergy Testing</li>
                                    <li class="modal-list__item">Cosmetic Procedures (Botox, Fillers)</li>
                                </ul>
                                <p class="modal-text">Our experienced dental team ensures that you receive the best possible care in a comfortable and friendly environment. Schedule an appointment with us today!</p>
                                <h6 class="modal-subtitle">Pricing:</h6>
                                <ul class="modal-list">
                                    <li class="modal-list__item">Skin Consultation: $70</li>
                                    <li class="modal-list__item">Acne Treatment: $150</li>
                                    <li class="modal-list__item">Cosmetic Procedure: Starting at $300</li>
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dental Treatments Service -->
                <div class="medical-services__item">
                    <div class="medical-card" style="width: 18rem">
                        <img
                            class="medical-card__img"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1Mg4LVpAlsuyntPeVIqtmGGLKRk09y4_RUw&s"
                            alt="Dental Treatments" />
                        <div class="medical-card__body">
                            <h5 class="medical-card__title">Anaesthetics Treatments</h5>
                            <p class="medical-card__text">
                                Our anaesthetists ensure that your surgical procedures are as comfortable and pain-free as possible. We prioritize patient safety and effective pain relief during and after surgeries.

                            </p>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#anaestheticsModal">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Dental Treatments -->
                <div class="modal fade" id="anaestheticsModalModal" tabindex="-1" aria-labelledby="anaestheticsModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="anaestheticsModalLabel">Anaesthetics Treatments</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                                <h6 class="modal-subtitle">Types of Anaesthetics Services We Provide:</h6>
                                <ul class="modal-list">
                                    <li class="modal-list__item">General Anaesthesia</li>
                                    <li class="modal-list__item">Local Anaesthesia</li>
                                    <li class="modal-list__item">Regional Anaesthesia (Spinal & Epidural)</li>
                                    <li class="modal-list__item">Sedation for Minor Procedures</li>
                                    <li class="modal-list__item">Pain Management</li>
                                </ul>
                                <p class="modal-text">Our anaesthetists ensure that your surgical procedures are as comfortable and pain-free as possible. We prioritize patient safety and effective pain relief during and after surgeries.</p>
                                <h6 class="modal-subtitle">Pricing:</h6>
                                <ul class="modal-list">
                                    <li class="modal-list__item">Initial Consultation: $120</li>
                                    <li class="modal-list__item">General Anaesthesia: $500</li>
                                    <li class="modal-list__item">Regional Anaesthesia: $350</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dental Treatments Service -->
                <div class="medical-services__item">
                    <div class="medical-card" style="width: 18rem">
                        <img
                            class="medical-card__img"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlDXhtSn1mWZn5R56_YFdgU3nosK-vuF0-kg&s"
                            alt="Dental Treatments" />
                        <div class="medical-card__body">
                            <h5 class="medical-card__title">Psychiatry Treatments</h5>
                            <p class="medical-card__text">
                                Our child psychiatrists provide a safe, supportive environment for your child’s, offering personalized care and effective treatments for a wide range of emotional and behavioral issues.
                            </p>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#dentalModal">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Dental Treatments -->
                <div class="modal fade" id="childPsychiatryModallModal" tabindex="-1" aria-labelledby="childPsychiatryModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="childPsychiatryModalLabel">Child Psychiatry Services</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                                <h6 class="modal-subtitle">Types of Child Psychiatry Services We Provide:</h6>
                                <ul class="modal-list">
                                    <li class="modal-list__item">Assessment for Behavioral Issues</li>
                                    <li class="modal-list__item">Treatment for Anxiety and Depression</li>
                                    <li class="modal-list__item">Autism Spectrum Disorder (ASD) Diagnosis</li>
                                    <li class="modal-list__item">Attention-Deficit/Hyperactivity Disorder (ADHD) Management</li>
                                    <li class="modal-list__item">Psychotherapy and Counseling</li>
                                </ul>
                                <p class="modal-text">Our child psychiatrists provide a safe, supportive environment for your child’s mental health needs, offering personalized care and effective treatments for a wide range of emotional and behavioral issues.</p>
                                <h6 class="modal-subtitle">Pricing:</h6>
                                <ul class="modal-list">
                                    <li class="modal-list__item">Initial Consultation: $150</li>
                                    <li class="modal-list__item">Therapy Session: $100</li>
                                    <li class="modal-list__item">Follow-up Consultation: $80</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
        </center>
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
    </footer>
</body>

</html>