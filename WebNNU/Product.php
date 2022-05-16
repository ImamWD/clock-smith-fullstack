<?php
session_start();
require_once("./includes/connect.php");
$prodId = $_GET['id'];
require_once('./includes/getThisProduct.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clock Smith</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- start navbar  -->
<?php  
require_once('./navbar.php');
?>
<!-- end navber  -->

<section class="w-100 product" >
    <div class="container-lg">
        <div class="row">
            <div class="col-6 ">
                <h2 class="product-name" id="clock-name"><?=$product['name']?></h2>
                <div class="d-flex">
                <h4 class="product-salary" id="price" ><?=$product['price']?> $ </h4>
                    <span  class="product-salary" style="font-size: 22px ;color: #ff2020;margin-left: 5px">$</span>
                </div>
                <p class="product-dis">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta facilis facere quasi iure minus fugit, totam tenetur. Similique dolorem commodi expedita dolore quisquam quia, voluptates blanditiis asperiores vel officiis voluptatem.</p>
               <hr>
                <div class="plus-minus d-flex">
                    <div id="minus">
                        <button>-</button>
                    </div>
                <form action="">
                    <label>
                        <input id="input-number" type="number" value="1" min="0" max="10" >
                    </label>
                </form>
                    <div id="plus">
                        <button>+</button>
                    </div>

                    <h4 class="ms-5 p-0 ">Total :</h4>
                    <h4 id="total" style="color: #ff2020;" class="ms-2">1</h4>
                    <h4 style="color: #ff2020; margin-left:5px">$</h4>
                </div>
                <div>
                    <?php
                        if(isset($_SESSION['user'])){
                    ?>
                <a href="includes/buyProduct.php?id=<?=$product['id']?>" class="by-now-button" id="by-now">Buy</a>
                <?php } ?>
                </div>
            </div>
            <div class="col-6">
                <img src="imgs/<?=$product['image']?>" id="img-clock" alt=" ">
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
<script src="js/prod.js"></script>

</body>
</html>