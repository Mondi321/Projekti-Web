<?php
    require_once '../controllers/reviews.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $delete = new Reviews;
    $delete->delete($id);
?>