<!DOCTYPE html>
<?php
			include_once ("like/config.php");
			?>
			
			

<html lang="en">
	<head>
		 <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
			<title>Precious Tv | precious.tv</title>
			<meta name="keywords" content="Christian channel in Ghana, Christian Tv in Ghana, perez chapel international tv station, Bishop charles agyinasare tv station, tv station in ghana, christian tv station in ghana, best christian tv in ghana,">
            <meta name="description" content="Christian channel,Tv in Ghana located at 105 Olusegun Obasanjo Highway, Dzorwulu Junction.Call us at +233 244821595, email: info@precious.tv">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		<!-- google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,700%7CPlayfair+Display:400,700italic%7CRoboto:300%7CMontserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/css/font-awesome.css" rel="stylesheet">
		<link href="assets/revolution-slider/css/settings.css" rel="stylesheet">
		<link href="assets/css/global.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/responsive.css" rel="stylesheet">
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	<link rel="stylesheet" href="assets/css/main.css">
	<script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
	
</head>
	<body>

		<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


		<div id="wrapper">
			<!--Header Section Start Here -->
			<?php
			include_once ("includes/header.php");
			?>
			<!-- Header Section End Here -->
			
				<!-- Site Content -->
			<div id="main">
				<!-- banner slider Start Here -->
				<section class="rev_slider_wrapper banner-section">
					<div class="rev_slider banner-slider">
						<ul>
							<!-- SLIDE  -->
							<?php  $while_query=mysql_query("select * from slider_image")or die(mysql_error());
                   while($display=mysql_fetch_array($while_query)){?>
				   
							<li data-transition="random" data-slotamount="7" data-masterspeed="500" class="slide-1" >
								<!-- MAIN IMAGE -->
								<img src="assets/img/<?php echo $display['imagename']?>" alt="banner" data-bgfit="cover" data-bgposition="center 36%" data-bgrepeat="no-repeat">

							

								<div
								data-endspeed="800"
								data-easing="easeOutCirc"
								data-start="800"
								data-speed="700"
								data-y="250"
								data-x="152"
								class="tp-caption sft banner-heading">
									<div class="page-header section-header clearfix">
									
									</div>
									
									
								</div>

								

								<div
								data-endspeed="1200"
								data-easing="easeOutCirc"
								data-start="1200"
								data-speed="700"
								data-y="416"
								data-x="200"
								class="tp-caption sft">
									</div>
									<div
								data-endspeed="1200"
								data-easing="easeOutCirc"
								data-start="1200"
								data-speed="700"
								data-y="400"
								data-x="245"
								class="tp-caption sft banner-btn">
									<a data-toggle="modal" href="streaming_now.php" class="btn btn-default">WATCH NOW</a>
								</div>
							</li><?php }; ?>
							<!-- SLIDE  -->
								<!-- SLIDE  -->
							
							
						</ul>
					</div>
				</section>
				<!-- banner slider End Here -->
	<!-- Our Causes Section Start Here-->
	<?php  $while_query=mysql_query("select * from introduction limit 1")or die(mysql_error());
                   while($row=mysql_fetch_array($while_query)){?>
				<section class="our-causes">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="page-header section-header clearfix">
									<h2><?php echo $row['introduction_title'];?></h2>
									<p style="color:#fff;"><?php echo $row['introduction_content'];?> <a style="color:#ECC731" href="about_us.php">Find out more about PTV</a></p>
								</div>
							</div>
						</div>
					</div>
				</section><?php }; ?>
	<!-- Our Causes Section End Here-->

	<!-- Become Volunteer Section Start Here -->
				<section class="parallax-section parallax text-center">
					<div class="container">
						<?php  $while_query=mysql_query("select * from front order by verseid DESC limit 1")or die(mysql_error());
                   while($row=mysql_fetch_array($while_query)){?>
							 <div class="row">
							
							<div class="col-xs-12 col-sm-12 col-md-12">
								<h2><i class="fa fa-book"></i>
&nbsp;Daily <strong>Verse</strong></h2>
								<p>
								<?php echo $row['daily_verse'];?>	 
								</p>
								<h3 class="text-right">-<?php echo $row['chapter'];?>	</h3>
							</div>
						</div><?php }; ?>
					<a style="color:#ECC731" href="about_us.php">Do you Know Jesus?</a>
					</div>
				</section>
	<!-- Become Volunteer Section End Here -->
	
	<!-- Latest Programs Section Start Here -->
				<section class="latest-news news-section news-section3">
					<div class="container anim-section">
						<div class="row">
							<div class="col-xs-12 col-md-8">
								<div class="row">
									<header class="page-header section-header col-md-12 clearfix">
										<h2 style="color:#1c214b;">Coming <strong>Programs</strong></h2>
									</header><?php  $while_query=mysql_query("select * from coming_programs")or die(mysql_error());
                   while($row=mysql_fetch_array($while_query)){?>
									<div class="items zoom col-xs-12 col-md-12">
										
				   <div class="row">
										<a href="#" class="img-thumb col-md-5">
										<figure>
											<img src="assets/img/<?php echo $row['program_img'];?>" alt="">
										</figure> </a>
										<div class="media col-md-7">
											<h3><?php echo $row['program_title'];?></h3>
											
											<span class="date"><i class="fa fa-calendar font-icon"></i> <?php echo $row['program_time'];?></span>
											<p>
												<?php echo $row['program_content'];?>
											</p>
											<a data-toggle="modal" href="" data-target=".<?php echo $row['programid'];?>" class="btn btn-default">READ MORE</a>
										</div>
											</div>
									</div><?php }; ?>
									
									<div class="row">
									<div class="media col-md-7">
										<a style="margin: 12px;font-weight:600;" href="programs.php">Click To See More >></a>
										</div>
										</div>
								</div>
							</div>
							<div class="container"><div class="row">
							<?php include('sidebar3.php');?>
						
						
						
						</div></div>
					</div>
				</section>
				<!-- Latest News Section End Here -->

	<!-- Latest News Section Start Here -->
				<?php include ('bishopprograms.php');?>
	<!-- Latest News Section End Here -->

	<!--Testimonial Section Start Here -->			
				<?php include('testimonies.php');?>
	<!--Testimonial Section End Here -->

			</div>
			<div class="container mission-page" id="page-info">
					<div class="row">
						<div class="col-xs-12">
							<!-- Process Step Section Start Here-->
							<section class="process-section anim-section text-center animate">
								<header class="page-header section-header clearfix">
									<h2 style="color:rgb(34, 68, 113);">Send us your <strong>Prayer Request/Testimony</strong></h2>
									<p></p>
								</header>
								<p class="text-center">
									<a style="color: #ecc731;" data-toggle="modal" href="external.php" data-target=".request" class="btn btn-default btn-lg join-today">PRAYER REQUEST</a>
									<a style="color: #ecc731;" data-toggle="modal" href="external.php" data-target=".join-now-form" class="btn btn-default btn-lg join-today">SEND A TESTIMONY </a>
								</p>
							</section>
							<!-- Process Step Section End Here-->
						</div>
					</div>
				</div>
	<!--Content End Here -->
	<!--Footer Section Start Here -->
			<?php
			include_once ("includes/footer.php");
			?>
			<!--Footer Section End Here -->

		</div>
		<!-- join now form popup -->
		
	<div class="modal join-now-form">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button style="color:#ffffff" type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<header class="page-header">
							<h2>Send your <strong>Testimony</strong></h2>
								<p style="color:#fff">If you believe God has done something in your life through PTV, don’t hesitate to let us know about it. </p>
						</header>
					</div>
					<div class="modal-body">
						<form role="form" action="mail .php">
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-6">
										<label for="name-join">Name<span>*</span></label>
										<input type="text" class="form-control" id="name-join">
									</div>
									<div class="form-group col-xs-12 col-sm-6">
										<label for="last-name-join">Last Name<span>*</span></label>
										<input type="text" class="form-control" id="last-name-join">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-6">
										<label for="email-join">Email<span>*</span></label>
										<input type="text" class="form-control" id="email-join">
									</div>
									<div class="form-group col-xs-12 col-sm-6">
										<label for="phone-join">Phone<span>*</span></label>
										<input type="text" class="form-control" id="phone-join">
									</div>
								</div>
							</div>

							

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<label for="message-join">Your Message<span>*</span></label>
										<textarea class="form-control" id="message-join"></textarea>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
								<div class="form-group col-xs-12"><button type="submit" class="btn btn-default pull-right">Submit</button>
										
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<p class="forms-notes">
											
										</p>
									</div>
								</div>
							</div>

						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>
		<div class="modal request">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button style="color:#ffffff" type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<header class="page-header">
							<h2>Prayer <strong>Request</strong></h2>
							<p style="color:#fff">Send your prayer requests here and expect to have your needs met.  </p>
						</header>
					</div>
					<div class="modal-body">
						<form role="form">
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-6">
										<label for="name-join">Name<span>*</span></label>
										<input type="text" class="form-control" id="name-join" name="name1">
									</div>
									<div class="form-group col-xs-12 col-sm-6">
										<label for="last-name-join">Last Name<span>*</span></label>
										<input type="text" class="form-control" id="last-name-join" name="lastname1">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-6">
										<label for="email-join">Email<span>*</span></label>
										<input type="text" class="form-control" id="email-join" name="email1">
									</div>
									<div class="form-group col-xs-12 col-sm-6">
										<label for="phone-join">Phone<span>*</span></label>
										<input type="text" class="form-control" id="phone-join" name="phone1">
									</div>
								</div>
							</div>

							

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<label for="message-join">Your Message<span>*</span></label>
										<textarea class="form-control" id="message-join" name="message1"></textarea>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="col-xs-12">
								<div class="form-group col-xs-12"><button type="submit" class="btn btn-default pull-right">Submit</button>
										
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<p class="forms-notes">
											
										</p>
									</div>
								</div>
							</div>

						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>
		
		
		
		<!-- join now form popup -->
		
		
		
		<?php  $while_query=mysql_query("select * from coming_programs")or die(mysql_error());
                   while($row=mysql_fetch_array($while_query)){?>
				   
				   
				   
				   
		<div class="modal <?php echo $row['programid'];?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<header class="page-header">
							<h2>YUF X'PLOSION<strong></strong></h2>
						</header>
					</div>
					<div class="modal-body">
					<div class="programs_detail-description">
									
									<img src="assets/img/<?php echo $row['program_img'];?>" alt="" width="100%">
									
									<div class="row programs_details">
										<div class="col-xs-12">

											<div class="detail-description">

												<strong style="font-size: 19px;font-weight: 200;" class="detail-summary">
													<?php echo $row['program_content'];?></strong>
												
											</div>
											</div>
							</div>
						</div>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>
		
		
		
		<?php }; ?>
		
	
	<script>window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>
	<script src="assets/js/main.js"></script>
		<script src="assets/js/jquery.min.js"></script>
		<!-- Switcher Style End Js -->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.easing.min.js"></script>
		<!--Main Slider Js-->
		<script src="assets/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
		<script src="assets/revolution-slider/js/jquery.themepunch.revolution.js"></script>
		<!--Main Slider End Js-->
		<script src="assets/js/jquery.flexslider.js"></script>
		<script src="assets/js/site.js"></script>
	</body>
</html>