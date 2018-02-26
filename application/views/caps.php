<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Rattop Bastard| Caps :: w3layouts</title>
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
<div class="bikes">		 		 
	   <div class="singlespeed-sec">
		   <h2>CAPS</h2>
			 <?php
		 	$counter = 0; 
		 	foreach ($data as $row) { ?>
		 	<div class="bike">				 
			 	<img src="<?php echo base_url();?>/images/<?php echo $row->gambar; ?>" alt=""/>
		     	<div class="bike-cost">
					<div class="bike-mdl">
						<h4><?php echo $row->nama; ?><span>Model:Caps</span></h4>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="fast-viw">
					<form role="form" action="<?php echo base_URL(); ?>index.php/welcome/detail" method="post" id="view<?php echo $row->idcaps; ?>">
                    <?php echo form_hidden('id', $row->idcaps); ?>
                    <?php echo form_hidden('type','caps'); ?>
                    </form>
                    <button type="submit" form="view<?php echo $row->idcaps; ?>" data-html="true">Quick View</button>
				</div>
			</div>
			<?php 
			$counter++;
			if($counter==4){ ?>
			<div class="clearfix"></div>
			<?php $counter=0; }}?>
			 <div class="clearfix"></div>
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

