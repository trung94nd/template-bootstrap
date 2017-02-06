<?php
    include './function.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['inputFirstname'])) {
            $Firstname = 'Firstname is required';
        }
        if (empty($_POST['inputLastname'])) {
            $Lastname = 'Lastname is required';
        }
        if (empty($_POST['inputEmail'])) {
            $email_error = "Email is required";
        }elseif (!filter_var($_POST['inputEmail'], FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
        }elseif (checksignupemail($_POST['inputEmail'])) {
            $email_error = "Email already exists";
        }
        if (empty($_POST['inputBirthday'])) {
            $brtdayErr = 'Birthday is required';
        }
        if (empty($_POST['inputPassword'])) {
            $passwordErr = "Password is required";
        }
        if (!empty($_POST['inputFirstname']) && !empty($_POST['inputLastname']) && !empty($_POST['inputEmail']) && filter_var($_POST['inputEmail'], FILTER_VALIDATE_EMAIL) && !empty($_POST['inputBirthday']) && !empty($_POST['inputPassword']) && !checksignupemail($_POST['inputEmail'])) {
            $firstname = $_POST['inputFirstname'];
            $lastname = $_POST['inputLastname'];
            $email = $_POST['inputEmail'];
            $password = $_POST['inputPassword'];
            $password = md5($password);
            $brtday = $_POST['inputBirthday'];
            $gender = $_POST['gender'];
            $users = insertsignup($firstname,$lastname,$email,$password,$brtday,$gender);
            if ($users) {
                $signupErr = 'Sign Up Success';
            }else{
                $signupErr = 'Sign up failed';
            }
        }

    }include './signup.html';
 ?>