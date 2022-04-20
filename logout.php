<?php
    session_start();
    unset($_SESSION["emri"]);
    unset($_SESSION["roli"]);
    header("Location:signin.php");
?>