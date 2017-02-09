<?php
    include ('admin-header.php');
    include ('function.php');
    session_start();
    $arr = shownews();
    echo isset($_SESSION['message']) ? $_SESSION['message'] : '' ;
    session_destroy();
 ?>
<main class="main">
    <div class="container-fluid">
        <div class="row">
        <div class="list-action">
            <a href="./admin-add-news.php" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i> Tạo mới</a>
        </div>
            <div class="dataTable">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Picture</th>
                            <th>Title</th>
                        </tr>
                    </thead>
                    <body>
                    <?php
                        foreach ($arr as $value) {
                        ?>
                        <tr>
                            <td><img class="img-preview" src="<?php echo UPLOAD_PATH.$value['thumbnail'] ?>" alt=""></td>
                            <td><?php echo $value['title'] ?></td>
                            <td>
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
        </div>
    </div>
</main>
<?php include ('./admin-footer.php'); ?>