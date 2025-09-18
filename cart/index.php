<?php
	include "../includes/header.php";
?>
<section class="cart">
	<div class="cart-container">
		<div class="cart-card fonts">
			<p><span class="cart-image"><img src="<?php echo $url?>assets/images/exclamation-mark.svg"></span>A minimum order of ₦2000 is required before checking out. Current cart's total is: ₦0</p>
		</div>
		<div class="cart-card fonts">
			<p>Your cart is currently empty</p>
		</div> 
         <div>
         	<a href="<?php echo $url?>" class="text-primary cart-tag button">Order Now</a>
         </div>
	</div>
</section>
<?php
	include "../includes/footer.php";
?>