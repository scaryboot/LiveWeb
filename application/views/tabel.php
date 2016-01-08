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
    <link rel="shortcut icon" href="<?php echo base_url()."asset/";?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
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
							<a href="<?php echo base_url('index.php/crud/index')?>"><span>Halaman</span>-Admin</a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo base_url('index.php')?>"></i> Logout</a></li>
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
					</div>
					<div class="col-sm-3">
							<h4> </h4>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	<body>
		<?php echo "<h2>".$this->session->flashdata('pesan')."</h2>" ?>
		<table style="border-collapse:collapse;background:#ffc" width="100%" border="1">
			<tr style="background:grey;">
				<th>Kode konten</th>
				<th>Nama</th>
				<th>harga</th>
				<th>isi</th>
				<th>kode kategori</th>
				<th>foto</th>
				<th>pilih</th>
			</tr>
			<?php
				foreach($data as $d){ ?>
			<tr>
				<td align="center"><?php echo $d['kode_konten']; ?></td>
				<td><?php echo $d['judul_konten']; ?></td>
				<td><?php echo $d['harga_konten']; ?></td>
				<td><?php echo $d['isi']; ?></td>
				<td align="center"><?php echo $d['kode_kategori']; ?></td>
				<td align="center">
					<a href="<?php echo base_url()."index.php/crud/edit_Data/".$d['kode_konten'];?>">edit</a>
					<a href="<?php echo base_url()."index.php/crud/do_delete/".$d['kode_konten'];?>">delete</a>
				</td>
				<td><?php echo $d['path']; ?></td>
			</tr>
			<?php }?>
		</table>
		<table>
			<tr>
				<td></td>
			</tr>
		</table>
		<table align="right" style="border-collapse:collapse;background:#ffc" width="10%" border="1">
			<tr style="background:white;">
				<td align="center"><a href="<?php echo base_url()."index.php/upload";?>">tambah Data</a></td>
			</tr>
		</table>
	</body>
</html>