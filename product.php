<?php 
    require_once 'controllers/produktet.php'; 
    require_once 'controllers/blog.php'; 
    require_once 'controllers/reviews.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
   

</head>
<body>

<!-- HEADER  -->

<?php include 'includes/header.php'; ?>

<!-- NAVBBAR -->

<nav class="navbar">
    <div id="close-navbar" class="fas fa-times"></div>
    <a href="index.php">home</a>
    <a href="#shop">shop</a>
    <a href="#gallery">gallery</a>
    <a href="about.php">about us</a>
    <a href="#arrivals">arrivals</a>
    <a href="#blogs">blogs</a>
</nav>

<!-- NAVBAR -->

<!-- HEADER -->

<!-- hOME  -->

<section class="home" id="home">

    <div class="slide active">
        <div class="content">
            <img src="img/ora9.jpeg" alt="">

            <span>new arrivals 2022</span>
            <h3>MEN</h3>
            <a href="#" class="btn">read more</a>
            <div class="controls">
                <div class="fas fa-angle-left" onclick="prev()"></div>
                <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
        </div>
        <div class="image">
            <img src="img/ora9.jpeg" alt="">
        </div>
    </div>

    <div class="slide">
        <div class="content">
            <img src="img/orawomen.jpg" alt="">
            <span>new arrivals 2022</span>
            <h3>WOMEN</h3>
            <a href="#" class="btn">read more</a>
            <div class="controls">
                <div class="fas fa-angle-left" onclick="prev()"></div>
                <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
        </div>
        <div class="image">
            <img src="https://images.unsplash.com/photo-1451290337906-ac938fc89bce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1018&q=80" alt="">
        </div>
    </div>

    <div class="slide">
        <div class="content">
            <img src="img/orakids.png" alt="">
            <span>new collections</span>
            <h3>KIDS</h3>
            <a href="#" class="btn">read more</a>
            <div class="controls">
                <div class="fas fa-angle-left" onclick="prev()"></div>
                <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
        </div>
        <div class="image">
            <img src="img/orakids.png" alt="">
        </div>
    </div>

</section>

<!-- home section ends -->

<!-- Kategorite  -->

<section class="category">

    <a href="#" class="box">  
        <p>MEN</p>
    </a>

    <a href="#" class="box">
        <p>WOMEN</p>
    </a>

    <a href="#" class="box">
        <p>KIDS</p>
    </a>

    

</section>

<!-- category section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="content">
        <span>why choose us?</span>
        <h3>Achieve the impossible</h3>
        <p>Your watch has been carefully designed to perfectly match its strap, but don’t let that stop you adding your own flair and experimenting with further combinations.</p>
        <a href="#" class="btn">read more</a>
    </div>
    
</section>

<!-- about section ends -->

<!-- shop section starts  -->



<section class="shop" id="shop">

    <div class="heading">
        <h1>featured products</h1>
        <p>Commemorating historic moments in time and built with passion, Time Capsule celebrates Bremont's Limited Edition Collections.</p>
    </div>

    <div class="swiper products-slider">

        <div class="swiper-wrapper">

            <?php
                $swiper1 = new Produktet;
                $sw1 = $swiper1->readDataSw1();
                for($i = 0; $i < count($sw1); $i++){
                    echo '<div class="swiper-slide slide">
                                <div class="image">
                                    <span class="discount">-'.$sw1[$i]['zbritja'].'%</span>
                                    <a href="views/products_view.php?id='.$sw1[$i]['ID_produkti'].'"><img src="'.$sw1[$i]['foto'].'" alt=""></a>
                                    <div class="icons">
                                        <a href="#" class="fas fa-shopping-cart"></a>
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <p>'.$sw1[$i]['brendi'].'</p>
                                    <div class="price">$'.$sw1[$i]['cmimiMeZbritje'].' <span>$'.$sw1[$i]['cmimiPaZbritje'].'</span></div>
                                </div>
                            </div>';
                }
            ?>
            
            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="https://cdn.shopify.com/s/files/1/0046/3454/2129/products/FTW1166-3.jpg?v=1574094833" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>LS model</p>
                    <div class="price">$36.99 <span>$39.99</span></div>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-50%</span>
                    <img src="https://cdn.shopify.com/s/files/1/0046/3454/2129/products/G1047-Casio-1.jpg?v=1614316249" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>G-shock</p>
                    <div class="price">$29.99 <span>$69.99</span></div>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="	https://cdn.shopify.com/s/files/1/0046/3454/2129/products/FTW7018-3P-1.jpg?v=1630514877" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Casio G</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-50%</span>
                    <img src="https://cdn.shopify.com/s/files/1/0046/3454/2129/products/FTW7021-1.jpg?v=1630514828" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p> Fossil Black </p>
                    <div class="price">$99.99 <span>$199.99</span></div>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-10%</span>
                    <img src="	https://cdn.shopify.com/s/files/1/0046/3454/2129/products/TWEG19801_360x.jpg?v=1629483636" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Timex Fashion</p>
                    <div class="price">$44.99 <span>$49.99</span></div>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="	https://cdn.shopify.com/s/files/1/0046/3454/2129/products/FTW7009-3P-1.jpg?v=1630513964" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Dial Grey</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-15%</span>
                    <img src="	https://cdn.shopify.com/s/files/1/0046/3454/2129/products/ME3110-3_360x.jpg?v=1573322602" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>FossilMan</p>
                    <div class="price">$76.99 <span>$89.99</span></div>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="	https://cdn.shopify.com/s/files/1/0046/3454/2129/products/ME3098-3_360x.jpg?v=1573322223" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>The Watch</p>
                    <div class="price">$67.99 <span>$89.99</span></div>
                </div>
            </div> -->

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- shop section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <div class="heading">
        <h1>our gallery</h1>
        <p>As always, each mechanical watch is engineered to the highest standards of durability, legibility and precision.</p>
    </div>

    <div class="lightbox">

        <?php
            $gallery = new Produktet;
            $g1 = $gallery->readDataG();
            for ($i = 0; $i < count($g1); $i++){
                echo '<a href="'.$g1[$i]['foto'].'"><img src="'.$g1[$i]['foto'].'" alt=""></a>';
            }
        ?>

        <!-- <a href="img/ora1.jpg"><img src="img/ora1.jpg" alt=""></a>
        <a href="img/ora8.jpeg"><img src="img/ora8.jpeg" alt=""></a>
        <a href="img/ora10.jpeg"><img src="img/ora10.jpeg" alt=""></a>
        <a href="img/ora5.jpeg"><img src="img/ora5.jpeg" alt=""></a>
        <a href="img/ora9.jpeg"><img src="img/ora9.jpeg" alt=""></a>
        <a href="img/ora7.jpeg"><img src="img/ora7.jpeg" alt=""></a> -->
    </div>

</section>

<!-- gallery section ends -->

<!-- BEST SELLERS  -->

<section class="team" id="team">

    <div class="heading">
        <h1>Best Sellers</h1>
        <p>Timeless techniques. Modern technology. Fashion-forward finishes.  </p>
    </div>

    <div class="box-container">

        <?php
            $bs = new Produktet;
            $bestS = $bs->readDataBS();
            for ($i = 0; $i < count($bestS); $i++){
                echo    '<div class="box">
                            <div class="image">
                                <a href="views/products_view.php?id='.$bestS[$i]['ID_produkti'].'"><img src="'.$bestS[$i]['foto'].'" alt=""></a>
                            </div>
                            <div class="content">
                                <h3>'.$bestS[$i]['brendi'].'</h3>
                                <p>'.$bestS[$i]['cmimiPaZbritje'].'€</p>
                            </div>
                        </div>';
            }
        ?>
        
        <!-- <div class="box">
            <div class="image">
                <img src="img/ora3.jpg" alt="">
              
            </div>
            <div class="content">
                <h3>Casio</h3>
                <p>150.99</p>
            </div>
        </div> -->

        <!-- <div class="box">
            <div class="image">
                <img src="img/ora14.jpg" alt="">
               
                
            </div>
            <div class="content">
                <h3>Anne Klein Rose Gold  </h3>
                <p>89.99</p>
            </div>
        </div> -->

        <!-- <div class="box">
            <div class="image">
                <img src="img/ora12.jpg" alt="">
                
            </div>
            <div class="content">
                <h3>Timex Fashion Green</h3>
                <p>139.99</p>
            </div>
        </div> -->

    </div>

</section>

<!-- BEST SELLERS -->

<!-- NEW ARRIAVLS  -->

<section class="arrivals" id="arrivals">

    <div class="heading">
        <h1>new arrivals</h1>
        <p>Discover the latest luxury mechanical timepieces from OraTeam, designed and manufactured in Britain.</p>
    </div>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">
            
            <?php
                $na = new Produktet;
                $newArrivals = $na->readDataNA();
                for($i = 0; $i < count($newArrivals) ; $i++){
                    echo '  <div class="swiper-slide slide">
                                <div class="image">
                                    <a href="views/products_view.php?id='.$newArrivals[$i]['ID_produkti'].'"><img src="'.$newArrivals[$i]['foto'].'" alt=""></a>
                                </div>
                                <div class="content">
                                    <p>'.$newArrivals[$i]['brendi'].'</p>
                                    <div class="price">$'.$newArrivals[$i]['cmimiMeZbritje'].' <span>$'.$newArrivals[$i]['cmimiPaZbritje'].'</span></div>
                                    <a href="#" class="btn">add to cart</a>
                                </div>
                            </div>';
                }
            ?>
            
            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/ora13.jpg" alt="">
                </div>
                <div class="content">
                    <p>Anne Klein Diamond</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/ora6.jpeg" alt="">
                </div>
                <div class="content">
                    <p>Rado Classic</p>
                    <div class="price">$32.99 <span>$89.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/ora11.jpg" alt="">
                </div>
                <div class="content">
                    <p>Silver Match</p>
                    <div class="price">$200.99 <span>$222.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/ora15.jpg" alt="">
                </div>
                <div class="content">
                    <p>FossilQ Hybrid</p>
                    <div class="price">$89.99 <span>$175.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/ora16.jpg" alt="">
                </div>
                <div class="content">
                    <p>Remember ME Digital</p>
                    <div class="price">$128.99 <span>$179.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/ora17.jpg" alt="">
                </div>
                <div class="content">
                    <p>beauty products</p>
                    <div class="price">$111.99 <span>$125.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/ora18.jpg" alt="">
                </div>
                <div class="content">
                    <p>Digital Fossil Black</p>
                    <div class="price">$59.99 <span>$79.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/ora19.jpg" alt="">
                </div>
                <div class="content">
                    <p>Digital Fossil</p>
                    <div class="price">$49.99 <span>$99.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div> -->

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
    
</section>

<!-- NEW ARRIA -->

<!-- reviews   -->

<section class="reviews">

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <?php
                $reviews = new Reviews;
                $rev = $reviews->readData();
                for ($i = 0;$i < count($rev); $i++){
                    echo '  <div class="swiper-slide slide">
                                <div class="user">
                                    <img src="'.$rev[$i]['foto'].'" alt="">
                                    <div class="info">
                                        <h3>'.$rev[$i]['emri'].'</h3>
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="text">'.$rev[$i]['pershkrimi'].'</p>
                            </div>';
                }
            ?>


            <!-- <div class="swiper-slide slide">
                <div class="user">
                    <img src="img/pic-1.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. In quis ipsa aspernatur incidunt iusto veniam cumque error quaerat officia. Aspernatur?</p>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="user">
                    <img src="img/pic-4.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum similique, numquam non, quasi, voluptatibus perspiciatis fugiat incidunt veniam nulla in aut aliquid necessitatibus nobis reiciendis ullam explicabo. Nulla, rem adipisci.</p>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="user">
                    <img src="img/pic-5.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit aliquid mollitia voluptatem alias illo officiis.</p>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="user">
                    <img src="img/pic-2.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. In quis ipsa aspernatur incidunt iusto veniam cumque error quaerat officia. Aspernatur?</p>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="user">
                    <img src="img/pic-3.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sequi minima sed obcaecati iste beatae quo praesentium, deleniti earum velit labore nobis voluptates a quam veniam delectus fugiat! Saepe, eos!</p>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="user">
                    <img src="img/pic-6.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. In quis ipsa aspernatur incidunt iusto veniam cumque error quaerat officia. Aspernatur?</p>
            </div> -->
                
        
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

</section>

<!-- reviews   -->



<!-- BLOG  -->

<section class="blogs" id="blogs">

    <div class="heading">
        <h1>our daily blogs</h1>
        <p>We design and build watches that are made for everyday adventures.?</p>
    </div>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">


            <?php
                $blog = new Blog;
                $blog1 = $blog->readData();
                for($i = 0; $i < count($blog1); $i++){
                    echo '  <div class="swiper-slide slide">
                                <div class="image">
                                    <img src="'.$blog1[$i]['foto'].'" alt="">
                                    <div class="icons">
                                        <a href="#"> <i class="fas fa-user"></i> by '.$blog1[$i]['user'].' </a>
                                        <a href="#"> <i class="fas fa-clock"></i> '.$blog1[$i]['data'].' </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3>'.$blog1[$i]['titulli'].'</h3>
                                    <p>'.$blog1[$i]['pershkrimi'].'</p>
                                    <a href="#" class="btn">read more</a>
                                </div>
                            </div>';
                }
            ?>

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/teammet.jpg" alt="">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by OraTeam </a>
                        <a href="#"> <i class="fas fa-clock"></i> 21st december, 2021 </a>
                    </div>
                </div>
                <div class="content">
                    <h3>Team meetings</h3>
                    <p> While designers have heavily influenced design thinking, through ongoing experimentation, it’s evolved to be useful in more sectors than one.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/wrist-watches.jpg" alt="">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by OraTeam</a>
                        <a href="#"> <i class="fas fa-clock"></i> 15th septmber, 2021 </a>
                    </div>
                </div>
                <div class="content">
                    <h3>Quality over quantity</h3>
                    <p>Individually assembled by hand, our practice merges timeless techniques with modern technology to bring you watches that are built to look good and last.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/ecommerce-black-friday.jpg" alt="">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by OraTeam </a>
                        <a href="#"> <i class="fas fa-clock"></i> 21st may, 2021 </a>
                    </div>
                </div>
                <div class="content">
                    <h3>Sales</h3>
                    <p>Tons of different brands are slashing prices on some of their most popular products and services — offering sales you definitely don’t want to miss out on.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/blog1.jpg" alt="">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                        <a href="#"> <i class="fas fa-clock"></i> 21st may, 2021 </a>
                    </div>
                </div>
                <div class="content">
                    <h3>blog title goes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, debitis?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/blog2.jpg" alt="">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                        <a href="#"> <i class="fas fa-clock"></i> 21st may, 2021 </a>
                    </div>
                </div>
                <div class="content">
                    <h3>blog title goes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, debitis?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div> -->

            <!-- <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/blog3.jpg" alt="">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                        <a href="#"> <i class="fas fa-clock"></i> 21st may, 2021 </a>
                    </div>
                </div>
                <div class="content">
                    <h3>blog title goes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, debitis?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div> -->

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- BLOG -->

<!-- FOOTER  -->


<?php include 'includes/footer.php'; ?>


<!-- FOOTER -->

<button id="top">
    <i class="fas fa-arrow-up"></i>
</button>


<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link      -->
<script src="js/script.js"></script>

<script>
    lightGallery(document.querySelector('.gallery .lightbox'));


    const topButton = document.getElementById("top");

topButton.addEventListener("click", function (){
  window.scrollTo({
      top: 0,
      left: 0,
      behavior: "smooth"

  });
});
window.onscroll = function() {
if (window.pageYOffset > 0) {
  topButton.style.display = "block";

} else {
  topButton.style.display = "none";
}
}


</script>
    
</body>
</html>