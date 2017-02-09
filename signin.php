<?php
    include('./function.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['inputEmail'])) {
            $email_error = "Email is required";
        }elseif (!filter_var($_POST['inputEmail'], FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
        }
        if (empty($_POST['inputPassword'])) {
            $passwordErr = "Password is required";
        }
        if(!empty($_POST['inputEmail']) && !empty($_POST['inputPassword']) && filter_var($_POST['inputEmail'], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST['inputEmail'];
            $password = $_POST['inputPassword'];
            $users = checksignin($email, $password);

            if($users){
                $_SESSION['login_user'] = $email;
                $roles = checkrole($_SESSION['login_user']);
                if ($roles) {
                    header("location: /admin-news.php");
                }else{
                    header("location: /blog.html");
                }
            }else {
                $error = "Email or Password is invalid";
            }
        }
    }include('./signin.html');
 ?>