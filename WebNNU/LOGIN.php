<?php

session_start();

// echo '<pre>';
// echo print_r($_SESSION['user']); 
// echo '<pre/>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clock Smith</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- start navbar  -->
<?php  
require_once('./navbar.php');
?>
<!-- end navber  -->
<section class="w-100 vh-100 center head-background mb-5 p-5 justify-content-center flex-column"  >
<h1 class="start-head d-block">LOG IN</h1>
<div>
    <?php
        if(isset($_SESSION['msg'])){
    ?>
        <p class="alert alert-success"><?=$_SESSION['msg']?></p>
    <?php
        }
    ?>
    <?php
        if(isset($_SESSION['error'])){
    ?>
        <p class="alert alert-danger"><?=$_SESSION['error']?></p>
    <?php
        }
    ?>
</div>
</section>
<section class="container" id="container">
    <div class="form-container sign-up-container">
        <form  method="post" action="includes/addUser.php" id="lo">
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span class="sp">or use your email for registration</span>
            <label>
                <input type="text" name="name" placeholder="Name" />
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <button type="submit" id="sin-sub" name="signUp">Sign Up</button>
            </label>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="includes/login.php" method="post" id="log">
            <h1>Log in</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>
            <label>
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password"password placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button type="submit" name="Log-sub" id="Login-id">Log In</button>
            </label>

        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please log in with your personal info</p>
                <button class="ghost" id="signIn">Log In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</section>
<footer class="w-100">
    <div class="container-lg ">
        <div class="row">
            <div class="col-3">
                <a class="clock" href="index.html">Clock <span class="smith-header">smith</span></a>

                <a href="#" class="footer-para">Asorem ipsum adipolor sdit amet, consectetur adipisicing elitcf sed do eiusmod tem.</a>
            </div>
            <div class="col-3">
                <h4 class="footer-title">Quick Links</h4>
                <a href="#" class="footer-item">About</a>
                <a href="#" class="footer-item">Offers & Discounts</a>
                <a href="#" class="footer-item">Get Coupon</a>
                <a href="#" class="footer-item">Contact Us</a>
            </div>
            <div class="col-3">
                <h4 class="footer-title"> New Products</h4>
                <a href="#" class="footer-item">Woman Cloth</a>
                <a href="#" class="footer-item">Fashion Accessories</a>
                <a href="#" class="footer-item"> Man Accessories</a>
                <a href="#" class="footer-item">Rubber made Toys</a>
            </div>
            <div class="col-3">
                <h4 class="footer-title">Support</h4>
                <a href="#" class="footer-item">Frequently Asked Questions</a>
                <a href="#" class="footer-item">Terms & Conditions</a>
                <a href="#" class="footer-item">Privacy Policy</a>
                <a href="#" class="footer-item">Report a Payment Issue</a>
            </div>
        </div>
    </div>
    <hr class="footer-item footer-line">
    <div class="copyright">Copyright ©2022 All rights reserved </div>
</footer>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/login.js"></script>
</body>
</html>