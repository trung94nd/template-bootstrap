<?php
    include('./config.php');

    function checksignin($email,$password)
    {
        $email = mysqli_real_escape_string($GLOBALS['db'],$email);
        $password = mysqli_real_escape_string($GLOBALS['db'],$password);
        $password = md5($password);
        $sql = "SELECT id FROM users WHERE email = '".$email."' and password = '".$password."'";
        $query = mysqli_query($GLOBALS['db'],$sql);
        $result = mysqli_fetch_array($query, MYSQLI_NUM);
        if (count($result) > 0) {
            return true;
        }
        return false;

    }

    function checksigninemail($email)
    {
        $ses_sql = mysqli_query($GLOBALS['db'],"SELECT * FROM users WHERE email = '$email' ");
        return mysqli_fetch_array($sql,MYSQLI_ASSOC);
    }

    function insertsignup($attributes)
    {
        $attributes['password'] = md5($attributes['password']);
        $sql = "INSERT INTO users(firstname,lastname,email,password,brtday,gender) VALUES('${attributes['firstname']}','${attributes['lastname']}','${attributes['email']}','${attributes['password']}','${attributes['brtday']}','${attributes['gender']}')";
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
    function checkrole($email)
    {
        $sql = "SELECT permissions.id,permissions.`name` FROM permissions INNER JOIN permission_role ON permissions.id = permission_role.permission_id INNER JOIN roles ON roles.id = permission_role.role_id INNER JOIN role_user ON roles.id = role_user.role_id INNER JOIN users ON users.id = role_user.user_id WHERE users.email = '$email'";
        $result = mysqli_query($GLOBALS['db'],$sql);
        return $result;
    }
    function insertnews($attributes)
    {
        $sql = "INSERT INTO news(title,slug,summary,content,thumbnail) VALUES ('${attributes['title']}','${attributes['slug']}','${attributes['summary']}','${attributes['content']}','${attributes['thumbnail']}')";
        $result = mysqli_query($GLOBALS['db'],$sql);
        return $result;
    }
    function updatenews($id, $attributes)
    {
        $sql = "UPDATE news SET title = '${attributes['title']}', slug = '${attributes['slug']}', summary = '${attributes['summary']}', content = '${attributes['content']}', thumbnail = '${attributes['thumbnail']}' WHERE id = $id";
        $result = mysqli_query($GLOBALS['db'],$sql);
        return $result;
    }
    function deletenews($news_id)
    {
        $sql = "DELETE news.* FROM news WHERE id = '$news_id'";
        $result = mysqli_query($GLOBALS['db'], $sql);
        return $result;
    }
    function showgetupdatenews($news_id)
    {
        $sql = mysqli_query($GLOBALS['db'],"SELECT * FROM news WHERE id = '$news_id'");
        return mysqli_fetch_array($sql,MYSQLI_ASSOC);
    }
    function shownews()
    {
        $sql = mysqli_query($GLOBALS['db'],"SELECT * FROM news ORDER BY id desc");
        $datas = [];
        while ($row = mysqli_fetch_array($sql,MYSQLI_ASSOC)) {
            $datas[] = $row;
        };
        return $datas;
    }
    function searchnews($title)
    {
        $sql = mysqli_query($GLOBALS['db'],"SELECT * FROM news WHERE title LIKE '%".$title."%' ORDER BY id desc");
        $datas = [];
        while ($row = mysqli_fetch_array($sql,MYSQLI_ASSOC)) {
            $datas[] = $row;
        };
        return $datas;
    }
 ?>