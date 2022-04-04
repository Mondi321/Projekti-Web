<?php
    require_once '../controllers/blog.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $delete = new Blog;
    $delete->delete($id);
?>