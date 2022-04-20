<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet1.css">
    <title>Sign In</title>
</head>

<?php
    session_start();
    require_once './controllers/controller1.php';
    
    $menu = new Controller1();
    if(isset($_POST['submit'])){
        $menu->insert($_POST);
    }

    if(isset($_SESSION['emri'])){
        return header('Location: views/dashboard.php');
    }
?>

<body>
    <div class="form-container sign-in-form">
        <div class="form-box sign-in-box">
            <h2>Login</h2>
            <form method = "POST" action="validation.php">
                <div class="field">
                    <i class="fas fa-at"></i>
                    <input name = "email1" id="emaillog" type="text" placeholder="Email ID" required>
                </div>
                <div class="field">
                    <i class="fas fa-unlock-alt"></i>
                    <input name = "password1" id="passwordlog" class="password-input" type="password" placeholder="Password" autocomplete = "off" required>
                    <div class="eye">
                        <i class="far fa-eye-slash"></i>
                    </div>
                </div>
                <div class="forgot-link">
                    <a href="">Forgot password?</a>
                </div>
                <input name = "submit1" class="submit-button" type="submit" value="Login" >
            </form>
        </div>
        <div class="imgBox sign-in-imgBox">
            <div class="sliding-link">
                <p>Don't have an account?</p>
                <span class="sign-up-button">Sign up</span>
            </div>
            <img src="img/signin.jpg" alt="">
        </div>
    </div>

    <div class="form-container sign-up-form">
        <div class="imgBox sign-up-imgBox">
            <div class="sliding-link">
                <p>Already a member?</p>
                <span class="sign-in-button">Sign in</span>
            </div>
            <img src="img/signup.jpg" alt="">
        </div>
        <div class="form-box sign-up-box">
            <h2>Sign up</h2>
            <form method = "POST" onsubmit="event.preventDefault(); validateSignUp();">
                <div class="field">
                    <i class="fas fa-user"></i>
                    <input name = "emri" id="name" type="text" placeholder="Full name" required>
                </div>
                <div class="field">
                    <i class="fas fa-at"></i>
                    <input name = "email" id="email" type="text" placeholder="Email ID" required>
                </div>
                <div class="field">
                    <i class="fas fa-phone"></i>
                    <input name = "numriTel" type="text" placeholder="Mobile Number" id="mobile" required>
                </div>
                <div class="field">
                    <i class="fas fa-unlock-alt"></i>
                    <input name = "password" id="password" type="password" placeholder="Password" autocomplete = "off" required>
                </div>
                <div class="field">
                    <i class="fas fa-unlock-alt"></i>
                    <input name = "cpassword" id="cpassword" type="password" placeholder="Confirm password" autocomplete = "off" required>
                </div>
                <input name = "submit" class="submit-button" type="submit" value="Sign up" >
            </form>
        </div>
    </div>

    <script src="js/main1.js"></script>
    <script src="js/validimi.js"></script>
</body>
</html>

