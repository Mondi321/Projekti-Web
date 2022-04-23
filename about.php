<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">

	<title>Home</title>
</head>
<body>

<?php include 'includes/header.php'; ?>

<nav class="navbar">
    <div id="close-navbar" class="fas fa-times"></div>
    <a href="index.php">home</a>
    <a href="product.php">products</a>
    <a href="about.php">about us</a>
    <a href="contact.php">contact us</a>
</nav>

<div class="team"> 
<h1>OUR TEAM</h1>

<span class="border"></span>
<h2>Here we present our amazing team</h2>
<div class="qq">


<a href="member.php"><img src="img/member1.jpg">
</a>

<a href="member2.php"><img src="img/member2.jpg"></a>

<p class="para">Hi there! Welcome to our website.</p>


</div><div class="container">

 		<nav>
 			<ul>
 				<li id="butoni"><a href="index.php">HOME</a></li>
 				<li><a href="product.php">PRODUCTS</a></li>
 				<li class="active"><a href="about.php">ABOUT US</a></li>
 				<li><a href="contact.php">CONTACT </a></li>
 			</ul>
 		</nav>
</div> 
</div>


<section class="service">

    <div class="box">
        <img src="img/service-1.png" alt="">
        <h3>free shipping</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, fugit?</p>
    </div>

    <div class="box">
        <img src="img/service-2.png" alt="">
        <h3>secure payment</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, fugit?</p>
    </div>

    <div class="box">
        <img src="img/service-3.png" alt="">
        <h3>2/4 support</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, fugit?</p>
    </div>
</section>


<?php include 'includes/footer.php'; ?>


<button id="top">
	<i class="fas fa-arrow-up"></i>
</button>

<script>
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
    
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    }

    let searchForm = document.querySelector('.search-form');

    document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    };



    let navbar = document.querySelector('.navbar');

    document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    }

    document.querySelector('#close-navbar').onclick = () =>{
    navbar.classList.remove('active');
    }

    
</script>


</body>
</html>