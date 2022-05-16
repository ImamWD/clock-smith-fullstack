<?php 
session_start();
require_once("./includes/connect.php");
require_once('./includes/getProducts.php');
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
    <h3 class="h3-sec4 h2-sec2">Popular Items</h3>
    <p class="sec4-para sec1-para">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

    <div class="container-lg">
        <div class="row">
        <?php 
            foreach($products as $prod) {
                ?>
                    <a href="Product.php?id=<?=$prod[0]?>" class="col-4 add-to-cart item">

                        <img src="imgs/<?=$prod[3]?>" title="" alt="" class="image" style="width: 100%">
                        <div class="orange-line"></div>
                        <div class="orange-div"> <span class="Add-to">Add to cart</span></div>
                        <p class="sec2-para1 sec4-para1 clock-name"><?=$prod[1]?></p>
                        <p class="sec2-para2 sec4-para1 sal"><?=$prod[2]?><span>$</span></p>

                    </a>
                <?php } ?>
        </div>
    </div>

    <div class="container-lg">
        <div class="row">
            <a href="javascript: " class="col-4 add-to-cart item">
                <img src="imgs/xpopular4.png" title="" alt="" class="image">
                <div class="orange-line"></div>
                <div class="orange-div"> <span class="Add-to">Add to cart</span></div>
                <p class="sec2-para1 sec4-para1 clock-name">Thermo Ball Etip Gloves</p>
                <p class="sec2-para2 sec4-para1 sal">390.743$</p>
            </a>
            <a href="javascript: " class="col-4 add-to-cart item">
                <img src="imgs/xpopular5.png" title="" alt="" class="image">
                <div class="orange-line"></div>
                <div class="orange-div"> <span class="Add-to">Add to cart</span></div>
                <p class="sec2-para1 sec4-para1 clock-name">Thermo Ball Etip Gloves</p>
                <p class="sec2-para2 sec4-para1 sal">230.743$</p>
            </a>
            <a href="javascript: " class="col-4 add-to-cart item">
                <img src="imgs/xpopular6.png" title="" alt="" class="image">
                <div class="orange-line"></div>
                <div class="orange-div">
                    <span class="Add-to">Add to cart</span></div>
                <p class="sec2-para1 sec4-para1 clock-name">Thermo Ball Etip Gloves</p>
                <p class="sec2-para2 sec4-para1 sal">450.743$</p>
            </a>
        </div>
    </div>

</section>

<div id="carouselExampleCaptions" class="carousel slide mt-5 mb-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" style="background-color: #ff2020; " data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" style="background-color: #ff2020; " data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" style="background-color: #ff2020; " data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container-fluid">
                <div class="row">
                    <a class="col-3 item"  href="javascript: "><img  src="imgs/ShopImgs/CR-1.jpg" style="width: 100%" class="d-block img-item col-3 image" alt="...">
                        <hr>
                        <p class="clock-name" style="font-size: 12px;color: #141517;text-align: center" >CR-0322511109109 Certina Aqua DS Action</p>
                        <p class="sal" style="color: #ff2020;text-align: center">920.777 $</p>
                    </a>
                    <a class="col-3 item" href="javascript: "><img src="imgs/ShopImgs/CR-2.jpg" style="width: 100%" class="d-block img-item col-3 image" alt="...">
                        <hr>
                        <p class="clock-name" style="font-size: 12px;color: #141517;text-align: center" >CR-0322511104109-Certina Aqua DS Action</p>
                        <p class="sal" style="color: #ff2020;text-align: center">690.777 $</p>
                    </a>
                    <a class="col-3 item" href="javascript: "><img src="imgs/ShopImgs/CR-5.jpg" style="width: 100%" class="d-block img-item col-3 image" alt="...">
                        <hr>
                        <p class="clock-name" style="font-size: 12px;color: #141517;text-align: center" >CR-0334601105700 Certina Heritage DS-8</p>
                        <p class="sal" style="color: #ff2020;text-align: center">1500.777 $</p>
                    </a>
                    <a class="col-3 item" href="javascript: "><img src="imgs/ShopImgs/CR-6.jpg" style="width: 100%" class="d-block img-item col-3 image" alt="...">
                        <hr>
                        <p class="clock-name" style="font-size: 12px;color: #141517;text-align: center" >CR-9022514101600 Certina Urban JUBILE</p>
                        <p class="sal" style="color: #ff2020;text-align: center">1000.777 $</p>
                    </a>
                </div>
            </div>
            <div class="carousel-caption d-none d-md-block">

            </div>
        </div>
        <div class="carousel-item">
            <div class="container-fluid">
                <div class="row">
                    <a class="col-3 item" href="Product.php"><img src="imgs/ShopImgs/BR-3.jpg" style="width: 100%" class="d-block img-item col-3 image" alt="...">
                        <hr>
                        <p class="clock-name" style="font-size: 12px;color: #141517;text-align: center" >BR-18729-010 Bering Women Ultra Slim</p>
                        <p class="sal" style="color: #ff2020;text-align: center">490.777 $</p>
                    </a>
                    <a class="col-3 item" href="Product.html"><img src="imgs/ShopImgs/BR-4.jpg" style="width: 100%" class="d-block img-item col-3 image" alt="...">
                        <hr>
                        <p class="clock-name" style="font-size: 12px;color: #141517;text-align: center" >BR-18729-010 Bering Women Ultra Slim</p>
                        <p class="sal" style="color: #ff2020;text-align: center">1050.777 $</p>
                    </a>
                    <a class="col-3 item" href="Product.html"><img src="imgs/ShopImgs/BR-7.jpg" style="width: 100%" class="d-block img-item col-3 image" alt="...">
                        <hr>
                        <p class="clock-name" style="font-size: 12px;color: #141517;text-align: center" >BR-18226-369 Bering Women Classic</p>
                        <p class="sal" style="color: #ff2020;text-align: center">620.777 $</p>
                    </a>
                    <a class="col-3 item" href="Product.html"><img src="imgs/ShopImgs/BR-8.jpg" style="width: 100%" class="d-block img-item col-3 image" alt="...">
                        <hr>
                        <p class="clock-name" style="font-size: 12px;color: #141517;text-align: center" >BR-14331-307 Bering Women Solar</p>
                        <p class="sal" style="color: #ff2020;text-align: center">820.777 $</p>
                    </a>
                </div>
            </div>

            <div class="carousel-caption d-none d-md-block">

            </div>
        </div>
        <div class="carousel-item">
            <div class="container-fluid">
                <div class="row">
                    <a class="col-3 item" href="Product.html"><img src="imgs/ShopImgs/CR-9.jpg" style="width: 100%" class="d-block img-item col-3 image" alt="...">
                        <hr>
                        <p class="clock-name" style="font-size: 12px;color: #141517;text-align: center" >CR-0334601604700 Certina Heritage DS-8</p>
                        <p class="sal" style="color: #ff2020;text-align: center">120.777 $</p>
                    </a>
                </div>
            </div>
            <div class="carousel-caption d-none d-md-block">

            </div>
        </div>
    </div>
    <button class="carousel-control-prev" style="background-color: #141517;width:30px; " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden" >Previous</span>
    </button>
    <button class="carousel-control-next" style="background-color: #141517;width:30px; " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon " aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


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