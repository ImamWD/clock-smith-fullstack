<?php
require_once("./connect.php");
extract($_POST);

echo $id;
echo $name;
echo $price;
echo $image1;

// echo '<pre>';
// echo print_r($_FILES); 
// echo '<pre/>';

echo $_FILES['image']['name'];

if($_FILES['image']['name']===''){

    $sql = "UPDATE `products` SET `name`='$name',`price`='$price'  WHERE id='$id'";

   echo  mysqli_query($conn,$sql);
    header("location: ../Crud.php");

}else{
    
$imageName = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
move_uploaded_file($tmp_name, "../imgs/$imageName");

$sql = "UPDATE `products` SET `name`='$name',`price`='$price' , `image`='$imageName'  WHERE id='$id'";

mysqli_query($conn,$sql);

header("location: ../Crud.php");
}



?>