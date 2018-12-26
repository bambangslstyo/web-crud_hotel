<!DOCTYPE html>
<html>
<head>
	<title>TAMU</title>
	
</head>
<body bgcolor="#4ACCD4">
	<h2 align="center">Daftar Tamu</h2>
	
	<p align="center"><a href="http://localhost/hotel/home.php">Home</a> / <a href="index.php">Daftar Tamu</a> / <a href="tambah.php">Tambah Daftar Tamu</a></p>
	
	<h3 align="center">Edit Daftar Tamu</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM tamu WHERE tamu_id='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0" align="center">
			<tr>
				<td>Kode Tamu</td>
				<td>:</td>
				<td><input type="text" name="kode" size="11" value="<?php echo $data['tamu_kode']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" value="<?php echo $data['tamu_nama']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="50" value="<?php echo $data['tamu_alamat']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<select name="jk" required>
						<option value="">Pilih Kelas</option>
						<option value="Laki-Laki" <?php if($data['tamu_jk'] == 'Laki-Laki'){ echo 'selected'; } ?>>Laki-Laki</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Perempuan" <?php if($data['tamu_jk'] == 'Perempuan'){ echo 'selected'; } ?>>Perempuan</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
					</select>
				</td>
			</tr>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td><input type="text" name="umur" size="3" value="<?php echo $data['tamu_umur']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>No. Telp</td>
				<td>:</td>
				<td><input type="text" name="notlp" size="15" value="<?php echo $data['tamu_notlp']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>