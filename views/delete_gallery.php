<?php
    require_once '../controllers/produktet.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $delete = new Produktet;
    $delete->delete($id);
?>