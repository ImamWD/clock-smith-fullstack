<?php

$getCart = "SELECT products.name as prodName, products.price as prodPrice, products.image as prodImage FROM `cart`  JOIN products ON products.id=cart.product_id
WHERE user_id = '$userId' ";


$res = mysqli_query($conn, $getCart);
$cart = mysqli_fetch_all($res);