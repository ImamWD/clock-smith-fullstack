<?php



$getProduct= "SELECT * FROM `products` where id ='$prodId'";

$res = mysqli_query($conn, $getProduct);

$product = mysqli_fetch_assoc($res);

// foreach($products as $prod) {
//     echo '<pre>';
//     echo print_r($prod); 
//     echo '<pre/>';
// }



?>