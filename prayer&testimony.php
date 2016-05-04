<!DOCTYPE html>
<?php
			include_once ("like/config.php");
			?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Precious Tv | Prayer & Testimony</title>
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		<!-- google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,700%7CPlayfair+Display:400,700italic%7CRoboto:300%7CMontserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/revolution-slider/css/settings.css" rel="stylesheet">
		<link href="assets/css/global.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/responsive.css" rel="stylesheet">
		<link href="assets/css/skin.css" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<div id="wrapper">
			<!--Header Section Start Here -->
			<?php
			include_once ("includes/header.php");
			?>
			<!-- Header Section End Here -->
			<!-- site content -->
			<div id="main">
			<!-- Breadcrumb Section Start Here -->
				<div class="breadcrumb-section">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>Prayer & Testimony</h1>
								<ul class="breadcrumb">
									<li>
										<a href="index.php">Home</a>
									</li>
									<li class="active">
										Prayer & Testimony
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<!-- Breadcrumb Section End Here -->
				<!--Testimonial Section Start Here -->
				<section class="donation-holder">

					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h2 style="color:#1B214A;">Testimony</h2>
								<div class="row">
								<div class="col-xs-12 col-sm-4 col-md-4 quote-block equal-box">
									<blockquote class="equal-box">
										<p style="color:#1B214A;font-size:18px">
											<i class="fa fa-quote-left quote-mark"></i>
											I couldn’t read without my reading glasses, but after the Tuesday Breakthrough Time I can now read even the smallest letters without glasses.

</p>
										<footer>
											Faustina Asante
											<cite  title="www.demolink.com">(Dome)</cite>
										</footer>
									</blockquote>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 quote-block equal-box">
									<blockquote class="equal-box">
										<p style="color:#1B214A;font-size:18px">
											<i class="fa fa-quote-left quote-mark"></i>
											I was due for operation last week for appendicitis, and so I presented the Bishop with my communion wine for him to bless for me. After taking the wine, I proceeded for the operation, but the doctors couldn’t locate it. Three scans also confirmed that it was no more there. Thank God.

 <footer>
											Naomi Aryeh,
											<cite title="www.demolink.com">(Teshie-Nungua)</cite>
										</footer>
									</blockquote>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 quote-block">
									<blockquote class="equal-box">
										<p style="color:#1B214A;font-size:18px">
											<i class="fa fa-quote-left quote-mark"></i>
											Two of my aunties who were above the age of marriage – 49 and 50 years respectively – got married during the period of dealing with curses. Also, the husband of one of these aunties has just been promoted.

</p>
										<footer>
											Grace Adoglah, Pig Farm
											<cite title="www.demolink.com">(Pig Farm)</cite>
										</footer>
									</blockquote>
								</div>

							</div>
							</div>
						</div>
					</div>
				</section>
				<!--Testimonial Section End Here -->
				<div class="container mission-page" id="page-info">
					<div class="row">
						<div class="col-xs-12">
							<!-- Process Step Section Start Here-->
							<section class="process-section anim-section text-center">
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

			</div>
			<!-- site content ends -->

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
		<script src="assets/js/jquery.min.js"></script>
		<!-- Switcher Style End Js -->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/site.js"></script>
	</body>
</html>