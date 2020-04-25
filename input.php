<html>
<head>
	<title>Tugas UTS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Data Pemantauan Covid19 Wilayah DKI Jakarta</h1>
		<h2>Per 23 April 2020 15:20:13 (Waktu dan Jam Sekarang)</h2>
		<h3>Rudi 171011401434</h3>
	</div>
	
	<br/>
 
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Positif</td>
				<td><input type="text" name="positif"></td>					
			</tr>	
			<tr>
				<td>Dirawat</td>
				<td><input type="text" name="dirawat"></td>					
			</tr>	
			<tr>
				<td>Sembuh</td>
				<td><input type="text" name="sembuh"></td>					
			</tr>	
			<tr>
				<td>Meninggal</td>
				<td><input type="text" name="meninggal"></td>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html> 