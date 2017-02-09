<?php
    include ('admin-header.php');
    include('function.php');
    session_start();
    // $target_dir = "../../public/images/";
    // $target_file = $target_dir.basename($_FILES['thumbnail']["name"]);
    // $uploadok = 1;
    // $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // if(file_exists($target_file)){
    //     $imageErr = "Sorry, file already exists.";
    //     $uploadok = 0;
    // }
    // if($_FILES["thumbnail"]["size"] > 3000){
    //     $imgesErr = "Sorry, your file is too large.";
    // }
    // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    //     $imgesErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //     $uploadOk = 0;
    // }
    // if ($uploadOk == 0) {
    //     $imgesErr = "Sorry, your file was not uploaded.";
    // } else {
    //     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //         echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    //     } else {
    //         echo "Sorry, there was an error uploading your file.";
    // //     }
    // // }



    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['title'])) {
            $titleErr = 'Title is required';
        }
        if (empty($_POST['content'])) {
            $contentErr = 'Content is required';
        }

        if ($_FILES['thumbnail']) {
             if ($_FILES['thumbnail']['error'] > 0)
            {
                echo 'File Upload Bị Lỗi';
            }
            else{
                // Upload file
                move_uploaded_file($_FILES['thumbnail']['tmp_name'], UPLOAD_PATH.$_FILES['thumbnail']['name']);
                echo 'File Uploaded';
            }
        } else {
            echo 'chon file';
        }

        if (!empty($_POST['title']) && !empty($_POST['content'])) {
            $data = [
            'title' => $_POST['title'],
            'slug' => $_POST['slug'],
            'summary' => $_POST['summary'],
            'content' => $_POST['content'],
            'thumbnail' => $_FILES['thumbnail']['name']
            ];

            $newsinsert = insertnews($data);
            if ($newsinsert) {
                $_SESSION['message'] = "Add news success";
                header("location: /admin-news.php");

            }else{
                $_SESSION['message'] = "Add news failed";
            }
        }
    }
 ?>
<main class="main">
    <div class="container">
        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="thumbnail" class="col-sm-2 control-label">Ảnh bài viết</label>
                <div class="col-sm-10">
                    <div class="preview-uploader"><img class="img-preview" src=""></div>
                    <p class="clearfix"></p>
                    <input name="thumbnail" class="file-upload" type="file" placeholder="Image">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="<?php echo isset($title)? $title : '' ?>" placeholder="Title">
                    <span> <?php echo isset($titleErr) ? $titleErr : ''?> </span>
                </div>
            </div>
            <div class="form-group">
                <label for="slug" class="col-sm-2 control-label">Slug</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="slug" value="<?php echo isset($slug)? $slug : '' ?>" placeholder="Slug">
                </div>
            </div>
            <div class="form-group">
                <label for="summary" class="col-sm-2 control-label">Summary</label>
                <div class="col-sm-10">
                    <textarea name="summary" class="form-control" placeholder="Summary"><?php echo isset($summary)? $summary : '' ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="content" class="col-sm-2 control-label">Content</label>
                <div class="col-sm-10">
                    <textarea name="content" class="form-control content" placeholder="Content"><?php echo isset($content)? $content : '' ?></textarea>
                    <span> <?php echo isset($contentErr) ? $contentErr : ''?> </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Add new</button>
                </div>
            </div>
        </form>
    </div>
</main>
<?php include('admin-footer.php') ?>