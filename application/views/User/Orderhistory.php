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

<!-- cart -->
<style type="text/css">
.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}
	
	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}
	
	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}
	
	
	
	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}
	
}
</style>
<!-- //cart -->
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
				<li class="active">Order History</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- Product -->

	<div class="container">
	<table id="datatable-buttons" class="table table-striped table-bordered">
		<?php 
		if(!empty($orderhistory))
						{
		?>
    				<thead>
						<tr>
							<th style="width:1%">Name</th>
							<th style="width:1%">Order Id</th>
							<th style="width:1%">Mobile</th>
							<th style="width:10%">Order Data</th>
							<th style="width:2%">Order Date</th>
							<th style="width:5%">Address</th>
							<th style="width:1%">Current Status</th>
							<th style="width:1%">Change Status</th>
							
							
						</tr>
					</thead>
					<tbody>
						<?php 
						
							foreach ($orderhistory as $result) {
								
							?>

						<tr>
							<td> <?php echo $result->fname; ?> <?php echo $result->lname; ?></td>

							<?php $order_id=json_decode($result->order_id); ?>
                       <td><?php print_r($order_id) ; ?></td>

							<td><?php echo $result->mobile; ?></td>
							

							<td>
                          <table id="datatable-buttons" class="table table-striped table-bordered">
                            
                          
                              <thead>
                                <tr>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Qty</th>
                        <th>Dis Price</th>
                        <th>Price</th>
                        
                         
                        
                      </tr>
                              </thead>
                              <tbody>
                                <?php  $product_data=json_decode($result->orderdata);
                        
                        foreach($product_data as $data):  ?>

                            <tr>
                               <td><?php echo $data->productname; ?></td>
                               <td><img src="<?php echo base_url('uploads/product/'. $data->productimage); ?>" style="height: 60px;width: 80px;" /> </td>
                               <td><?php echo $data->quantity; ?></td>
                               <td><?php echo $data->disprice; ?></td>

                              <td> <?php echo $data->price; ?></td>
                              
                               

                              </tr>
                              <?php  endforeach; ?>
                              </tbody>

                            
                            
                          </table>
                        

                        

                        

                        </td>
                        <td><?php echo $result->orderdate; ?></td>
                       <td><?php echo $result->address; ?></td>
						

						 <?php
                        $Active= $result->status;

                        if($Active==0)
                        {

                        ?>
                        <td>Processing</td>
                        <?php }?>
							
						</tr>
						<?php }?>
					</tbody>
					
					<?php }else{ ?>
						<center><h4 style="margin-top: 20px;">Your Order history Is Empty</h4></center>
						<?php }?>
				</table>
</div>
<!--- products --->
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