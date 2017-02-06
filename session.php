<?php
    include('./config.php');
    include('./function.php');
    session_start();

    $user_check = $_SESSION['login_user'];
    if(checksigninemail($user_check)){
        $signin_session = array('firstname' => 3 ) and  array('lastname' => 4);
    }else{
        header("location:signin.php");
    }
?>