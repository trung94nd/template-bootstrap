<main class="main">
    <div class="container">
        <div class="main-content">
            <div class="grid-breadcrumb">
                <ol class="breadcrumb customize-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active"><a href="./blog.php">Blog</a></li>
                </ol>
            </div>
            <div class="col-sm-8 pd-0">
                <?php
                    foreach ($arr as $value) {
                 ?>
                    <div class="post-item">
                        <div class="col-sm-4">
                            <a href="blog-detail.php<?php echo "?id=".$value['id'] ?>" class="img-item"><img src="<?php echo UPLOAD_PATH.$value['thumbnail'] ?>" alt=""></a>
                        </div>
                        <div class="col-sm-8 pd-0">
                            <div class="post-describe">
                                <h3 class="title-post"><a href="blog-detail.php<?php echo "?id=".$value['id'] ?>" title=""><?php echo $value['title'] ?></a></h3>
                                <time datetime="2011-01-12">January 12th, 2011</time>
                                <div class="describe-content">
                                    <p><?php echo $value['summary'] ?></p>
                                </div>
                                <div><a class="more" href="blog-detail.php<?php echo "?id=".$value['id'] ?>" title="">More</a></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="pages text-right">
                    <nav aria-label="Page navigation">
                        <ul class="pagination customize-page">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                </div>
            </div>