<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$no			= $_POST['no'];
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$tipe		= $_POST['tipe'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$tarif		= $_POST['tarif'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$nginap		= $_POST['nginap'];
	$total		= $_POST['total'];
	$bayar		= $_POST['bayar'];
	$kembali 	= $_POST['kembali'];
	
	$input = mysql_num_rows(mysql_query("SELECT * FROM transaksi WHERE transaksi_no='$no'"));

	if ($input > 0) {
		echo 'NO transaksi yang Anda masukkan sudah ada! ';
		echo '<a href="tambah.php">Kembali</a>';

	}elseif ($input ==0){ 
		mysql_query("INSERT INTO transaksi VALUES(NULL, '$no', '$nama', '$tipe', '$tarif', '$nginap', '$total', '$bayar', '$kembali')") or die(mysql_error());
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>