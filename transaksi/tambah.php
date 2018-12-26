<!DOCTYPE html>
<html>
<head>
	<title>TRANSAKSI</title>

	<script>
		function startInput(){
		interval=setInterval("Input()",10);
		}

		function Input(){
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

		function stopIn(){
		clearInterval(interval);
		}

		function startCalculate(){
		interval=setInterval("Calculate()",10);
		}

		function Calculate(){
		var a=document.form1.tarif.value;
		var b=document.form1.nginap.value;
		var c=document.form1.bayar.value;
		var d=document.form1.total.value;
		document.form1.total.value=(a*b);
		document.form1.kembali.value=(c-d);
		}

		function stopCalc(){
		clearInterval(interval);
		}	
	</script>
	
</head>
<body bgcolor="#4ACCD4">
	<h2 align="center">Transaksi</h2>
	
	<p align="center"><a href="http://localhost/hotel/home.php">Home</a> / <a href="index.php">Daftar Transaksi</a> / <a href="tambah.php">Tambah Transaksi</a></p>
	
	<h3 align="center">Tambah Transakski</h3>
	
	<form action="tambah-proses.php" method="post" id="form1" name="form1">
		<table cellpadding="3" cellspacing="0" align="center">
			<tr>
				<td>No. Transaksi</td>
				<td>:</td>
				<td><input type="text" name="no" size="11" required></td>
			</tr>
			<tr>
				<td>Nama Tamu</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>Type Kamar</td>
				<td>:</td>
				<td>
					<select name="tipe" id="tipe" onfocus="startInput()" onblur="stopIn()">
						<option value="">Pilih Tipe Kamar :</option>
						<option value="Standar Room">Standar Room</option>
						<option value="Superior Room">Superior Room</option>
						<option value="Junior Suite Room">Junior Suite Room</option>
						<option value="Suite Room">Suite Room</option>
						<option value="Presidential Room">Presidential Room</option>						
					</select>
				</td>
			</tr>
			<tr>
				<td>Tarif/Hari</td>
				<td>:</td>
				<td><input type="text" name="tarif" id="tarif" onfocus="startCalculate()" onblur="stopCalc()"></p></td>
			</tr>
			<tr>
				<td>Lama Nginap</td>
				<td>:</td>
				<td><input type="text" name="nginap" id="nginap" size="10" onfocus="startCalculate()" onblur="stopCalc()"></td>
			</tr>
			<tr>
				<td>Total Bayar</td>
				<td>:</td>
				<td><input type="text" name="total" id="total" onfocus="startCalculate()" onblur="stopCalc()"></td>
			</tr>
			<tr>
				<td>Jumlah Uang</td>
				<td>:</td>
				<td><input type="text" name="bayar" size="20" onfocus="startCalculate()" onblur="stopCalc()"></td>
			</tr>
			<tr>
				<td>Kembalian</td>
				<td>:</td>
				<td><input type="text" name="kembali" onfocus="startCalculate()" onblur="stopCalc()"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>