<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id				= $_POST['id'];	//membuat variabel $id dan datanya dari inputan hidden id
	$no				= $_POST['no'];
	$nama			= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$tipe			= $_POST['tipe'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$tarif			= $_POST['tarif'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$nginap			= $_POST['nginap'];
	$total			= $_POST['total'];
	$bayar			= $_POST['bayar'];
	$Kembali		= $_POST['kembali'];
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE transaksi SET transaksi_no='$no', tamu_nama='$nama', kamar_tipe='$tipe', transaksi_tarif='$tarif', transaksi_nginap='$nginap', transaksi_total='$total', transaksi_bayar='$bayar', transaksi_kembali='$kembali' WHERE transaksi_id='$id'") or die(mysql_error());
	
	//jika query update sukses
	if($update){
		
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