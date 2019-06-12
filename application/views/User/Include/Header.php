<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="products.html">SHOP NOW</a></p>
			</div>
			<div class="agile-login">
				<ul>
					<?php 
					$email=$this->session->userdata('email');
					$fname=$this->session->userdata('fname');
					
					if(empty($email)) {
					?>
					<li><a href="<?php echo base_url('User/register'); ?>"> Create Account </a></li>
					<li><a href="<?php echo base_url('User/login'); ?>">Login</a></li>
					<?php }else{?>
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome <?php echo $email; ?><b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
							<div class="row">
								<div class="multi-gd-img">
									<ul class="multi-column-dropdown">
										<!-- <h6>All Household</h6> -->
										<li><a href="<?php echo base_url('User/update_profile'); ?>">My profile </a></li>
										<li><a href="<?php echo base_url('User/order_history'); ?>">Order History </a></li>
										<li><a href="household.html">Scrubbers</a></li>
										<li><a href="<?php echo base_url('User/change_password'); ?>">Change Password</a></li>
										<li><a href="<?php echo base_url('User/logout'); ?>"> Logout </a></li>
										
									</ul>
								</div>
												
												
							</div>
							</ul>
					</li>
					<?php }?>
				</ul>
			</div>
			<div class="product_list_header">  
				
						<a href="<?php echo base_url('User/view_cart'); ?>" class="w3view-cart" ><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
					
					<span style="color: orange;">1

					</span>
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="<?php echo base_url(); ?>">super Market</a></h1>
			</div>
		<div class="w3l_search">
			<!-- <form action="#" method="post"> -->
				<?php echo form_open('User/search'); ?>
				<input type="search" name="search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			<?php echo form_close(); ?>
		</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>

		<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
		<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo base_url(); ?>" class="act">Home</a></li>	
									<!-- Mega Menu -->
					 <?php 
			 			foreach ($viewcategory as $result) {
			 				echo $getid=$result->id;
					 ?>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $result->category; ?><b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
						<div class="row">
							
							<div class="multi-gd-img">
							<ul class="multi-column-dropdown">
									<!-- <h6>All Groceries</h6> -->
								<!-- <li><a href="<?php echo base_url('User/product'); ?>?subid=<?php echo $result->id; ?>"><?php echo $result->subcategory; ?></a></li> -->

								<li><a href="<?php echo base_url('User/product'); ?>"><?php echo $result->id; ?></a></li>
								
							</ul>
							</div>	
												
						</div>
								</ul>
					</li>

			<?php }?>
				<li><a href="gourmet.html">Gourmet</a></li>
				<li><a href="offers.html">Offers</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
				</div>
			</nav>
		</div>
	</div>
		