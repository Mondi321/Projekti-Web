<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produkti</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/products_view.css">
</head>
<body>
    <?php
        require_once '../controllers/produktet.php';
        include '../includes/header.php';

        if (isset($_GET['id'])){
            $id = $_GET['id'];
        }
        $edit = new Produktet;
        $e = $edit->edit($id);
        $e['foto'] = '.'.$e['foto'];
    ?>
    <nav class="navbar">
        <div id="close-navbar" class="fas fa-times"></div>
        <a href="../index.php">home</a>
        <a href="../product.php">products</a>
        <a href="../about.php">about us</a>
        <a href="../contact.php">contact us</a>
    </nav>
    <div id="productView">
        <?php
            echo '  <div class="produktiFoto">
                        <img src="'.$e['foto'].'">
                    </div>';
        ?>
        <div class="produktiDetajet">
            <?php
                echo '  <h3>'.$e['brendi'].'</h3>
                        <p class ="p1">'.$e['pershkrimi'].'</p>
                        <p class = "p2">'.$e['cmimiPaZbritje'].'€</p>
                        <button>Buy Now</button>
                        <hr>
                        <div class="prod">
                            <div class="prod1">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                <p class = "p3">Free <br> Shipping</p>
                            </div>
                            <div class="prod1">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <p class = "p3">30 Day <br> Returns</p>
                            </div>
                            <div class="prod1">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                <p class = "p3">100% <br> Secure <br> Checkout </p>
                            </div>
                        </div>';
            ?>
            
        </div>
    </div>
    <script>
        let navbar = document.querySelector('.navbar');

        document.querySelector('#menu-btn').onclick = () =>{
        navbar.classList.toggle('active');
        }

        document.querySelector('#close-navbar').onclick = () =>{
        navbar.classList.remove('active');
        }

        let searchForm = document.querySelector('.search-form');

        document.querySelector('#search-btn').onclick = () =>{
        searchForm.classList.toggle('active');
        };
    </script>
</body>
</html>