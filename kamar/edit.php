<!DOCTYPE html>
<html>
<head>
	<title>KAMAR</title>
	
	<script>
		function startCalculate(){
		interval=setInterval("Calculate()",10);
		}

		function Calculate(){
		var a=document.getElementById("form1").tipe.value;
  		var b=document.getElementById("tarif");
		
		if (a=="Standar Room") {
			document.form1.tarif.value="650000";
		}
		else if (a=="Superior Room") {
			document.form1.tarif.value="1830000";
		}
		else if (a=="Junior Suite Room") {
			document.form1.tarif.value="3250000";
		}
		else if (a=="Suite Room") {
			document.form1.tarif.value="4780000";
		}
		else if (a=="Presidential Room") {
			document.form1.tarif.value="6990000";
		}
		
		}

		function stopCalc(){
		clearInterval(interval);
		}	
	</script>

</head>
<body bgcolor="#4ACCD4" align="center">
	<h2 align="center">Kamar</h2>
	
	<p align="center"><a href="http://localhost/hotel/home.php">Home</a> / <a href="index.php">Data Kamar</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3 align="center">Edit Data Kamar</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM kamar WHERE kamar_id='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form id="form1" name="form1" action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0" align="center">
			<tr>
				<td>Kode Kamar</td>
				<td>:</td>
				<td><input type="text" name="kode" size="11" value="<?php echo $data['kamar_kode']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Tipe Kamar</td>
				<td>:</td>
				<td>
					<select name="tipe" required onfocus="startCalculate()" onblur="stopCalc()">
						<option value="">Pilih Tipe Kamar :</option>
						<option value="Standar Room" <?php if($data['kamar_tipe'] == 'Standar Room'){ echo 'selected'; } ?>>Standar Room</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Superior Room" <?php if($data['kamar_tipe'] == 'Superior Room'){ echo 'selected'; } ?>>Superior Room</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Junior Suite Room" <?php if($data['kamar_tipe'] == 'Junior Suite Room'){ echo 'selected'; } ?>>Junior Suite Room</option>
						<option value="Suite Room" <?php if($data['kamar_tipe'] == 'Suite Room'){ echo 'selected'; } ?>>Suite Room</option>
						<option value="Presidential Room" <?php if($data['kamar_tipe'] == 'Presidential Room'){ echo 'selected'; } ?>>Presidential Room</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tarif Kamar</td>
				<td>:</td>
				<td><input type="text" name="tarif" value="<?php echo $data['kamar_tarif']; ?>" required onfocus="startCalculate()" onblur="stopCalc()"></td>
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