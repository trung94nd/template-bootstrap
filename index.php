<?php
    include ('header.php');
    include ('./function.php');
    $arr = shownews();
 ?>
<main class="main">
    <div class="main-header">
        <div class="main-header-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="banner-background">
                    </div>
                    <div class="content-post">
                        <p>This background image should be a little wider as a large monitors display e.g. 1950px</p>
                        <p> The height has been set here to 550px, but can obviously be changed to fit requirements</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid customize-contact">
            <div class="row">
                <div class="col-sm-8 col-md-8">
                    <p>Curabitur nulla tellus tor ames a in curabitur pede. Idet mollisi eros dis orci congue elis et.</p>
                </div>
                <div class="col-sm-4 col-md-4 text-right">
                    <a href="#">CONTACT US TODAY</a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="main-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 margin-bottom-30 text-center">
                        <div class="item-service">
                            <div class="col-sm-4 col-xs-4 offset-0 ">
                                <div class="img-service">
                                    <a href="#"><img src="../../../public/images/product_1.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="col-sm-8 col-xs-8 padding-left-20 offset-0  text-left">
                                <h3 class="title-service offset-0"><a href="#">Service 1</a></h3>
                                <p class="describe-service">Nullamlacus dui ipsum cons eque loborttis non euisque morbi penas dapi bulum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 margin-bottom-30 text-center">
                        <div class="item-service">
                            <div class="col-sm-4 col-xs-4 offset-0 ">
                                <div class="img-service">
                                    <a href="#"><img src="../../../public/images/product_1.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="col-sm-8 col-xs-8 padding-left-20 offset-0  text-left">
                                <h3 class="title-service offset-0"><a href="#">Service 2</a></h3>
                                <p class="describe-service">Nullamlacus dui ipsum cons eque loborttis non euisque morbi penas dapi bulum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 margin-bottom-30 text-center">
                        <div class="item-service">
                            <div class=" col-sm-4 col-xs-4 offset-0 ">
                                <div class="img-service">
                                    <a href="#"><img src="../../../public/images/product_1.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="col-sm-8 col-xs-8 padding-left-20 offset-0  text-left">
                                <h3 class="title-service offset-0"><a href="#">Service 3</a></h3>
                                <p class="describe-service">Nullamlacus dui ipsum cons eque loborttis non euisque morbi penas dapi bulum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content-footer">
            <h2 class="title-header text-center">
                <label>NEWS</label>
            </h2>
            <div class="container-fluid">
                <div class="row">
                    <?php
                        foreach ($arr as $key => $value) {
                            if ($key < 6) {
                     ?>
                        <div class="col-md-4 col-sm-6 margin-bottom-30 text-center">
                            <div class="item-product">
                                <div class="product-img">
                                    <a href="blog-detail.php<?php echo "?id=".$value['id'] ?>"><img src="<?php echo UPLOAD_PATH.$value['thumbnail'] ?>" alt=""></a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title-product offset-0"><a href="blog-detail.php<?php echo "?id=".$value['id'] ?>"><?php echo $value['title'] ?></a></h3>
                                    <div class="describe-product">
                                        <p><?php echo $value['summary'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }} ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include ('footer.php'); ?>