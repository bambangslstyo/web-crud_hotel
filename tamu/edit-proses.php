<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id			= $_POST['id'];	//membuat variabel $id dan datanya dari inputan hidden id
	$kode		= $_POST['kode'];
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$alamat		= $_POST['alamat'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$jk			= $_POST['jk'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$umur		= $_POST['umur'];
	$notlp		= $_POST['notlp'];

	$update = mysql_num_rows(mysql_query("SELECT * FROM tamu WHERE tamu_kode='$kode'"));

	if ($update > 0) {
		echo 'Kode Tamu yang Anda masukkan sudah ada! ';
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';

	}elseif($update==0) {
		mysql_query("UPDATE tamu SET tamu_kode='$kode', tamu_nama='$nama', tamu_alamat='$alamat', tamu_jk='$jk', tamu_umur='$umur', tamu_notlp='$notlp' WHERE tamu_id='$id'") or die(mysql_error());
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>