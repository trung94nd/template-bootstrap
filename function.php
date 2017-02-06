<?php
    include('./config.php');

    function checksignin($email,$password)
    {
        $email = mysqli_real_escape_string($GLOBALS['db'],$email);
        $password = mysqli_real_escape_string($GLOBALS['db'],$password);
        $password = md5($password);
        $sql = "SELECT id FROM users WHERE email = '$email' and password = '$password'";
        $result = mysqli_query($GLOBALS['db'],$sql);
        return $result;
    }

    function checksigninemail($email)
    {
        $ses_sql = mysqli_query($GLOBALS['db'],"SELECT * FROM users WHERE email = '$email' ");
        return mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    }

    function insertsignup($firstname,$lastname,$email,$password,$brtday,$gender)
    {
        $password = mysqli_real_escape_string($GLOBALS['db'],$password);
        $password = md5($password);
        $sql = "INSERT INTO users(firstname,lastname,email,password,brtday,gender) VALUES('$firstname',N'$lastname','$email','$password','$brtday','$gender')";
        $result = mysqli_query($GLOBALS['db'],$sql);
        return $result;
    }

    function checksignupemail($email)
    {
        $sql = mysqli_query($GLOBALS['db'],"SELECT id,email FROM users WHERE email = '$email' ");
        $result = mysqli_fetch_array($sql,MYSQLI_ASSOC);
        if (count($result) > 0) {
            return true;
        }
        return false;
    }
 ?>