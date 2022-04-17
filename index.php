<?php
    require_once 'controllers/produktet.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">

    <title>ORAteam</title>
</head>
<body>
    

    <header id="faqja1">
        <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <nav>
                <h1 class="brand"><a href="index.php">Or<span>a</span></a></h1>
                <ul class="nav-items">
                    <li class="active-nav-item">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="product.php">Products</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            
            <div class="nav_icons">
                <a href="signin.php" class="icon_item">
                    <i class="far fa-user"></i>
                </a>
                <a href="#" class="icon_item">
                    <i class="fas fa-search search-btn"></i>
                </a>
                <a href="#" class="icon_item">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cart_total">0</span>
                </a>
                
            </div>
        </nav>
            <div class="search-overlay">
            </div>
            <div class="search-popup">
               <form class="search-form">
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Search....">
                     <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
                  </div>
               </form>
            </div>
            
            <video src="img/Pexels Videos 1034068.mp4" muted autoplay loop></video>
        </div>
        <div class="text">
            <h1 class="f1h1">THE WORLD'S BEST WATCH BRANDS<br> IN OUR STORE</h1>
                <a href="product.php">SHOP NOW</a>
        </div>
    
    </header>

    <div id="faqja2">
        <div class="brendet">
            <ul>
                <li>BRANDS</li>
                <li><a href="#"></a>Rolex</li>
                <li><a href="#"></a>Hublot</li>
                <li><a href="#"></a>Audemars Piguet</li>
                <li><a href="#"></a>Cartier</li>
                <li><a href="#"></a>Patek Philippe</li>
                <li><a href="#"></a>Bulgari</li>
            </ul>
        </div>

        <div class="img-slider">

            <?php
                $a = 1;
                $controller = new Produktet;
                $slideshow1 = $controller->readDataS1();
                for($i = 0; $i < count($slideshow1); $i++){
                        echo   '<div class="slide '.(($a == 1)?'active':"").'">
                                <img src="'.$slideshow1[$i]['foto'].'" alt="Rolex Foto">
                                <div class="info">
                                    <h2>'.$slideshow1[$i]['brendi'].'</h2>
                                    <p>'.$slideshow1[$i]['pershkrimi'].'</p>
                                </div>
                            </div>';
                            $a++;
                }
            ?>

            <!-- <div class="slide active">
              <img src="img/foto1.jpg" alt="Rolex Foto">
              <div class="info">
                <h2>ROLEX</h2>
                <p>Discover the broad selection of Rolex watches to find a perfect combination of style and functionality.</p>
              </div>
            </div> -->
            <!-- <div class="slide">
              <img src="img/foto2.jpg" alt="Casio foto">
              <div class="info">
                <h2>CASIO</h2>
                <p>Casio’s EDIFICE collection reflects a distinct sense of style by providing men with features that are ideal for professional and weekend lifestyles.</p>
              </div>
            </div> -->
            <!-- <div class="slide">
              <img src="img/foto3.jpg" alt="Offer foto">
              <div class="info">
                <h2>OFFER</h2>
                <p>Get 20% Off Your First Order</p>
              </div>
            </div> -->
            
            <div class="navigation">
              <div class="btn active"></div>
              <div class="btn"></div>
              <div class="btn"></div>
            </div>
            <a href="#">SHOP NOW</a>
        </div>
    </div>
    
    <div id="faqja3">
        <h1>Most Popular Watches</h1>
        <hr>
        <div class="produktet">

            <?php 
                $fotot1 = new Produktet;
                $produktet1= $fotot1->readData();
                for($i = 0; $i < count($produktet1); $i++){
                    $url = "views/products_view.php?id=".$produktet1[$i]['ID_produkti'];
                    echo '<div class="produkti">
                            <div class="foto">
                                <img src="'.$produktet1[$i]['foto'].'" alt="Hublot foto">
                                <span><input type="button" value="More Details" onclick="window.location=\''.$url.'\'"></span>
                            </div>
                            <div class="pershkrimi">
                                <h3>'.$produktet1[$i]['brendi'].'</h3>
                                <p>'.$produktet1[$i]['pershkrimi'].'</p>
                                <p>'.$produktet1[$i]['cmimiPaZbritje'].'€'.'</p>
                                <button type="button" onclick="addtocart()">Add to Cart</button>
                            </div>
                            
                        </div>';
                    
                }
            ?>

            <!-- <div class="produkti">
                <div class="foto">
                    <img src="img/foto4.jpg" alt="Hublot foto">
                    <span><input type="button" value="More Details"></span>
                </div>
                <div class="pershkrimi">
                    <h3>Hublot</h3>
                    <p>Classic Fusion</p>
                    <p>999.50€</p>
                    <button type="button" onclick="addtocart()">Add to Cart</button>
                </div>
                
            </div> -->
            <!-- <div class="produkti">
                <div class="foto">
                    <img src="img/foto5.jpg" alt="Casio foto">
                    <span><input type="button" value="More Details"></span>
                </div>
                <div class="pershkrimi">
                    <h3>Casio</h3>
                    <p>Casio Edifice</p>
                    <p>1,100.99€</p>
                    <button type="button" onclick="addtocart()">Add to Cart</button>
                </div>
            </div> -->
            <!-- <div class="produkti">
                <div class="foto">
                    <img src="img/foto6.jpg" alt="Citizen foto">
                    <span><input type="button" value="More Details"></span>
                </div>
                <div class="pershkrimi">
                    <h3>Citizen</h3>
                    <p>PCAT Atomic Timekeeping</p>
                    <p>1,400.99€</p>
                    <button type="button" onclick="addtocart()">Add to Cart</button>
                </div>
            </div> -->
            <!-- <div class="produkti">
                <div class="foto">
                    <img src="img/foto7.jpg" alt="Patek Philippe foto">
                    <span><input type="button" value="More Details"></span>
                </div>
                <div class="pershkrimi">
                    <h3>Patek Philippe</h3>
                    <p>Nautilus</p>
                    <p>1,000.99€</p>
                    <button type="button" onclick="addtocart()">Add to Cart</button>
                </div>
            </div> -->
            <!-- <div class="produkti">
                <div class="foto">
                    <img src="img/foto8.jpg" alt="Audemars Piguet foto">
                    <span><input type="button" value="More Details"></span>
                </div>
                <div class="pershkrimi">
                    <h3>Audemars Piguet</h3>
                    <p>Royal Oak Offshore</p>
                    <p>800.99€</p>
                    <button type="button" onclick="addtocart()">Add to Cart</button>
                </div>
            </div> -->
            <!-- <div class="produkti">
                <div class="foto">
                    <img src="img/foto9.jpg" alt="Patek Philippe foto">
                    <span><input type="button" value="More Details"></span>
                </div>
                <div class="pershkrimi">
                    <h3>Patek Philippe</h3>
                    <p>Calatrava</p>
                    <p>2,100.99€</p>
                    <button type="button" onclick="addtocart()">Add to Cart</button>
                </div>
            </div> -->
            <!-- <div class="produkti">
                <div class="foto">
                    <img src="img/foto10.jpg" alt="Cartier foto">
                    <span><input type="button" value="More Details"></span>
                </div>
                <div class="pershkrimi">
                    <h3>Cartier</h3>
                    <p>Ballon Bleu de Cartier</p>
                    <p>1,555.99€</p>
                    <button type="button" onclick="addtocart()">Add to Cart</button>
                </div>
            </div> -->
            <!-- <div class="produkti">
                <div class="foto">
                    <img src="img/foto11.jpg" alt="Cartier foto">
                    <span><input type="button" value="More Details"></span>
                </div>
                <div class="pershkrimi">
                    <h3>Cartier</h3>
                    <p>Ballon Bleu de Cartier</p>
                    <p>1,630.99€</p>
                    <button type="button" onclick="addtocart()">Add to Cart</button>
                </div>
            </div> -->
            <!-- <div class="produkti">
                <div class="foto">
                    <img src="img/foto12.jpg" alt="Cartier foto">
                    <span><input type="button" value="More Details"></span>
                </div>
                <div class="pershkrimi">
                    <h3>Cartier</h3>
                    <p>Tank Louis</p>
                    <p>990.99€</p>
                    <button type="button" onclick="addtocart()">Add to Cart</button>
                </div>
            </div> -->
        </div>
    </div>

    <div id="faqja4">
        <h1>PRODUCTS ON SALE</h1>
        <hr>
        <div class="slide-container">
            <i class="fas fa-arrow-circle-left arrow fa-3x" id="slide-left" ></i>
            <div class="foto-slider" id="slider">

                <?php
                    $fotot2 = new Produktet;
                    $produktet2 = $fotot2->readData1();
                    for($i = 0; $i < count($produktet2); $i++){
                        echo '
                            <div class="foto-slider-foto">
                                <a href="views/products_view.php?id='.$produktet2[$i]['ID_produkti'].'"><img src="'.$produktet2[$i]['foto'].'" alt="Casio foto"></a>
                                <div class="product-details">
                                    <h2>'.$produktet2[$i]['brendi'].'</h2>
                                    <p> <span>'.$produktet2[$i]['cmimiPaZbritje'].'€'.'</span> '.$produktet2[$i]['cmimiMeZbritje'].'€'.'</p>
                                    <button type="button" onclick="addtocart();">Add to Cart</button>
                                </div>
                            </div>
                        ';
                    }
                ?>
                
                <!-- <div class="foto-slider-foto">
                    <img src="img/foto14.jpg" alt="Casio foto">
                    <div class="product-details">
                        <h2>Casio</h2>
                        <p> <span>804.99€</span> 700.00€</p>
                        <button type="button" onclick="addtocart();">Add to Cart</button>
                    </div>
                </div> -->
                <!-- <div class="foto-slider-foto">
                    <img src="img/foto16.jpg" alt="Hublot foto">
                    <div class="product-details">
                        <h2>Hublot</h2>
                        <p> <span>1200.99€</span> 1004.99€</p>
                        <button type="button" onclick="addtocart();">Add to Cart</button>
                    </div>
                </div> -->
                <!-- <div class="foto-slider-foto">
                    <img src="img/foto17.jpg" alt="Hublot foto">
                    <div class="product-details">
                        <h2>Hublot</h2>
                        <p> <span>900.00€</span> 840.90€</p>
                        <button type="button" onclick="addtocart();">Add to Cart</button>
                    </div>
                </div> -->
                <!-- <div class="foto-slider-foto">
                    <img src="img/foto19.jpg" alt="Hanowa foto">
                    <div class="product-details">
                        <h2>Hanowa</h2>
                        <p> <span>500.49€</span> 440.25€</p>
                        <button type="button" onclick="addtocart();">Add to Cart</button>
                    </div>
                </div> -->
                <!-- <div class="foto-slider-foto">
                    <img src="img/foto20.jpg" alt="Maurice de Mauriac foto">
                    <div class="product-details">
                        <h2>Maurice de Mauriac</h2>
                        <p> <span>789.99€</span> 709.99€</p>
                        <button type="button" onclick="addtocart();">Add to Cart</button>
                    </div>
                </div> -->
                <!-- <div class="foto-slider-foto">
                    <img src="img/foto21.jpg" alt="Tudor foto">
                    <div class="product-details">
                        <h2>Tudor</h2>
                        <p> <span>786.99€</span> 725.00€</p>
                        <button type="button" onclick="addtocart();">Add to Cart</button>
                    </div>
                </div> -->
                <!-- <div class="foto-slider-foto">
                    <img src="img/foto22.jpg" alt="Fossil foto">
                    <div class="product-details">
                        <h2>Fossil</h2>
                        <p> <span>400.00€</span> 350.00€</p>
                        <button type="button" onclick="addtocart();">Add to Cart</button>
                    </div>
                </div> -->
                <!-- <div class="foto-slider-foto">
                    <img src="img/foto23.jpg" alt="Adam foto">
                    <div class="product-details">
                        <h2>Adam</h2>
                        <p> <span>499.99€</span> 329.99€</p>
                        <button type="button" onclick="addtocart();">Add to Cart</button>
                    </div>
                </div> -->
            </div>
            <i class="fas fa-arrow-circle-right fa-3x arrow" id="slide-right" class = "arrow"></i>
        </div>
    </div>

    <div id="faqja5">
        <div class="brand-list">
            <div class="brand">
                <a href="https://www.rolex.com/">
                    <img src="img/rolex.jpg" alt="Rolex brand">
                </a>
            </div>
            <a><i class="fas fa-times fa-lg"></i></a>
            <div class="brand">
                <a href="https://www.hublot.com/en-int/?country=AL">
                    <img src="img/hublot.jpg" alt="Hublot brand">
                </a>
            </div>
            <a><i class="fas fa-times fa-lg"></i></a>
            <div class="brand">
                <a href="https://www.audemarspiguet.com/com/en/home.php">
                    <img src="img/ap.png" alt="Audemars Piguet brand">
                </a>
            </div>
            <a><i class="fas fa-times fa-lg"></i></a>
            <div class="brand">
                <a href="https://www.cartier.com/en-us/watches/all-collections/">
                    <img src="img/cartier.png" alt="Cartier brand">
                </a>
            </div>
            <a><i class="fas fa-times fa-lg"></i></a>
            <div class="brand">
                <a href="https://www.patek.com/en/home">
                    <img src="img/patek-philipe.png" alt="Patek Philippe brand">
                </a>
            </div>
            <a><i class="fas fa-times fa-lg"></i></a>
            <div class="brand">
                <a href="https://www.bulgari.com/en-int/">
                    <img src="img/bulgari.png" alt="Bulgari brand">
                </a>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <button id="top">
        <i class="fas fa-arrow-up"></i>
    </button>

<script src="js/main.js"></script>
</body>
</html>