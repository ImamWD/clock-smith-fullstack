<?php
session_start();
require_once('./connect.php');


$userId = $_SESSION['user']['id'];
$prodId= $_GET['id'];

$insert = "INSERT INTO `cart`(`user_id`, `product_id`) VALUES('$userId','$prodId')";

mysqli_query($conn, $insert);
header("location: ../shop.php")
?>