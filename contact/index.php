<?php
	include "../includes/header.php";
?>
<section id="contact">
	<div class="about-header"></div>
	<div class="contact-container">
		<div class="store-con">
			<div class="box">
				<h1 class="text-secondary">Leave us a message</h1>
				<input type="text" class="inputbox" placeholder="Your name*">
				<input type="text" class="inputbox" placeholder="Your name*">
				<input type="text" class="inputbox" placeholder="Your name*">
				<textarea name="message" class="InputBox" placeholder="Your message*"></textarea>
				<a href="<?php echo $url?>" class="button hover">submit</a>
			</div>	
			<div class="straight display"></div>
			<div class="store-contact">
				<span>
				<h1 class="text-secondary">Opening hours</h1>
				<p class="">Monday - Sundays:- 8:00am to 6:30pm</p>
				</span>
				<div class="store-address">
					<span>
					<h3>Head office</h3>
					<p>23 Nzimiro street, Old GRA. Port Harcourt</p>
					</span>
					<span>
					<h3>Phone no</h3>
					<p class="phone-no"><img src="<?php echo $url?>assets/images/phone.png" class="phone">09058608776</p>
					<p class="phone-no"><img src="<?php echo $url?>assets/images/whatsapp.png" class="phone">08141772489</p>
					</span>
					<span>
					<h3>Email</h3>
					<p><a href="<?php echo $url?>mailto:joeldartey71@gmail.com" class="text-texiary">Order@kilimanjaro-restaurants.com</a></p>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
	include "../includes/footer.php";
?>