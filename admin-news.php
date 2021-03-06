<?php
    include ('./admin-header.php');
    include ('./admin-main-left.php');
    include ('./function.php');
    session_start();
    $arr = shownews();
    echo isset($_SESSION['message']) ? $_SESSION['message'] : '' ;
    session_destroy();
 ?>

<div class="list-action">
    <a href="./admin-add-news.php" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i><font class="create-new">CREATE NEW</font></a>
</div>
    <div class="dataTable">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Picture</th>
                    <th>Title</th>
                    <th class="text-center">New Hot</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <body>
            <?php
                foreach ($arr as $value) {
                ?>
                <tr>
                    <td><img class="img-preview" src="<?php echo UPLOAD_PATH.$value['thumbnail'] ?>" alt=""></td>
                    <td><?php echo $value['title'] ?></td>
                    <td class="text-center" checkbox="checked">
                        <input type="checkbox">
                    </td>
                    <td class="text-center">
                        <a href="./admin-update-news.php<?php echo "?id=".$value['id'] ?>" class="btn btn-xs btn-default btn-update" >
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="./admin-delete-news.php<?php echo "?id=".$value['id'] ?>" class="btn btn-xs btn-default btn-delete-action">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </body>
        </table>
    </div>

<?php
    include ('./admin-main-right.php');
    include ('./admin-footer.php');
    ?>