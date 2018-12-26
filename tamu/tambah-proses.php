<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$kode		= $_POST['kode'];
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$alamat		= $_POST['alamat'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$jk			= $_POST['jk'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$umur		= $_POST['umur'];
	$notlp		= $_POST['notlp'];

	$input = mysql_num_rows(mysql_query("SELECT * FROM tamu WHERE tamu_kode='$kode'"));

	if ($input > 0) {
		echo 'Kode Tamu yang Anda masukkan sudah ada! ';
		echo '<a href="tambah.php">Kembali</a>';

	}elseif($input==0){
	
	mysql_query("INSERT INTO tamu VALUES(NULL, '$kode', '$nama', '$alamat', '$jk', '$umur', '$notlp')") or die(mysql_error());
		
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