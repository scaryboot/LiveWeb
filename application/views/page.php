<?php
 session_start();
 if(!isset($_SESSION['SES_LOGIN'])){
	header('location:home');
	//echo "<script>document.location.href='home'</script>";
 }
 require_once "library/inc.connection.php";
 require_once "library/inc.library.php";
 opendb();
//cari data toko
   $qri = "SELECT * FROM ma_toko";
   $res = querydb($qri);
   $rec = arraydb($res);
   $namaToko = $rec['nm_toko'];

 //cari data user 
 $_SESSION['SES_LOGIN'] ? $user_id = trim($_SESSION['SES_LOGIN']) : $user_id="";
 $_SESSION['USER_LEVEL'] ? $levelAkses = trim($_SESSION['USER_LEVEL']) : $levelAkses="";

 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $namaToko ?></title>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<?php 
		switch($levelAkses){
			case "Admin":
				include"menu_admin.php";
				break;
			case "Kasir":
				include"menu_kasir.php";
				break;
			case "Gudang":
				include"menu_gudang.php";
				break;
			case "Manager":
				include"menu_manager";
				break;
			default:
				include"menu_all.php";
		}
	?>
	<div class="container-fluid">	
		<div class="row-kosong"></div>
			<?php 

				include"page_control.php";
			?>	
				
						
	</div><!-- /container -->
	<footer class="footer hidden-print"><div class="container"><p class="text-muted">Aplikasi DataPOS ver 1.0.0</p></div></footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script-->
	<script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	 <script src="js/fungsi.js"></script>
  </body>
</html>