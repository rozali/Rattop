<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Bike Shop a Ecommerce Category Flat Bootstarp Responsive Website Template| Single :: w3layouts</title>
<link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="<?php echo base_url(); ?>application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='<?php echo base_url(); ?>http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
<div class="product">
	 <div class="container">
		 <div class="ctnt-bar cntnt">
			 <div class="content-bar">
				 <div class="single-page">
					 <div class="product-head">
						<span class="fa fa-home"></span><a href="<?php echo base_url(); ?>index.php/welcome/index">Home</a> <span class="fa fa-angle-double-right "></span> <a href="<?php echo base_url(); ?>index.php/welcome/<?php echo $type ?>"><?php echo $type; ?></a> <span class="fa fa-angle-double-right "></span> <a href="#">DETAIL</a>
						</div>
					 <!--Include the Etalage files-->
						<link rel="stylesheet" href="<?php echo base_url(); ?>css/etalage.css">
						<script src="<?php echo base_url(); ?>js/jquery.etalage.min.js"></script>
				<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 400,
					thumb_image_height: 400,
					source_image_width: 2000,
					source_image_height: 2000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
						<!--//details-product-slider-->
						<?php foreach ($data as $row) ?>
					 <div class="details-left-slider">
						 <div class="grid images_3_of_2">
						  <ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="<?php echo base_url(); ?>/images/<?php echo $row->gambar; ?>" class="img-responsive" />
									<img class="etalage_source_image" src="<?php echo base_url(); ?>/images/<?php echo $row->gambar; ?>" class="img-responsive" title="" />
								</a>
							</li>
						</ul>
						</div>
					 </div>
					 <div class="details-left-info">
							<h3><?php echo $row->nama; ?></h3>
								<h4>Model : <?php echo $row->model; ?></h4>
							<h4></h4>
							<p><label>Rp.</label> <?php echo $row->harga; ?> <a href="#">Click for offer</a></p>
							<p class="size">SIZE ::</p>
							<a class="length" href="#">L</a>
							<a class="length" href="#">M</a>
							<a class="length" href="#">S</a>
							<div class="btn_form">
								<a href="cart.html">buy now</a>
								<a href="cart.html">ADD TO CART</a>
							</div>
					 </div>
					 <div class="clearfix"></div>				 	
				  </div>
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

