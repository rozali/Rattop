<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Rattop Bastard| Cart :: w3layouts</title>
<link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<!--webfont-->
<!-- dropdown -->
<script src="<?php echo base_url(); ?>js/jquery.easydropdown.js"></script>
<link href="<?php echo base_url(); ?>css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="<?php echo base_url(); ?>js/scripts.js" type="text/javascript"></script>
<!--js-->

</head>
<body>
<!--banner-->
<script src="<?php echo base_url(); ?>js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner-bg banner-sec">	
	  <div class="container">
			 <div class="header">
			       <div class="logo">
						 <a href="<?php echo base_url(); ?>index.php/welcome/index"><img src="<?php echo base_url(); ?>images/logo3.png" alt=""/></a>
				   </div>							 
				  <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						  <li class="dropdown1"><a href="#">MERCH</a>
							  <ul class="dropdown2">
									<li><a href="<?php echo base_url(); ?>index.php/welcome/tshirt">T-SHIRTS</a></li>
									<li><a href="<?php echo base_url(); ?>index.php/welcome/vest">VEST</a></li>
									<li><a href="<?php echo base_url(); ?>index.php/welcome/error_page">JACKET</a></li>
									<li><a href="<?php echo base_url(); ?>index.php/welcome/workshirt">WORK SHIRTS</a></li>
									<li><a href="<?php echo base_url(); ?>index.php/welcome/pants">LONG/SHORT PANTS</a></li>	
							  </ul>
						  </li>
						  <li class="dropdown1"><a href="#">ACCESSORIES</a>
							 <ul class="dropdown2">
							 		<li><a href="<?php echo base_url(); ?>index.php/welcome/caps">CAPS</a></li>
									<li><a href="<?php echo base_url(); ?>index.php/welcome/error_page">RINGS</a></li>
									<li><a href="<?php echo base_url(); ?>index.php/welcome/helm">HELMETS</a></li>
							  </ul>
						 </li>  
						  <li class=""><a href="<?php echo base_url(); ?>index.php/welcome/motorcycle">MOTORCYCLES</a>
						 </li>                   
						 <li class=""><a href="<?php echo base_url(); ?>index.php/welcome/error_page">ABOUT US</a>
						 </li>
						 <li class="dropdown2"><a href="<?php echo base_url(); ?>index.php/welcome/admin">ADMIN</a>
						 </li>
						  <a class="shop" href="<?php echo base_url(); ?>index.php/welcome/cart"><img src="<?php echo base_url(); ?>images/cart.png" alt=""/></a>
					  </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div> 				 
</div>
<!--/banner-->
<div class="cart">
	 <div class="container">
		 <div class="cart-top">
			<a href="<?php echo base_url(); ?>index.php/welcome/index"><< home</a>
		 </div>	
			
		 <div class="col-md-9 cart-items">
			 <h2>My Shopping Bag (2)</h2>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			 <div class="cart-header">
				 <div class="close1"> </div>
				 <div class="cart-sec">
						<div class="cart-item cyc">
							 <img src="images/bik6.jpg"/>
						</div>
					   <div class="cart-item-info">
							 <h3>MOUNTAIN HOPPER(XS R034)<span>Model No: 3578</span></h3>
							 <h4><span>Rs. $ </span>5800.00</h4>
							 <p class="qty">Qty ::</p>
							 <input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
					   </div>
					   <div class="clearfix"></div>
						<div class="delivery">
							 <p>Service Charges:: Rs.100.00</p>
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>						
				  </div>
			 </div>
			 <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 </script>
			 <div class="cart-header2">
				 <div class="close2"> </div>
				  <div class="cart-sec">
						<div class="cart-item">
							 <img src="images/a3.png"/>
						</div>
					   <div class="cart-item-info">
							 <h3>RIDE HELMET<span>Model No: 8768</span></h3>
							 <h4><span>Rs. $ </span>200.00</h4>
							 <p class="qty">Qty ::</p>
							 <input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
					   </div>
					   <div class="clearfix"></div>
						<div class="delivery">
							 <p>Service Charges:: Rs.100.00</p>
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>						
				  </div>
			  </div>		
		 </div>
		 
		 <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total">6200.00</span>
				 <span>Discount</span>
				 <span class="total">---</span>
				 <span>Delivery Charges</span>
				 <span class="total">150.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <h4 class="last-price">TOTAL</h4>
			 <span class="total final">6350.00</span>
			 <div class="clearfix"></div>
			 <a class="order" href="#">Place Order</a>
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container wrap">
		<div class="logo2">
			 <a href="<?php echo base_url(); ?>index.php/welcome/index"><img src="<?php echo base_url(); ?>images/logo4.png" alt=""/></a>
		</div>
		<div class="ftr-menu">
			 <ul>
				 <li><a href="https://www.youtube.com/user/silentordead" target="_blank"><img src="<?php echo base_url(); ?>images/youtube2.png" alt=""/></a></li>
				 <li><a href="https://www.facebook.com/Rattop.bastard.store/" target="_blank"><img src="<?php echo base_url(); ?>images/facebook2.png" alt=""/></a></li>
				 <li><a href="https://twitter.com/RattopBastard" target="_blank"><img src="<?php echo base_url(); ?>images/twitter2.png" alt=""/></a></li>
				 <li><a href="http://yooying.com/rattopbastard" target="_blank"><img src="<?php echo base_url(); ?>images/instagram2.png" alt=""/></a></li>
			 </ul>
		</div>
		<div class="clearfix"></div>
	 </div>
</div>
<!---->

</body>
</html>

