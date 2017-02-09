<?php
    include ('./header.php');
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
<?php
    include('./footer.php');
 ?>