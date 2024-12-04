<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/animations.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>
    <?php
        require_once './css/index.php';
    ?>
<body>
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
        <img src="./img/aboutUs.png" alt="img about us ">
    </header>
    <div>
        <p> Get in Touch </p>
        <h1> Contact Us </h1>
        <form action="/action_page.php">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" value="John" placeholder="Enter your first name "><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" value="Doe" placeholder="Enter your last name"><br><br>
            <label for="lname">Email:</label><br>
            <input type="text" id="lname" name="lname" value="Doe" placeholder="Enter your email"><br><br>
            <label for="lname">Phone number:</label><br>
            <input type="text" id="lname" name="lname" value="Doe" placeholder="Enter your phone number"><br><br>
            <textarea name="messages" id=""> Messages </textarea>
            <input type="submit" value="Submit">
        </form> 
    </div>
</body>
</html>