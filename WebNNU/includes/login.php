<?php
session_start();
require_once("./connect.php");

extract($_POST);

// echo $email;
// echo $password;
if(!empty($email) || !empty($password))

{
    $login = "SELECT * FROM `users` WHERE `email`='$email'";

    $res = mysqli_query($conn,$login);
    $data = mysqli_fetch_assoc($res);

    if(mysqli_num_rows($res)){

        if($password==$data['password']){
            unset($_SESSION['msg']);
            unset($_SESSION['error']);
            $_SESSION['user'] = $data;
            header("location: ../index.php");
        }
        else {
            $_SESSION['error'] = "wrong password <a href='#log'>login again</a>";
            unset($_SESSION['msg']);
            header("location: ../LOGIN.php");

    }}
    else{
        $_SESSION['error'] = "wrong email <a href='#login'>login again</a>";
        unset($_SESSION['msg']);
        header("location: ../LOGIN.php");
    }
}
else{
    $_SESSION['error'] = "the input must be not empty <a href='#log'>login again</a>";
    unset($_SESSION['msg']);
    header("location: ../LOGIN.php");
}
?>