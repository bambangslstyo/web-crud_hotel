<!DOCTYPE html>
<html>
<head>
	<title>TAMU</title>
	
</head>
<body bgcolor="#4ACCD4">
	<h2 align="center">Daftar Tamu</h2>
	
	<p align="center"><a href="http://localhost/hotel/home.php">Home</a> / <a href="index.php">Daftar Tamu</a> / <a href="tambah.php">Tambah Daftar Tamu</a></p>
	
	<h3 align="center">Tambah Daftar Tamu</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0" align="center">
			<tr>
				<td>Kode Tamu</td>
				<td>:</td>
				<td><input type="text" name="kode" size="11" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="50" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<select name="jk" required>
						<option value="">Pilih Jenis Kelamin</option>
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td><input type="text" name="umur" size="3" required></td>
			</tr>
			<tr>
				<td>No. Telp</td>
				<td>:</td>
				<td><input type="text" name="notlp" size="15" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>