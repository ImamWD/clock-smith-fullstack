<?php
require_once('./connect.php');

$prodId = $_GET['id'];

$sql = "DELETE FROM `products` WHERE id='$prodId'";

mysqli_query($conn,$sql);

header("location: ../Crud.php")


?>