<?php
session_start();
require_once("./connect.php");

extract($_POST);
extract($_FILES);

echo '<pre>';
echo print_r($_FILES); 
echo '<pre/>';

$imageName = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

if(!empty($name) && !empty($price))

{
    $inserProd = "INSERT INTO `products`(`name`, `price`, `image`) VALUES('$name', '$price', '$imageName') ";

if(mysqli_query($conn,$inserProd)){

    echo move_uploaded_file($tmp_name, "../imgs/$imageName");

    header("location: ../Crud.php");

}
}
else{
    // echo mysqli_error($conn);
    header("location: ../Crud.php");
}
?>