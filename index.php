<?php
	include "includes/header.php"
?>
<div class="wrapper-cover">
	<section class="main">
		<div class="main-animation">
			<img src="<?php echo $url?>assets/images/img.png">
			<img src="<?php echo $url?>assets/images/img1.png">
		</div>
		<div class="main-container">
			<div class="tittle">
				<h1 class="text-fonts text-texiary"><div class="block "></div>Enjoy tasty meals,</h1>
			</div>
			<div class="tittle-two">
				<h1 class="text-fonts text-texiary">wherever you are.<div class="block one"></div></h1>
			</div>
		<div class="main-content">
			<div class="main-content-text">
				<p class="text-fonts-small">Ordering from</p>
			</div>
			<div class="select-container">
				<form action="" id="myForm">
					<select class="select-box" required>
						<option value="">select a state</option>
						<option value="">Abia</option>
						<option value="">Akwa-ibom</option>
						<option value="">Rivers</option>
						<option value="">Lagos</option>
						<option value="">Abuja</option>
						<option value="">kano</option>
						<option value="">balyesa</option>
					</select>
					<div class="icon-container">
						<i class="fa-solid fa-angle-down"></i>
					</div>
				</form>
			</div>
			<div class="select-container">
				<select class="select-box" form="myForm" required>
					<option value="">select restaaurant</option>
					<option value="">Abia</option>
					<option value="">Akwa-ibom</option>
					<option value="">Rivers</option>
					<option value="">Lagos</option>
					<option value="">Abuja</option>
					<option value="">kano</option>
					<option value="">balyesa</option>
				</select>
				<div class="icon-container">
					<i class="fa-solid fa-angle-down"></i>
				</div>
			</div>
			<button type="submit" form="myForm" class="btn2 fonts text-primary bg">continue</button>
		</div>
	</section>


	<!----how it works---->
	<section class="bottom-container">
		<div class="bottom-column-container">
			<div class="empty"></div>
			<div class="bottom-title">
				<h1 class="text-fonts">How It Works</h1>
			</div>
			<div class="bottom-row">
				<div class="bottom-content">
					<div class="bottom-img">
						<img src="<?php echo $url?>assets/images/location-icon.png">
					</div>
					<div class="bottom-text">
						<p class="text-secondary text-fonts-medium">Select nearest location</p>
					</div>
					<div class="bottom-para">
						<p class="text-fonts-small">Select the state and restaurant closest to your pick-up/delivery location.</p>
					</div>
				</div>
				<div class="bottom-content">
					<div class="bottom-img">
						<img src="<?php echo $url?>assets/images/menu-icon.png">
					</div>
					<div class="bottom-text">
						<p class="text-secondary text-fonts-medium">Select nearest location</p>
					</div>
					<div class="bottom-para">
						<p class="text-fonts-small">Place your order by choosing from the numerous delicacies on our menu.</p>
					</div>
				</div>
				<div class="bottom-content">
					<div class="bottom-img">
						<img src="<?php echo $url?>assets/images/delivery-pickup.png">
					</div>
					<div class="bottom-text">
						<p class="text-secondary text-fonts-medium">Select nearest location</p>
					</div>
					<div class="bottom-para">
						<p class="text-fonts-small">Pick up your tasty meal in-store or have it delivered to your doorstep.</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!----app---->
	<section class="app-container">
		<div class="app-row">
			<div class="app-left-col">
				<div class="app-left-col-text text-fonts-small text-primary">
					<p>With the Kilimeals app, anyone can simply use a mobile device to look over our numerous delicacies.  All you need to do is to place an order, and pick up in-store or have it delivered to your doorstep.</p>
				</div>
				<div class="app-left-col-img">
					<a href="<?php echo $url?>"><img src="<?php echo $url?>assets/images/playstore.png"class="playstore"></a>
					<a href="<?php echo $url?>"><img src="<?php echo $url?>assets/images/appstore.png"></a>
				</div>
			</div>
			<div class="app-right-col">
				<div class="right-col-image">
				<img src="<?php echo $url?>assets/images/app-1.png">
				</div>
				<div class="right-col-image">
				<img src="<?php echo $url?>assets/images/app-2.png" class="delay">
				</div>
			</div>
		</div>
	</section>
</div>
<?php
	include "includes/footer.php"
?>
