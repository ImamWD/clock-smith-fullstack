<?php



$getProduct= "SELECT * FROM `products`";

$res = mysqli_query($conn, $getProduct);

$products = mysqli_fetch_all($res);

// foreach($products as $prod) {
//     echo '<pre>';
//     echo print_r($prod); 
//     echo '<pre/>';
// }



?>