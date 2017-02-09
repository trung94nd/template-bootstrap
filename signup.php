<?php
    include './function.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['firstname'])) {
            $Firstname = 'Firstname is required';
        }
        if (empty($_POST['lastname'])) {
            $Lastname = 'Lastname is required';
        }
        if (empty($_POST['email'])) {
            $email_error = "Email is required";
        }elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
        }elseif (checksignupemail($_POST['email'])) {
            $email_error = "Email already exists";
        }
        if (empty($_POST['brtday'])) {
            $brtdayErr = 'Birthday is required';
        }
        if (empty($_POST['password'])) {
            $passwordErr = "Password is required";
        }
        if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && !empty($_POST['brtday']) && !empty($_POST['password']) && !checksignupemail($_POST['email'])) {
            $users = insertsignup($_POST);
            if ($users) {
                $signupErr = 'Sign Up Success';
            }else{
                $signupErr = 'Sign up failed';
            }
        }

    }include './signup.html';
 ?>