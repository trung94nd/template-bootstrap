
<?php
    include ('admin-header.php');
    include ('admin-main-left.php');
    include('function.php');
    session_start();

    $id = $_GET['id'];
    $category = showgetupdatecategory($id);
    $name = $category['name'];
    $slug = $category['slug'];
    $description = $category['description'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (empty($_POST['name'])) {
            $nameErr = 'Title is required';
        }
        if (!empty($_POST['name'])) {
            $data = [
                'name' => $_POST['name'],
                'slug' => $_POST['slug'],
                'description' => $_POST['description'],
            ];
            if (updatecategory($id, $data)) {
                $_SESSION['message'] = "Update news success";
                header("location: ./admin-categories-news.php");
            }else{
                $_SESSION['message'] = "Update news failed";
            }
        }
    }
 ?>
<div class="form">
    <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" value="<?php echo isset($name)? $name : '' ?>" placeholder="Title">
                <span> <?php echo isset($nameErr) ? $nameErr : ''?> </span>
            </div>
        </div>
        <div class="form-group">
            <label for="slug" class="col-sm-2 control-label">Slug</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="slug" value="<?php echo isset($slug)? $slug : '' ?>" placeholder="Slug">
            </div>
        </div>
        <!-- <div class="form-group  parent">
            <label for="parent_id" class="col-sm-2 control-label">Catalog father</label>
            <div class="col-sm-6">
                <select name="parent_id" class="form-control" title="Catalog father">
                    <option value="0">Catalog father</option>
                    <option value="1">Cơ sở hạ tầng</option>
                    <option value="2">Thủ tục hành chính</option>
                </select>
            </div>
        </div> -->
        <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Describe</label>
            <div class="col-sm-6">
                <textarea name="description" class="form-control" placeholder="Describe"><?php echo isset($description)? $description : '' ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">UPDATE</button>
            </div>
        </div>
    </form>
</div>
<?php
    include ('admin-main-right.php');
    include('admin-footer.php')
?>