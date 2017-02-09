<?php
    include ('function.php');
    session_start();
    $id = $_GET['id'];
    /*$arr = showgetupdatenews($id);*/
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $ok = $_POST['ok'];
       if ($ok == 'ok') {
          if (deletecategory($id)) {
            deletecategory($id);
            $_SESSION['message'] = "Delete success";
            header("location: /admin-categories-news.php");
          } else{
            $_SESSION['message'] = "Remove unsuccessful";
          }
       }else{
            header("location: /admin-categories-news.php");
       }
    }

 ?>
<main class="main">
    <form action="" method="post">
        <h3>ban co muon xoa ban ghi khong</h3>
        <input type="submit" name="ok"   value="ok" class="btn btn-default">
        <input type="submit"  name="ok" value="cancel" class="btn btn-default">
    </form>
</main>