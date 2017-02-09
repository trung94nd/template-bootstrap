<?php
    include ('./header.php');
    include ('./function.php');
    $category_id = $_GET['id'];
    $arr = showcategorynews($category_id);
    include('./new-main-middle_column.php');
    include('./new-main-right.php');
    include('./footer.php');
 ?>