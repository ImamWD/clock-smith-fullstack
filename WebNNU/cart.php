<?php 
session_start();
require_once("./includes/connect.php");
$userId = $_SESSION['user']['id'];
require_once("./includes/getCart.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clock Smith</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Shop.css">
</head>
<body>
<!-- start navbar  -->
<?php  
require_once('./navbar.php');
?>
<!-- end navber  -->

<section class="sec4 mb-5" id="shop" style="margin-top: 0 ; padding-top:100px ">
    <h3 class="h3-sec4 h2-sec2">Your Cart </h3>

    <div class="container-lg">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">produtc name</th>
                <th scope="col">product price</th>
                <th scope="col">buying date </th>
                </tr>
            </thead>
            <tbody>
                <?php
                 foreach($cart as $prod){
                ?>
                <tr>
                <th scope="row"><?=$prod[0]?></th>
                <td><?=$prod[1]?></td>
                <td><img src="imgs/<?=$prod[2]?>" style="width:80px;height:80px;" alt=""></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</section>




<footer class="w-100 mt-5">
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
<script src="js/shoping.js"></script>
</body>
</html>