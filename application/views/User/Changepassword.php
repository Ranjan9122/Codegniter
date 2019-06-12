<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Super Market | Change Password</title>
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
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Change Password</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<h2>Change Your Password</h2>
		
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">

				<div class="col-md-12" style="margin-bottom: 5px;">
                         
                          <?php if($this->session->flashdata('success')): ?>
                             <?php echo '<div class="alert alert-danger icons-alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <i class="icofont icofont-close-line-circled"></i>
                                  </button>
                                <p><strong>Error! &nbsp;&nbsp;</strong>'.$this->session->flashdata('success').'</p></div>'; ?>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('error')): ?>
                             <?php echo '<div class="alert alert-danger icons-alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <i class="icofont icofont-close-line-circled"></i>
                                  </button>
                                <p><strong>Error! &nbsp;&nbsp;</strong>'.$this->session->flashdata('error').'</p></div>'; ?>
                                    <?php endif; ?>

                                    <?php if($this->session->flashdata('psdnotmatch')): ?>
                             <?php echo '<div class="alert alert-danger icons-alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <i class="icofont icofont-close-line-circled"></i>
                                  </button>
                                <p><strong>Error! &nbsp;&nbsp;</strong>'.$this->session->flashdata('psdnotmatch').'</p></div>'; ?>
                                    <?php endif; ?>

                                    <?php if($this->session->flashdata('opsdnmatch')): ?>
                             <?php echo '<div class="alert alert-danger icons-alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <i class="icofont icofont-close-line-circled"></i>
                                  </button>
                                <p><strong>Error! &nbsp;&nbsp;</strong>'.$this->session->flashdata('opsdnmatch').'</p></div>'; ?>
                                    <?php endif; ?>

                                   </div>

				<?php echo form_open('User/update_password'); ?>
					<!-- <input type="password" name="oldpassword" placeholder="Old Password" required=" " > -->
					<input type="password" name="newpassword" placeholder="New Password" required=" " >
					<input type="password" name="confirmpassword" placeholder="Confirm Password" required=" " >
					<div class="forgot">
						<a href="#">Forgot Password?</a>
					</div>
					<input type="submit" value="Submit">
				<?php echo form_close(); ?>
			</div>
			<!-- <h4>For New People</h4>
			<p><a href="registered.html">Register Here</a> (Or) go back to <a href="index.html">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p> -->
		</div>
	</div>
<!-- //login -->
<!-- //footer -->
	<?php include'Include/Footer.php' ?>
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