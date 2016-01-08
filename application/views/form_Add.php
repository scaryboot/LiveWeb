<html>
<html>
	<head>
		<title>tambah barang</title>
	</head>
	<body>
		<form method="POST" action="<?php echo base_url()."index.php/crud/do_insert"; ?>">
		<table>
			<tr>
				<td>kode konten</td>
				<td><input type="text" name="kode_konten"/></td>
			</tr>
			<tr>
				<td>judul konten</td>
				<td><input type="text" name="judul_konten"/></td>
			</tr>
			<tr>
				<td>harga konten</td>
				<td><input type="text" name="harga_konten"/></td>
			</tr>
			<tr>
				<td>isi</td>
				<td><input type="text" name="isi"/></td>
			</tr>
			<tr>
				<td>kode kategori</td>
				<td><input type="text" name="kode_kategori"/></td>
			</tr>
			<tr>
				<td>upload foto</td>
				<td><input class="button" type="file" name="userfile" size="20" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnSubmit" value="simpan"/></td>
			</tr>
		</table>
	</form>
	</body>
</html>