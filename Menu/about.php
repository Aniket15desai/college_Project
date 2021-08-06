<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: menu.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/menu.css">
    <link href="../Images/feeding-goa.ico" rel="icon">
</head>

<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }

    .title {
        color: grey;
        font-size: 18px;
    }

    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    .container a {
        text-decoration: none;
        font-size: 22px;
        color: black;
    }

    button:hover,
    a:hover {
        opacity: 0.7;
    }
</style>

<header class="site-header-wrap">
    <div class="site-header">
        <a href="../index.php"><img src="../Images/g1172.png" width="350px" alt='LOGO'></img></a>
    </div>
</header>

<nav id="myNav">
    <div class="menu-icon"><span class="fa fa-bars"></span></div>
    <div class="logo">अन्न दान</div>
    <div class="nav-items">
        <li><a href="menu.php">Menu</a></li>
        <div class="nav-sign user">
            <?php if (isset($_SESSION['username'])) : ?>
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?></button>
            <?php endif ?>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a href="../index.php?logout='1'">Logout</a></li>
            </div>
        </div>
        <?php if (!isset($_SESSION['username'])) : ?>
            <li class="login"><a href="../Sign Up/login.php">Login / Register</a></li>
        <?php endif ?>
    </div>

    <?php if (!isset($_SESSION['username'])) : ?>
        <li class="register"><a href="../Sign Up/login.php">Login / Register</a></li>
    <?php endif ?>

    <div class="nav-sign">
        <?php if (isset($_SESSION['username'])) : ?>
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?></button>
        <?php endif ?>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a href="../index.php?logout='1'">Logout</a></li>
        </div>
    </div>
</nav>

<body>
    <div class="container col-md-4">
        <div class="card">
            <img src="../Images/Aniket.jpg" alt="John" style="width:100%">
            <h1>Aniket Sardesai</h1>
            <p class="title">Team Leader</p>
            <p>Backend Developer</p>
            <div style="margin: 24px 0;">
                <a href="https://www.instagram.com/_aniket1501_/"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.facebook.com/aniket.sardesai.9"><i class="fa fa-facebook"></i></a>
            </div>
            <p><button href="tel:7020464331">Contact</button></p>
        </div>
        <div class="card">
            <img src="../Images/yukta.jpg" alt="Yukta" style="width:100%">
            <h1>Yukta</h1>
            <p class="title">Team Member</p>
            <p>Frontend Developer</p>
            <div style="margin: 24px 0;">
                <a href="https://www.instagram.com/yukta_1201/"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.facebook.com/yukta.nague"><i class="fa fa-facebook"></i></a>
            </div>
            <p><button href="tel:7020464331">Contact</button></p>
        </div>
        <div class="card">
            <img src="../Images/kshitija.jpg" alt="Kshitija" style="width:100%">
            <h1>Kshitija Kolambkar</h1>
            <p class="title">Team Member</p>
            <p>Frontend Developer & UX/UI Designer</p>
            <div style="margin: 24px 0;">
                <a href=""><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.facebook.com/ratnakar.kolambkar.5"><i class="fa fa-facebook"></i></a>
            </div>
            <p><button href="tel:7020464331">Contact</button></p>
        </div>
        <div class="card">
            <img src="../Images/tanvi.jpg" alt="Tanvi" style="width:100%">
            <h1>Tanvi Velip</h1>
            <p class="title">Team Member</p>
            <p>Frontend Developer</p>
            <div style="margin: 24px 0;">
                <a href="https://www.instagram.com/tanuvelip20/"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p><button href="tel:7020464331">Contact</button></p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-distributed">

        <div class="footer-left">
            <img src="../Images/feeding-goa.ico">
            <h3>Anna<span>dāna</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="Menu/menu.php">Menu</a>
                |
                <a href="Menu/about.php">About</a>
                |
                <a href="Donate/donate.php">Donate</a>
            </p>

            <p class="footer-company-name">© 2021 Anna dāna Pvt. Ltd.</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><a href="https://goo.gl/maps/ZoMsSkANPAFUKtrr9" target="_blank"><span>375 - Neha Enterprices,
                            Bldg. No. A - 1, Sector - 1</span>
                        New Vaddem, Vasco, Goa - 403802</a></p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p><a href="tel:+917020464331">+91 7020464331</a></p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:feedinggoa123@gmail.com">feedinggoa123@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                “We make a living by what we get, but we make a life by what we give.”
            </p>
            <div class="footer-icons">
                <a href="https://www.facebook.com/profile.php?id=100071043323811" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/danam_anna" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/_feedinggoa_/" target="_blank"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script src="../index.js"></script>
    <script src="js/ajax.js"></script>

</body>
<script>
    window.onscroll = function() {
        myFunction()
    };

    var navigation = document.getElementById("myNav");

    var sticky = navigation.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            navigation.classList.add("sticky");
            suggestion.classList.add("Dsticky");
        } else {
            navigation.classList.remove("sticky");
            suggestion.classList.remove("Dsticky");
        }
    }
</script>

</html>