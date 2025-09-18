<?php
	$url = "http://localhost/kilimanjaro";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>kilimanjaro</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $url?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url?>assets/plugins/fontawesome-free-6.5.1-web/css/all.min.css">
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="logo">
				<a href="<?php echo $url?>">
					<img src="<?php echo $url?>assets/images/logo.svg">
				</a>
			</div>
			<nav>
				<ul id="nav-ul">
					<li><a href="<?php echo $url?>" class="text-primary">Order Now</a></li>
					<li><a href="<?php echo $url?>about" class="text-primary">About</a></li>
					<li><a href="<?php echo $url?>store_location" class="text-primary">Store Location</a></li>
					<li><a href="<?php echo $url?>career" class="text-primary">Careers</a></li>
					<li><a href="<?php echo $url?>cart"class="text-primary">Cart</a></li>
					<li><a href="<?php echo $url?>contact"class="text-primary">Contact</a></li>
					<a href="<?php echo $url?>signUp_login"class="text-secondary btn" >Sign Up/Login</a>
				</ul>
			</nav>
			<div class="show">
			<img src="<?php echo $url?>assets/images/menu (1).png" id="show-nav" onclick="openNav()">
			<img src="<?php echo $url?>assets/images/menu (1).png" id="close-nav" onclick="closeNav()">
			</div>
		</header>


