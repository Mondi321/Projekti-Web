<?php
    require_once '../controllers/controller4.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $delete = new Controller4;
    $delete->delete($id);
?>