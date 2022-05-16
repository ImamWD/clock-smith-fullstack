<?php
session_start();
require_once("./connect.php");

extract($_POST);

// echo $name;
// echo $email;
// echo $password;
if(!empty($name) && !empty($email) && !empty($password))

{
    $inserUser = "INSERT INTO `users`(`name`, `email`, `password`) VALUES('$name', '$email', '$password') ";

if(mysqli_query($conn,$inserUser)){

    $_SESSION['msg'] = "registered success you can  <a href='#log'>login</a>";
    unset($_SESSION['error']);
    header("location: ../LOGIN.php");

}
else{
    // header("location: ");
    // echo "error";
}
}
else{
    $_SESSION['error'] = "the input must be not empty <a href='#log'>sign up again</a>";
    header("location: ../LOGIN.php");
}
?>