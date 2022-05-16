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
    <!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- start navbar  -->
<?php  
require_once('./navbar.php');
?>
<!-- end navber  -->

<section class="New-perfect  w-100 ">
    <div class="container-lg">
    <div class="row ">
    <div class=" col-8">
        <div class="d-flex flex-wrap h-100 align-content-center">
        <h1 class="go-left">Select Your New Perfect Style</h1>
        <p class="sec1-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, fugiat rem placeat illum nihil asperiores repudiandae totam.</p>
        <a class="shop-button text-decoration-none" href="Shop.php">Shop Now</a>
        </div>
    </div>
    <div class="col-4">
        <img src="imgs/xwatch.png.pagespeed.ic.LlRtijfV2T%20(1).webp" class="  heartbeat float-end Rolex-img" title="New Style clock" alt="Rolex img" >
    </div>
    </div>
    </div>
</section>

<section class="New-Arrivals container-lg ">
    <div >
        <h2 class="h2-sec2">New Arrivals</h2>
    </div>
    <div class="container">
        <div class="row">
            <?php 
            foreach($products as $prod) {
                ?>
                <a class="col-4 zoom-ani text-decoration-none" href="Shop.php">
                <img src="imgs/<?=$prod[3]?>" class="sec2-img" alt="" title="" style="width: 100%">
                <p class="sec2-para1"><?=$prod[1]?></p>
                <p class="sec2-para2">$ <?=$prod[2]?></p>
            </a>
            <?php
            }

            ?>
        </div>
    </div>
</section>

<section class=sec3>

    <div class="container-fluid">
        <div class="row">
            <div class="overflow-hidden  position-relative col-6   ">
            <div class=" back-img1 zoom-out">
            </div>
            </div>
            <div class="d-inline-block col-3 overflow-hidden position-relative" href="#">
                <div class="back-img2 zoom-out ">
                </div>
            </div>
            <div class="col-3">
                <div class="overflow-hidden position-relative">
                <div class="back-img3 zoom-out">
                </div>
                </div>
                <div href="#" class="overflow-hidden position-relative">
                <div class="back-img4 zoom-out">
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec4" id="shop">
    <h3 class="h3-sec4 h2-sec2">Popular Items</h3>
    <p class="sec4-para sec1-para">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

    <div class="container-lg">
        <div class="row">
            <a href="Product.html" class="col-4 add-to-cart item">

                <img src="imgs/xpopular1.png" title="" alt="" class="image">
                <div class="orange-line"></div>
                <div class="orange-div"> <span class="Add-to">Add to cart</span></div>
                <p class="sec2-para1 sec4-para1 clock-name">Thermo Ball Etip Gloves</p>
                <p class="sec2-para2 sec4-para1 sal">450.743<span>$</span></p>

            </a>
            <a href="javascript: " class="col-4 add-to-cart item">
                <img src="imgs/xpopular2.png" title="" alt="" class="image">
                <div class="orange-line"></div>
                <div class="orange-div"> <span class="Add-to">Add to cart</span></div>
                <p class="sec2-para1 sec4-para1 clock-name">Thermo Ball Etip Gloves</p>
                <p class="sec2-para2 sec4-para1 sal">199.743$</p>

            </a>
            <a href="javascript: " class="col-4 add-to-cart item">
                <img src="imgs/xpopular3.png" title="" alt="" class="image">
                <div class="orange-line"></div>
                <div class="orange-div"> <span class="Add-to">Add to cart</span></div>
                <p class="sec2-para1 sec4-para1 clock-name">Thermo Ball Etip Gloves</p>
                <p class="sec2-para2 sec4-para1 sal">420.743 $</p>

            </a>
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
    <div class="div-button-more-products">
        <a href="Shop.html" class="More-products-button">VIEW MORE PRODUCTS</a>
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
<script src="js/shoping.js"></script>
</body>
</html>