<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_DATABASE', 'blogs');
    $GLOBALS['db'] = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
 ?>