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
	<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button  type="button" class="close" data-dismiss="modal" aria-hidden="true"><span style="color:white">×</span></button>
                <h4 class="modal-title">You are Invited Precious One</h4>
            </div>
            <div style="background:url(assets/img/12472629_10154125072919337_4023812812718484026_n.jpg) no-repeat center center;height:300px; -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;" class="modal-body">
			<div style="" class="col-md-5 pull-right">
			
			
            </div>
            </div>
        </div>
    </div>
</div>


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
					<a style="color:#ECC731" href="about_us.php">Do you Need Prayer?</a>
					<div class="container"><div class="row">
				<div class="col-xs-6 col-sm-6 col-sm-offset-2 col-md-6 col-md-offset-3">
					<form  role="form" class="sign-up" action="http://precious.tv/includes/email_save.php" method="post">

								<div class="input-group">
									<input class="form-control" type="text" placeholder="Prayer Request" name="email">
									<div class="input-group-addon">
										<input type="submit" class="btn btn-theme" value="Submit">
									</div>
								</div>

							</form>
							
							</div>
					</div></div>
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
	<!--Content End Here -->
	<!--Footer Section Start Here -->
			<?php
			include_once ("includes/footer.php");
			?>
			<!--Footer Section End Here -->

		</div>
		<!-- join now form popup -->
		
	
		
		
		
		<!-- join now form popup -->
		
		
		
		<?php  $while_query=mysql_query("select * from coming_programs")or die(mysql_error());
                   while($row=mysql_fetch_array($while_query)){?>
				   
				   
				   
				   
		<?php include('includes/modal_coming_program.php');?>
		
		
		
		<?php }; ?>
		
	
	<script>window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>
	<script src="assets/js/main.js"></script>
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Switcher Style End Js -->
		<script src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
		<script src="assets/js/jquery.easing.min.js"></script>
		<!--Main Slider Js-->
		<script src="assets/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
		<script src="assets/revolution-slider/js/jquery.themepunch.revolution.js"></script>
		<!--Main Slider End Js-->
		<script src="assets/js/jquery.flexslider.js"></script>
		<script src="assets/js/site.js"></script>
	<script type="text/javascript">
  (function() {var s = document.createElement('script');s.type = 'text/javascript';s.async = true;
  s.src = document.location.protocol + '//loader.wisepops.com/default/index/get-loader?user_id=24213';
  var s2 = document.getElementsByTagName('script')[0];s2.parentNode.insertBefore(s, s2);})();
</script>
	</body>
</html>