<?php
    include ('./header.php');
    include('./function.php');
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if ($_GET['search'] == '') {
            $data = [];
            $_SESSION['searchErr'] = "Không có dữ liệu mà bạn tìm kiếm.";
        } else{
            $data = searchnews($_GET['search']);
        }
    }
 ?>
<main class="main">
    <div class="container">
        <div class="main-content">
            <div class="grid-breadcrumb">
                <ol class="breadcrumb customize-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="./search.php">Blog</a></li>
                </ol>
            </div>
            <div class="col-sm-8 pd-0">
                <?php
                    echo isset($_SESSION['searchErr']) ? $_SESSION['searchErr'] : '';
                    session_destroy();
                    foreach ($data as $value) {
                 ?>
                    <div class="post-item">
                        <div class="col-sm-4">
                            <a class="img-item"><img src="<?php echo UPLOAD_PATH.$value['thumbnail'] ?>" alt=""></a>
                        </div>
                        <div class="col-sm-8 pd-0">
                            <div class="post-describe">
                                <h3 class="title-post"><?php echo $value['title'] ?></h3>
                                <time datetime="2011-01-12">January 12th, 2011</time>
                                <div class="describe-content">
                                    <p><?php echo $value['summary'] ?></p>
                                </div>
                                <div><a class="more" href="blog-detail.php<?php echo "?id=".$value['id'] ?>" title="">More</a></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-sm-4">
                <div class="widget-sidebar margin-bottom-30">
                    <div class="title-sidebar">DANH MUC</div>
                    <nav class="widget-menu-list">
                        <ul class="list-unstyled">
                            <li>
                                <a href="" title="">Danh muc demo</a>
                            </li>
                            <li>
                                <a href="" title="">Danh muc demo</a>
                            </li>
                            <li>
                                <a href="" title="">Danh muc demo</a>
                            </li>
                            <li>
                                <a href="" title="">Danh muc demo</a>
                            </li>
                            <li>
                                <a href="" title="">Danh muc demo</a>
                            </li>
                            <li>
                                <a href="" title="">Danh muc demo</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="newshot">
                    <div class="title-neswhot">NEWS HOT</div>
                    <div class="post-item">
                        <div class="col-sm-8 pd-0">
                            <div class="post-describe">
                                <h3 class="title-post">Demo Text 3</h3>
                                <time datetime="2011-01-12">January 12th, 2011</time>
                            </div>
                        </div>
                        <div class="col-sm-4 pd-right-0">
                            <a class="img-item-newshot"><img src="../../public/images/product_1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="col-sm-8 pd-0">
                            <div class="post-describe">
                                <h3 class="title-post">Demo Text 3</h3>
                                <time datetime="2011-01-12">January 12th, 2011</time>
                            </div>
                        </div>
                        <div class="col-sm-4 pd-right-0">
                            <a class="img-item-newshot"><img src="../../public/images/product_1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="col-sm-8 pd-0">
                            <div class="post-describe">
                                <h3 class="title-post">Demo Text 3</h3>
                                <time datetime="2011-01-12">January 12th, 2011</time>
                            </div>
                        </div>
                        <div class="col-sm-4 pd-right-0">
                            <a class="img-item-newshot"><img src="../../public/images/product_1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="col-sm-8 pd-0">
                            <div class="post-describe">
                                <h3 class="title-post">Demo Text 3</h3>
                                <time datetime="2011-01-12">January 12th, 2011</time>
                            </div>
                        </div>
                        <div class="col-sm-4 pd-right-0">
                            <a class="img-item-newshot"><img src="../../public/images/product_1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="col-sm-8 pd-0">
                            <div class="post-describe">
                                <h3 class="title-post">Demo Text 3</h3>
                                <time datetime="2011-01-12">January 12th, 2011</time>
                            </div>
                        </div>
                        <div class="col-sm-4 pd-right-0">
                            <a class="img-item-newshot"><img src="../../public/images/product_1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
 <?php include ('footer.php'); ?>