<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Products :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url(); ?>User_Assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>User_Assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>User_Assets/css/jquery-ui-1.css">
<!-- font-awesome icons -->
<link href="<?php echo base_url(); ?>User_Assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="<?php echo base_url(); ?>User_Assets/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url(); ?>User_Assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>User_Assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<?php include 'Include/Header.php' ?>
<!-- //header -->
<!-- navigation -->
		
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Products</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- Product -->

	<div class="products">
		<div class="container">
			<div class="col-md-12 products-right">

		<div class="agile_top_brands_grids" style="margin-top:0px;">
			<?php 
			foreach ($product as $result) {
			
			?>
			<div class="col-md-4 top_brand_left" style="margin-bottom:20px;">
				<div class="hover14 column">
					<div class="agile_top_brand_left_grid">
						<div class="agile_top_brand_left_grid_pos">
						<img src="<?php echo base_url(); ?>User_Assets/images/offer.png" alt=" " class="img-responsive">
						</div>
					<div class="agile_top_brand_left_grid1">
						<figure>
						<div class="snipcart-item block">
							<div class="snipcart-thumb">
							<a href="<?php echo base_url('User/single_product')?>?pid=<?php echo $result->id; ?>&subid=<?php echo $result->subcategory; ?>">
							<img title=" " alt=" " src="<?php echo base_url('uploads/product/'. $result->productimage); ?>" alt=" " class="img-responsive" style="width: 300px; height: 170px;"></a>		
							<p><?php echo $result->productname; ?></p>
							<h4><?php echo $result->disprice; ?><span><?php echo $result->price; ?></span></h4>
							</div>
								<div class="snipcart-details top_brand_home_details">
														<?php echo form_open('User/add_cart'); ?>
								<fieldset>
									<!-- <input type="hidden" name="cmd" value="_cart"> -->
									<input type="hidden" name="productid" value="<?php echo $result->id; ?>">
									<input type="hidden" name="productimage" value="<?php echo $result->productimage; ?>">
									<input type="hidden" name="productname" value="<?php echo $result->productname; ?>">
									<input type="hidden" name="price" value="<?php echo $result->price; ?>">
									<input type="hidden" name="disprice" value="<?php echo $result->disprice; ?>">

									<input type="hidden" name="subcategory" value="<?php echo $result->subcategory; ?>">
									
									<input type="hidden" name="quantity" min="1" max="5" value="1">
									
									<!-- <input type="hidden" name="return" value="1"> -->
									
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							<?php echo form_close(); ?>
								</div>
						</div>
						</figure>
						</div>
					</div>
				</div>
			</div>
					
			<?php }?>		
		<div class="clearfix"> </div>
	</div>
			
	
				<nav class="numbering">
					<ul class="pagination paging">
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--- products --->
<!-- //footer -->

<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>User_Assets/js/bootstrap.min.js"></script>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="<?php echo base_url(); ?>User_Assets/js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="<?php echo base_url(); ?>User_Assets/js/skdslider.min.js"></script>
<link href="<?php echo base_url(); ?>User_Assets/css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 

</body>
</html>