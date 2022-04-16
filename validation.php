<?php
    session_start();
    require_once './controllers/controller1.php';

    if(isset($_POST['submit1'])){
        $email = $_POST['email1'];
        $password = $_POST['password1'];

        if(validateEmptyData($email,$password)){
            header("Location: signin.php");
        }else if(validateData($email,$password)){
            header("Location: views\dashboard.php");
        }else{
            echo '<script>alert("Email ose password eshte gabim!")</script>';
            echo("<script>window.location = 'signin.php';</script>");
        }
    }
    function validateEmptyData($email,$password){
        if(empty($email)||empty($password)){
            return true;
        }else {
            return false;
        }
    }
    function validateData($email,$password){
        $allUsers = new Controller1;
        $allUsers1 = $allUsers -> readData();
        foreach ($allUsers1 as $user) {
            if($user['email']==$email&&$user['password']==$password){
                $_SESSION['emri']=$user['emri'];
                $_SESSION['roli']=$user['roli'];
                return true;
            }
        }
        return false; 
    }
?>