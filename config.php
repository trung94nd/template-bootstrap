<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_DATABASE', 'blogs');
    define('UPLOAD_PATH', './public/uploads/');
    define('IMAGES_PATH', './public/images/');
    $GLOBALS['db'] = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
 ?>