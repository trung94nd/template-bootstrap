            <div class="col-sm-4">
                <div class="widget-sidebar margin-bottom-30">
                    <div class="title-sidebar">DANH MUC</div>
                    <nav class="widget-menu-list">
                        <ul class="list-unstyled">
                            <?php

                                foreach (showcategories() as $category) {
                             ?>
                                <li>
                                    <a href="./blog-category.php<?php echo "?id=".$category['id'] ?>" title=""><?php echo $category['name'] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
                <div class="newshot">
                    <div class="title-neswhot">NEWS HOT</div>
                    <?php
                        foreach (shownewshot() as $newhot) {
                     ?>
                        <div class="post-item">
                            <div class="col-sm-8 pd-0">
                                <div class="post-describe">
                                    <h3 class="title-post"><a href="./blog-detail.php<?php echo "?id=".$newhot['id'] ?>" title=""><?php echo $newhot['title'] ?></a></h3>
                                    <time datetime="2011-01-12">January 12th, 2011</time>
                                </div>
                            </div>
                            <div class="col-sm-4 pd-right-0">
                                <a href="./blog-detail.php<?php echo "?id=".$newhot['id'] ?>" class="img-item-newshot"><img src="<?php echo UPLOAD_PATH.$newhot['thumbnail'] ?>" alt=""></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</main>