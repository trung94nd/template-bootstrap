<?php
    include ('./function.php');
    $id = $_GET['id'];
    $value = showgetupdatenews($id);
    $title = $value['title'];
    $content = $value['content'];
 ?>
<main class="main">
    <div class="container">
        <div class="main-content">
            <div class="grid-breadcrumb">
                <ol class="breadcrumb customize-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="./blog.php">Blog</a></li>
                    <li class="active"><a href="blog-detail.php<?php echo "?id=".$value['id'] ?>"><?php echo $title ?></a></li>
                </ol>
            </div>
            <div class="col-sm-8 pd-0">
                <div class="col-xs-12">
                    <div class="blog-detail-content">
                        <?php echo $content ?>
                    </div>
                </div>
            </div>