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
	
	<h3 align="center">Tambah Data Kamar</h3>
	
	<form id="form1" name="form1" action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0" align="center">
			<tr>
				<td>Kode Kamar</td>
				<td>:</td>
				<td><input type="text" name="kode" required></td>
			</tr>
			<tr>
				<td>Tipe Kamar</td>
				<td>:</td>
				<td>
					<select name="tipe" id="tipe" onfocus="startCalculate()" onblur="stopCalc()">
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
				<td>Tarif Kamar</td>
				<td>:</td>
				<td><input type="text" name="tarif" required onfocus="startCalculate()" onblur="stopCalc()"></p></td>
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