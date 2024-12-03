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
    <?php
    require_once './css/index.php';
    ?>

    <title>eDoc</title>
    <style>
        table {
            animation: transitionIn-Y-bottom 0.5s;
        }
    </style>
</head>

<body>
    <div class="full-height">
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
        </header>
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
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make
                                    up the bulk of the card's content.
                                </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
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
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make
                                    up the bulk of the card's content.
                                </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
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
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make
                                    up the bulk of the card's content.
                                </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
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
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make
                                    up the bulk of the card's content.
                                </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
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
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make
                                    up the bulk of the card's content.
                                </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
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
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make
                                    up the bulk of the card's content.
                                </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
</body>

</html>