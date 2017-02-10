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
        $sql = "INSERT INTO news(title,slug,category_id,summary,content,thumbnail,featured,created_at) VALUES ('${attributes['title']}','${attributes['slug']}','${attributes['category_id']}','${attributes['summary']}','${attributes['content']}','${attributes['thumbnail']}','${attributes['featured']}', '${attributes['created_at']}')";
        $result = mysqli_query($GLOBALS['db'],$sql);
        return $result;
    }
    function updatenews($id, $attributes)
    {
        $sql = "UPDATE news SET title = '${attributes['title']}', slug = '${attributes['slug']}', category_id = '${attributes['category_id']}', summary = '${attributes['summary']}', content = '${attributes['content']}', thumbnail = '${attributes['thumbnail']}', featured = '${attributes['featured']}', created_at = '${attributes['created_at']}' WHERE id = $id";
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
    function showcategorynews($category_id)
    {
        $sql = mysqli_query($GLOBALS['db'],"SELECT * FROM news WHERE category_id = $category_id ORDER BY id desc");
        $datas = [];
        while ($row = mysqli_fetch_array($sql,MYSQLI_ASSOC)) {
            $datas[] = $row;
        };
        return $datas;
    }
    function shownewshot()
    {
        $sql = mysqli_query($GLOBALS['db'],"SELECT * FROM news WHERE featured LIKE '%1%' ORDER BY id desc");
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
    function insertcategory($attributes)
    {
        $sql = "INSERT INTO categories(name,slug,description) VALUES ('${attributes['name']}','${attributes['slug']}','${attributes['description']}')";
        $result = mysqli_query($GLOBALS['db'],$sql);
        return $result;
    }
    function updatecategory($id, $attributes)
    {
        $sql = "UPDATE categories SET name = '${attributes['name']}', slug = '${attributes['slug']}', description = '${attributes['description']}' WHERE id = $id";
        $result = mysqli_query($GLOBALS['db'],$sql);
        return $result;
    }
    function deletecategory($category_id)
    {
        $sql = "DELETE categories.* FROM categories WHERE id = '$category_id'";
        $result = mysqli_query($GLOBALS['db'], $sql);
        return $result;
    }
    function showcategories()
    {
        $sql = mysqli_query($GLOBALS['db'],"SELECT * FROM categories ORDER BY id desc");
        $datas = [];
        while ($row = mysqli_fetch_array($sql,MYSQLI_ASSOC)) {
            $datas[] = $row;
        };
        return $datas;
    }
    function showgetupdatecategory($category_id)
    {
        $sql = mysqli_query($GLOBALS['db'],"SELECT * FROM categories WHERE id = '$category_id'");
        return mysqli_fetch_array($sql,MYSQLI_ASSOC);
    }

 ?>