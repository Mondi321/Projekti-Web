<?php 
	require_once './controllers/controller4.php';

	$insert = new Controller4;

	if(isset($_POST['submit'])){
		$insert->insert($_POST);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/contact.css">
</head>
<body>
<header>

 <nav>
 	<ul>
 		<li><a href="index.php">HOME</a></li>
 		<li><a href="product.php">PRODUCTS</a></li>
 		<li><a href="about.php">ABOUT US</a></li>
 		<li class="active"><a href="contact.php">CONTACT</a></li>
 	</ul>
 </nav>
<div class="contact">
	<h1>SEND US A MESSAGE</h1>
	<div class="border"></div>
	<form class="contact-form" method = "POST">
		<input type="text" placeholder="Name" class="contact-form-text" name = "emri">
		<input type="email" placeholder="Email" class="contact-form-text" name = "email">
		<textarea class="contact-form-text" placeholder="Message" name = "mesazhi"></textarea>
		<input type="submit" class="contact-form-button" value="Send Message" name = "submit">
	</form>
</div>

</header>


</body>
</html>
