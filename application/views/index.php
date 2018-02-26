<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Rattop Bastard| Home :: w3layouts</title>
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
<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="<?php echo base_url(); ?>js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!---- start-smoth-scrolling---->


</head>
<body>
<!--banner-->
<script src="<?php echo base_url(); ?>js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner-bg banner-bg2">	
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
						  <li class="dropdown2"><a href="<?php echo base_url(); ?>index.php/welcome/motorcycle">MOTORCYCLES</a>
						 </li>                   
						 <li class="dropdown2"><a href="<?php echo base_url(); ?>index.php/welcome/error_page">ABOUT US</a>
						 </li>
						 <li class="dropdown2"><a href="<?php echo base_url(); ?>index.php/welcome/login">ADMIN</a>
						 </li>
						  <a class="shop" href="<?php echo base_url(); ?>index.php/welcome/cart"><img src="<?php echo base_url(); ?>images/cart.png" alt=""/></a>
					  </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div>	 
	 <div class="caption">
		 <div class="slider">
					   <div class="callbacks_container">
						   <ul class="rslides" id="slider">
							    <li><h1>FIGHT</h1></li>
								<li><h1>STRUGGLE</h1></li>	
								<li><h1>SOLIDARITY</h1></li>	
						  </ul>
						  <p>Indonesian <span>Kustom</span> Rule!!!</p>
						  <a class="morebtn" href="https://twitter.com/rattopbastard " target="_blank">SHOP MERCH</a>
					  </div>
				  </div>
	 </div>
<!-- 	 <div class="dwn">
		<a class="scroll" href="#cate"><img src="images/scroll.png" alt=""/></a>
	 </div>	 -->			 
</div>
<!--/banner-->
<div id="cate" class="categories">
	 <div class="container2">
		 <h3>MOTORCYCLES</h3>
		 <div class="categorie-grids">
			 <!-- <a href="bicycles.html"><div class="col-md-4 cate-grid grid1">
				 <h4>MERCH</h4>
				 <p></p>
				 <a class="store" href="bicycles.html">GO TO STORE</a>
			 </div></a> -->
			 <a href="bicycles.html"><div class="col-md-4 cate-grid2 grid2">
				 <iframe width="400" height="360" src="https://www.youtube.com/embed/E1D6MHG-JXs" frameborder="0" allowfullscreen></iframe>
			 </div></a>
			 <a href="<?php echo base_url(); ?>index.php/welcome/motorcycle"><div class="col-md-4 cate-grid grid3">
				 <h4>MOTORCYCLE</h4>
				 <p></p>
				 <a class="store" href="<?php echo base_url(); ?>index.php/welcome/motorcycle">GO TO STORE</a>
			 </div></a>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!--bikes-->
<div class="bikes">	
		 <h3>MERCH PRODUCT</h3>
		 <div class="bikes-grids">			 
			 <ul id="flexiselDemo1">
			  	<?php foreach ($data as $row) { ?>	
				 <li>
					 <img src="<?php echo base_url(); echo $row->gambar; ?>" alt=""/>
					 <div class="bike-info">
						 <div class="model">
							 <h4><?php echo $row->nama; ?><span>Rp.<?php echo $row->harga; ?></span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="#"><?php echo $row->ket; ?></option>
							 </select>
							 <a href="#">BUY</a>
						 </div>					 
					 </div>
					 <div class="viw">
						<a href="bicycles.html">Quick View</a>
					 </div>
				 </li>
				 <?php } ?>
		    </ul>
			<script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
			</script>
			<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.flexisel.js"></script>			 
	</div>
</div>
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

