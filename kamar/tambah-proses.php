<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$kode		= $_POST['kode'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$tipe		= $_POST['tipe'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$tarif		= $_POST['tarif'];
	
	$input = mysql_num_rows(mysql_query("SELECT * FROM kamar WHERE kamar_kode='$kode'"));

	if ($input > 0) {
		echo 'Kode Kamar yang Anda masukkan sudah ada! ';
		echo '<a href="tambah.php">Kembali</a>';

	}elseif($input ==0){
		 mysql_query("INSERT INTO kamar VALUES(NULL, '$kode', '$tipe', '$tarif')") or die(mysql_error());
		
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