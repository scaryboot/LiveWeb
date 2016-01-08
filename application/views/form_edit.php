<html>
<html>
	<head>
		<title>edit barang</title>
		<link href="<?php echo base_url()."asset/";?>css/css_form_edit.css" rel="stylesheet">
	</head>
	<body>
		<form class="editdata" method="POST" action="<?php echo base_url()."index.php/crud/do_update"; ?>">

			<div><h2 >Edit Barang</h2></div>
			<div>
				<label>
					<span>Kode Konten</span>
				 	<input id="kode_konten" type="text" name="kode_konten" value="<?php echo $kode_konten; ?>" readonly/>
				</label>
			</div>
			<div>
				<label>
					<span>Nama</span>
					<input id="judul_konten" type="text" name="judul_konten" value="<?php echo $judul_konten; ?>"/>
				</label>
			</div>
			<div>
				<label>
					<span>Harga</span>
					<input id="harga_konten" type="text" name="harga_konten" value="<?php echo $harga_konten; ?>"/>
				</label>
			</div>
			<div>
				<label>
					<span>Isi</span>
					<input id="isi" type="text" name="isi" value="<?php echo $isi; ?>"/>
				</label>
			</div>
			<div>
				<label>
					<span>Kode Kategori</span>
					<input id="kode_ketegori" type="text" name="kode_kategori" value="<?php echo $kode_kategori; ?>"/>
				</label>
			</div>
			<div>
				<label>
					<span>&nbsp;</span> 
					<input class="button" type="submit" name="btnSubmit" value="simpan"/>
				</label>
			</div>
		
	</form>
	</body>
</html>