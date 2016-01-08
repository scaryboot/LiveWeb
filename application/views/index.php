<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Sinar-Jaya</title>
    <link href="<?php echo base_url()."asset/";?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."asset/";?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."asset/";?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url()."asset/";?>css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url()."asset/";?>css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url()."asset/";?>css/main.css" rel="stylesheet">
	<link href="<?php echo base_url()."asset/";?>css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>Hp : 081222333444</a></li>
								<li><a href="#"><i class="fa fa-phone"></i>BBM : 7SM78E</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i>sinar_jaya@gmail.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php echo base_url('index.php')?>"><span>Sinar</span>-Jaya</a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo base_url()."index.php/web/loginadmin";?>"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a>Cara pemesanan dengan menghubungi atau chart kami dengan nomor HP dan contact BBM diatas</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<!--slider-->
		<?php echo $slider; ?>
	<!--end slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<!--sidebar-->
					<?php echo $sidebar; ?>
					<!-- end sidebar -->
					</div>

				</div>
				<!-- content-->
					<?php echo $content; ?>
				<!-- end content -->
					
				</div>
			</div>
		</div>
		<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-content">
				<ul class="list-inline item-details">
					<li><a href="http://themifycloud.com">ThemifyCloud</a></li>
					<li><a href="http://themescloud.org">ThemesCloud</a></li>
				</ul>
			</div>
		</div>
	</section>
	
	
		<!--footer-->
		<?php echo $footer; ?>
		<!--end footer-->
		
	

  	<link href="<?php echo base_url()."asset/";?>css/responsive.css" rel="stylesheet">
    <script src="<?php echo base_url()."asset/";?>js/jquery.js"></script>
	<script src="<?php echo base_url()."asset/";?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()."asset/";?>js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url()."asset/";?>js/price-range.js"></script>
    <script src="<?php echo base_url()."asset/";?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url()."asset/";?>js/main.js"></script>
</body>
</html>