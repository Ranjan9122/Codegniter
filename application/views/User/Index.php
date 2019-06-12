<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Super Market | Home :</title>
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
	<!-- main-slider -->
		<ul id="demo1">
			 <?php 
			 foreach ($viewbanner as $result) {

			 ?>
			<li>
				<img src="<?php echo base_url('uploads/banner/'. $result->image); ?>" alt="" />
				<!--Slider Description example-->
				<div class="slide-desc">
					<h3>Buy Rice Products Are Now On Line With Us</h3>
				</div>
			</li>
			<?php }?>
		
			
		</ul>
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
		<h2>Top selling offers</h2>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Advertised offers</a></li>
						<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Today Offers</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
				<div class="agile-tp">
				<h5>Advertised this week</h5>
		<p class="w3l-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p>
				</div>
				<div class="agile_top_brands_grids">
				<div class="col-md-4 top_brand_left">
					<div class="hover14 column">
					<div class="agile_top_brand_left_grid">
					<div class="agile_top_brand_left_grid_pos">
						<img src="<?php echo base_url(); ?>User_Assets/images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
							<figure>
							<div class="snipcart-item block" >
							<div class="snipcart-thumb">
							<a href="products.html"><img title=" " alt=" " src="<?php echo base_url(); ?>User_Assets/images/1.png" /></a>		
						<p>Tata-salt</p>
						<div class="stars">
					<i class="fa fa-star blue-star" aria-hidden="true"></i>
					<i class="fa fa-star blue-star" aria-hidden="true"></i>
					<i class="fa fa-star blue-star" aria-hidden="true"></i>
					<i class="fa fa-star blue-star" aria-hidden="true"></i>
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
						</div>
				<h4>$20.99 <span>$35.00</span></h4>
				</div>
				<div class="snipcart-details top_brand_home_details">
					<form action="#" method="post">
					<fieldset>
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="add" value="1" />
					<input type="hidden" name="business" value=" " />
					<input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
					<input type="hidden" name="amount" value="20.99" />
					<input type="hidden" name="discount_amount" value="1.00" />
					<input type="hidden" name="currency_code" value="USD" />
					<input type="hidden" name="return" value=" " />
					<input type="hidden" name="cancel_return" value=" " />
					<input type="submit" name="submit" value="Add to cart" class="button" />
					</fieldset>
				</form>
			</div>
		</div>
	</figure>
</div>
</div>
</div>
</div>
<div class="col-md-4 top_brand_left">
	<div class="hover14 column">
	<div class="agile_top_brand_left_grid">
			<div class="agile_top_brand_left_grid_pos">
				<img src="<?php echo base_url(); ?>User_Assets/images/offer.png" alt=" " class="img-responsive" />
				</div>
				<div class="agile_top_brand_left_grid1">
					<figure>
						<div class="snipcart-item block" >
							<div class="snipcart-thumb">
								<a href="products.html"><img title=" " alt=" " src="<?php echo base_url(); ?>User_Assets/images/2.png" /></a>		
								<p>Fortune-sunflower</p>
									<div class="stars">
										<i class="fa fa-star blue-star" aria-hidden="true"></i>
										<i class="fa fa-star blue-star" aria-hidden="true"></i>
										<i class="fa fa-star blue-star" aria-hidden="true"></i>
								<i class="fa fa-star blue-star" aria-hidden="true"></i>
									<i class="fa fa-star gray-star" aria-hidden="true"></i>
										</div>
								<h4>$20.99 <span>$35.00</span></h4>
								</div>
						<div class="snipcart-details top_brand_home_details">
							<form action="#" method="post">
									<fieldset>
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" />
										<input type="hidden" name="business" value=" " />
										<input type="hidden" name="item_name" value="basmati rise" />
										<input type="hidden" name="amount" value="20.99" />
										<input type="hidden" name="discount_amount" value="1.00" />
										<input type="hidden" name="currency_code" value="USD" />
										<input type="hidden" name="return" value=" " />
										<input type="hidden" name="cancel_return" value=" " />
										<input type="submit" name="submit" value="Add to cart" class="button" />
									</fieldset>
										</form>
									</div>
								</div>
							</figure>
							</div>
					</div>
				</div>
			</div>
		<div class="col-md-4 top_brand_left">
			<div class="hover14 column">
				<div class="agile_top_brand_left_grid">
					<div class="agile_top_brand_left_grid_pos">
						<img src="<?php echo base_url(); ?>User_Assets/images/offer.png" alt=" " class="img-responsive" />
						</div>
						<div class="agile_top_brand_left_grid1">
							<figure>
							<div class="snipcart-item block">
								<div class="snipcart-thumb">
									<a href="products.html"><img src="<?php echo base_url(); ?>User_Assets/images/3.png" alt=" " class="img-responsive" /></a>
										<p>Aashirvaad-atta</p>
										<div class="stars">
										<i class="fa fa-star blue-star" aria-hidden="true"></i>
										<i class="fa fa-star blue-star" aria-hidden="true"></i>
										<i class="fa fa-star blue-star" aria-hidden="true"></i>
										<i class="fa fa-star blue-star" aria-hidden="true"></i>
										<i class="fa fa-star gray-star" aria-hidden="true"></i>
										</div>
										<h4>$40.99 <span>$65.00</span></h4>
									</div>
						<div class="snipcart-details top_brand_home_details">
								<form action="#" method="post">
									<fieldset>
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" />
							<input type="hidden" name="business" value=" " />
							<input type="hidden" name="item_name" value="Pepsi soft drink" />
							<input type="hidden" name="amount" value="40.00" />
							<input type="hidden" name="discount_amount" value="1.00" />
							<input type="hidden" name="currency_code" value="USD" />
							<input type="hidden" name="return" value=" " />
							<input type="hidden" name="cancel_return" value=" " />
							<input type="submit" name="submit" value="Add to cart" class="button" />
						</fieldset>
					</form>
	</div>
			</div>
				</figure>
			</div>
				</div>
					</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			<div class="agile_top_brands_grids">
				<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
						<div class="agile_top_brand_left_grid_pos">
							<img src="<?php echo base_url(); ?>User_Assets/images/offer.png" alt=" " class="img-responsive" />
					</div>
					<div class="agile_top_brand_left_grid1">
					<figure>
					<div class="snipcart-item block" >
					<div class="snipcart-thumb">
						<a href="products.html"><img title=" " alt=" " src="<?php echo base_url(); ?>User_Assets/images/4.png" /></a>		
						<p>Sampann-toor-dal</p>
						<div class="stars">
						<i class="fa fa-star blue-star" aria-hidden="true"></i>
						<i class="fa fa-star blue-star" aria-hidden="true"></i>
						<i class="fa fa-star blue-star" aria-hidden="true"></i>
						<i class="fa fa-star blue-star" aria-hidden="true"></i>
						<i class="fa fa-star gray-star" aria-hidden="true"></i>
						</div>
						<h4>$35.99 <span>$55.00</span></h4>
						</div>
					<div class="snipcart-details top_brand_home_details">
						<form action="#" method="post">
							<fieldset>
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="add" value="1" />
							<input type="hidden" name="business" value=" " />
							<input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
							<input type="hidden" name="amount" value="35.99" />
							<input type="hidden" name="discount_amount" value="1.00" />
							<input type="hidden" name="currency_code" value="USD" />
							<input type="hidden" name="return" value=" " />
							<input type="hidden" name="cancel_return" value=" " />
							<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
						</form>
					</div>
				</div>
			</figure>
		</div>
	</div>
</div>
</div>
	<div class="col-md-4 top_brand_left">
			<div class="hover14 column">
				<div class="agile_top_brand_left_grid">
					<div class="agile_top_brand_left_grid_pos">
						<img src="<?php echo base_url(); ?>User_Assets/images/offer.png" alt=" " class="img-responsive" />
					</div>
				<div class="agile_top_brand_left_grid1">
					<figure>
				<div class="snipcart-item block" >
					<div class="snipcart-thumb">
						<a href="products.html"><img title=" " alt=" " src="<?php echo base_url(); ?>User_Assets/images/5.png" /></a>		
							<p>Parryss-sugar</p>
						<div class="stars">
							<i class="fa fa-star blue-star" aria-hidden="true"></i>
							<i class="fa fa-star blue-star" aria-hidden="true"></i>
							<i class="fa fa-star blue-star" aria-hidden="true"></i>
							<i class="fa fa-star blue-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
						</div>
						<h4>$30.99 <span>$45.00</span></h4>
					</div>
			<div class="snipcart-details top_brand_home_details">
							<form action="#" method="post">
					<fieldset>
						<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="add" value="1" />
							<input type="hidden" name="business" value=" " />
							<input type="hidden" name="item_name" value="basmati rise" />
							<input type="hidden" name="amount" value="30.99" />
							<input type="hidden" name="discount_amount" value="1.00" />
							<input type="hidden" name="currency_code" value="USD" />
							<input type="hidden" name="return" value=" " />
							<input type="hidden" name="cancel_return" value=" " />
							<input type="submit" name="submit" value="Add to cart" class="button" />
						</fieldset>
							</form>
						</div>
					</div>
				</figure>
			</div>
		</div>
	</div>
</div>
<div class="col-md-4 top_brand_left">
	<div class="hover14 column">
		<div class="agile_top_brand_left_grid">
			<div class="agile_top_brand_left_grid_pos">
				<img src="<?php echo base_url(); ?>User_Assets/images/offer.png" alt=" " class="img-responsive" />
			</div>
			<div class="agile_top_brand_left_grid_pos">
				<img src="<?php echo base_url(); ?>User_Assets/images/offer.png" alt=" " class="img-responsive" />
			</div>
		<div class="agile_top_brand_left_grid1">
			<figure>
				<div class="snipcart-item block">
					<div class="snipcart-thumb">
						<a href="products.html"><img src="<?php echo base_url(); ?>User_Assets/images/6.png" alt=" " class="img-responsive" /></a>
							<p>Saffola-gold</p>
					<div class="stars">
						<i class="fa fa-star blue-star" aria-hidden="true"></i>
						<i class="fa fa-star blue-star" aria-hidden="true"></i>
						<i class="fa fa-star blue-star" aria-hidden="true"></i>
						<i class="fa fa-star blue-star" aria-hidden="true"></i>
						<i class="fa fa-star gray-star" aria-hidden="true"></i>
					</div>
					<h4>$80.99 <span>$105.00</span></h4>
					</div>
		<div class="snipcart-details top_brand_home_details">
								<form action="#" method="post">
									<fieldset>
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" />
										<input type="hidden" name="business" value=" " />
										<input type="hidden" name="item_name" value="Pepsi soft drink" />
										<input type="hidden" name="amount" value="80.00" />
										<input type="hidden" name="discount_amount" value="1.00" />
										<input type="hidden" name="currency_code" value="USD" />
										<input type="hidden" name="return" value=" " />
										<input type="hidden" name="cancel_return" value=" " />
										<input type="submit" name="submit" value="Add to cart" class="button" />
										</fieldset>
									</form>
								</div>
							</div>
						</figure>
					</div>
				</div>
			</div>
		</div>
			<div class="clearfix"> </div>
	</div>
</div>
<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
	<div class="agile-tp">
		<h5>This week</h5>
		<p class="w3l-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p>
	</div>
		<div class="agile_top_brands_grids">
			<div class="col-md-4 top_brand_left">
				<div class="hover14 column">
					<div class="agile_top_brand_left_grid">
						<div class="agile_top_brand_left_grid_pos">
							<img src="<?php echo base_url(); ?>User_Assets/images/offer.png" alt=" " class="img-responsive" />
						</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block" >
										<div class="snipcart-thumb">
									<a href="products.html"><img title=" " alt=" " src="<?php echo base_url(); ?>User_Assets/images/7.png" /></a>		
										<p>Sona-masoori-rice</p>
					<div class="stars">
						<i class="fa fa-star blue-star" aria-hidden="true"></i>
						<i class="fa fa-star blue-star" aria-hidden="true"></i>
						<i class="fa fa-star blue-star" aria-hidden="true"></i>
						<i class="fa fa-star blue-star" aria-hidden="true"></i>
						<i class="fa fa-star gray-star" aria-hidden="true"></i>
					</div>
				<h4>$35.99 <span>$55.00</span></h4>
			</div>
				<div class="snipcart-details top_brand_home_details">
						<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
									<input type="hidden" name="amount" value="35.99" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</figure>
			</div>
		</div>
	</div>
</div>
			<div class="col-md-4 top_brand_left">
				<div class="hover14 column">
					<div class="agile_top_brand_left_grid">
					<div class="agile_top_brand_left_grid_pos">
						<img src="<?php echo base_url(); ?>User_Assets/images/offer.png" alt=" " class="img-responsive" />
					</div>
				<div class="agile_top_brand_left_grid1">
					<figure>
						<div class="snipcart-item block" >
							<div class="snipcart-thumb">
								<a href="products.html"><img title=" " alt=" " src="<?php echo base_url(); ?>User_Assets/images/8.png" /></a>		
							<p>Milky-mist-paneer</p>
								<div class="stars">
									<i class="fa fa-star blue-star" aria-hidden="true"></i>
									<i class="fa fa-star blue-star" aria-hidden="true"></i>
									<i class="fa fa-star blue-star" aria-hidden="true"></i>
									<i class="fa fa-star blue-star" aria-hidden="true"></i>
									<i class="fa fa-star gray-star" aria-hidden="true"></i>
								</div>
						<h4>$30.99 <span>$45.00</span></h4>
							</div>
					<div class="snipcart-details top_brand_home_details">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="basmati rise" />
									<input type="hidden" name="amount" value="30.99" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</figure>
			</div>
		</div>
	</div>
</div>
	<div class="col-md-4 top_brand_left">
		<div class="hover14 column">
			<div class="agile_top_brand_left_grid">
				<div class="agile_top_brand_left_grid_pos">
				<img src="<?php echo base_url(); ?>User_Assets/images/offer.png" alt=" " class="img-responsive" />
					</div>
					<div class="agile_top_brand_left_grid_pos">
						<img src="<?php echo base_url(); ?>User_Assets/images/offer.png" alt=" " class="img-responsive" />
					</div>
			<div class="agile_top_brand_left_grid1">
				<figure>
				<div class="snipcart-item block">
					<div class="snipcart-thumb">
					<a href="products.html"><img src="<?php echo base_url(); ?>User_Assets/images/9.png" alt=" " class="img-responsive" /></a>
					<p>Basmati-Rice</p>
				<div class="stars">
			<i class="fa fa-star blue-star" aria-hidden="true"></i>
			<i class="fa fa-star blue-star" aria-hidden="true"></i>
			<i class="fa fa-star blue-star" aria-hidden="true"></i>
			<i class="fa fa-star blue-star" aria-hidden="true"></i>
			<i class="fa fa-star gray-star" aria-hidden="true"></i>
				</div>
					<h4>$80.99 <span>$105.00</span></h4>
		</div>
			<div class="snipcart-details top_brand_home_details">
					<form action="#" method="post">
						<fieldset>
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="add" value="1" />
							<input type="hidden" name="business" value=" " />
							<input type="hidden" name="item_name" value="Pepsi soft drink" />
							<input type="hidden" name="amount" value="80.00" />
							<input type="hidden" name="discount_amount" value="1.00" />
							<input type="hidden" name="currency_code" value="USD" />
							<input type="hidden" name="return" value=" " />
						<input type="hidden" name="cancel_return" value=" " />
							<input type="submit" name="submit" value="Add to cart" class="button" />
						</fieldset>
					</form>
				</div>
					</div>
							</figure>
						</div>
				</div>
			</div>
		</div>
				<div class="clearfix"> </div>
</div>
<div class="agile_top_brands_grids">
	<div class="col-md-4 top_brand_left">
		<div class="hover14 column">
			<div class="agile_top_brand_left_grid">
				<div class="agile_top_brand_left_grid_pos">
					<img src="<?php echo base_url(); ?>User_Assets/images/offer.png" alt=" " class="img-responsive" />
				</div>
		<div class="agile_top_brand_left_grid1">
			<figure>
			<div class="snipcart-item block" >
				<div class="snipcart-thumb">
					<a href="products.html"><img title=" " alt=" " src="<?php echo base_url(); ?>User_Assets/images/10.png" /></a>		
						<p>Fortune-sunflower</p>
				<div class="stars">
			<i class="fa fa-star blue-star" aria-hidden="true"></i>
		<i class="fa fa-star blue-star" aria-hidden="true"></i>
			<i class="fa fa-star blue-star" aria-hidden="true"></i>
			<i class="fa fa-star blue-star" aria-hidden="true"></i>
			<i class="fa fa-star gray-star" aria-hidden="true"></i>
				</div>
					<h4>$20.99 <span>$35.00</span></h4>
				</div>
					<div class="snipcart-details top_brand_home_details">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
									<input type="hidden" name="amount" value="20.99" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</figure>
			</div>
		</div>
	</div>
</div>
	<div class="col-md-4 top_brand_left">
		<div class="hover14 column">
			<div class="agile_top_brand_left_grid">
				<div class="agile_top_brand_left_grid_pos">
					<img src="<?php echo base_url(); ?>User_Assets/images/offer.png" alt=" " class="img-responsive" />
				</div>
			<div class="agile_top_brand_left_grid1">
				<figure>
					<div class="snipcart-item block" >
						<div class="snipcart-thumb">
							<a href="products.html"><img title=" " alt=" " src="<?php echo base_url(); ?>User_Assets/images/12.png" /></a>		
							<p>Nestle-a-slim</p>
				<div class="stars">
						<i class="fa fa-star blue-star" aria-hidden="true"></i>
						<i class="fa fa-star blue-star" aria-hidden="true"></i>
						<i class="fa fa-star blue-star" aria-hidden="true"></i>
						<i class="fa fa-star blue-star" aria-hidden="true"></i>
						<i class="fa fa-star gray-star" aria-hidden="true"></i>
				</div>
					<h4>$20.99 <span>$35.00</span></h4>
					</div>
			<div class="snipcart-details top_brand_home_details">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="basmati rise" />
									<input type="hidden" name="amount" value="20.99" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</figure>
			</div>
		</div>
	</div>
</div>
	<div class="col-md-4 top_brand_left">
		<div class="hover14 column">
		<div class="agile_top_brand_left_grid">
		<div class="agile_top_brand_left_grid_pos">
			<img src="<?php echo base_url(); ?>User_Assets/images/offer.png" alt=" " class="img-responsive" />
	</div>
	<div class="agile_top_brand_left_grid1">
		<figure>
			<div class="snipcart-item block">
				<div class="snipcart-thumb">
				<a href="products.html"><img src="<?php echo base_url(); ?>User_Assets/images/13.png" alt=" " class="img-responsive" /></a>
				<p>Bread-sandwich</p>
		<div class="stars">
		<i class="fa fa-star blue-star" aria-hidden="true"></i>
		<i class="fa fa-star blue-star" aria-hidden="true"></i>
		<i class="fa fa-star blue-star" aria-hidden="true"></i>
		<i class="fa fa-star blue-star" aria-hidden="true"></i>
		<i class="fa fa-star gray-star" aria-hidden="true"></i>
			</div>
		<h4>$40.99 <span>$65.00</span></h4>
		</div>
			<div class="snipcart-details top_brand_home_details">
		<form action="#" method="post">
		<fieldset>
			<input type="hidden" name="cmd" value="_cart" />
			<input type="hidden" name="add" value="1" />
			<input type="hidden" name="business" value=" " />
			<input type="hidden" name="item_name" value="Pepsi soft drink" />
			<input type="hidden" name="amount" value="40.00" /><input type="hidden" name="discount_amount" value="1.00" />									
			<input type="hidden" name="currency_code" value="USD" />
			<input type="hidden" name="return" value=" " />
			<input type="hidden" name="cancel_return" value=" " />
			<input type="submit" name="submit" value="Add to cart" class="button" />
			</fieldset>
		</form>
		</div>
	</div>
	</figure>
</div>
</div>
		</div>
		</div>
					<div class="clearfix"> </div>
				</div>
			</div>
				</div>
				</div>
			</div>
		</div>
	</div>
<!-- //top-brands -->
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href="beverages.html"> <img class="first-slide" src="<?php echo base_url(); ?>User_Assets/images/b1.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
         <a href="personalcare.html"> <img class="second-slide " src="<?php echo base_url(); ?>User_Assets/images/b3.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a href="household.html"><img class="third-slide " src="<?php echo base_url(); ?>User_Assets/images/b1.jpg" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div><!-- /.carousel -->	
<!--banner-bottom-->
	
<!--banner-bottom-->
<!--brands-->

<!--//brands-->
<!-- new -->
<div class="newproducts-w3agile">
	<div class="container">
		<h3>New offers</h3>
	<div class="agile_top_brands_grids">
		<?php 
		foreach ($viewproduct as $result)
		{

		?>
		<div class="col-md-3 top_brand_left-1" style="margin-bottom:20px;">
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

		<img title=" " alt=" " src="<?php echo base_url('uploads/product/'. $result->productimage); ?>" style="width: 250px; height: 175px;"></a>		
		<p><?php echo $result->productname; ?></p>
	<div class="stars">
		<i class="fa fa-star blue-star" aria-hidden="true"></i>
		<i class="fa fa-star blue-star" aria-hidden="true"></i>
		<i class="fa fa-star blue-star" aria-hidden="true"></i>
		<i class="fa fa-star blue-star" aria-hidden="true"></i>
		<i class="fa fa-star gray-star" aria-hidden="true"></i>
	</div>
		<h4><?php echo $result->disprice; ?> <span><?php echo $result->price; ?></span></h4>
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
									<input type="hidden" name="quantity" min="1" max="5" value="1">
									
									<input type="hidden" name="subcategory" value="<?php echo $result->subcategory; ?>">
									
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
		</div>
	</div>
<!-- //new -->
<!-- //footer -->
	<?php include 'Include/Footer.php' ?>
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
<!-- <script src="<?php echo base_url(); ?>User_Assets/js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script> -->
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