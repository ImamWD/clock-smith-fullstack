<?php 
session_start();
require_once("./includes/connect.php");
$prodId = $_GET['id'];

require_once('./includes//getThisProduct.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Table with Add and Delete Row Feature</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/crud-css.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
<div class="container-lg" style="padding-top: 100px;padding-bottom:50px ">
    <form id="edit" action="includes/editProduct.php" method="post" enctype="multipart/form-data" class="my-4 py-5">
        <h3 class="text-center text-primary text-capitalize">edit this product</h3>
        <div class="mb-3">
        <input type="text" class="form-control" hidden name="id" value="<?=$product['id']?>" >
            <label for="exampleFormControlInput1" class="form-label">product name</label>
            <input type="text" class="form-control" name="name" value="<?=$product['name']?>" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">product price</label>
            <input type="text" class="form-control" name="price" value="<?=$product['price']?>" >
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="<?=$product['image']?>" hidden name="image1">
            <input type="file" class="form-control" value="<?=$product['image']?>" name="image">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        <button type="submit" class="btn btn-primary">EDIT</button>
    </form>
</div>
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
</body>
</html>