<?php
    require_once '../controllers/controller1.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $delete = new Controller1;

    $delete->delete($id);
?>