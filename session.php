<?php
    include('./config.php');
    include('./function.php');
    session_start();

    $user_check = $_SESSION['login_user'];
    if(checksigninemail($user_check)){
        header("location:admin-news.php");
    }else{
        header("location:signin.php");
    }
?>