<!DOCTYPE html>
<html>
<head>
	<title>TAMU</title>
	
</head>
<body bgcolor="#4ACCD4">
	<h2 align="center">Daftar Tamu Hotel Bambang</h2>
	
	<p align="center"><a href="http://localhost/hotel/home.php">Home</a> / <a href="http://localhost/hotel/kamar/index.php">Kamar</a> / <a href="http://localhost/hotel/pegawai/index.php">Pegawai</a> / <a href="http://localhost/hotel/transaksi/index.php">Transaksi</a> / <a href="tambah.php">Tambah Daftar Tamu</a></p>
	
	<table cellpadding="5" cellspacing="0" border="1" align="center">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>Kode Tamu</th>
			<th>Nama Lengkap</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Umur</th>
			<th>No. Telp</th>
			<th>Opsi</th>
		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM tamu ORDER BY tamu_kode DESC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut\
					echo '<td>'.$data['tamu_kode'].'</td>';
					echo '<td>'.$data['tamu_nama'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['tamu_alamat'].'</td>';	//menampilkan data kelas dari database
					echo '<td>'.$data['tamu_jk'].'</td>';	//menampilkan data jurusan dari database
					echo '<td>'.$data['tamu_umur'].'</td>';
					echo '<td>'.$data['tamu_notlp'].'</td>';
					echo '<td><a href="edit.php?id='.$data['tamu_id'].'">Edit</a> / <a href="hapus.php?id='.$data['tamu_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampikan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
</body>
</html>