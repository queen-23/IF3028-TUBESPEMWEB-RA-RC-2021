<html>
<head>
	<title>SIMPLE LAPOR</title>
</head>
<body>
	<h1>Tambah Data Siswa</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
<!-- 	<tr>
		<td>NIS</td>
		<td><input type="text" name="nis"></td>
	</tr> -->
	<tr>
		<td>Judul</td>
		<td><input type="text" name="nama"></td>
	</tr>
<!-- 	<tr>
		<td>Jenis Kelamin</td>
		<td>
		<input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
		<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
		</td>
	</tr> -->
<!-- 	<tr>
		<td>Telepon</td>
		<td><input type="text" name="telp"></td>
	</tr> -->
	<tr>
		<td>Isi</td>
		<td><textarea name="alamat" cols="80" rows="8"></textarea></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td><input type="file" name="foto"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
