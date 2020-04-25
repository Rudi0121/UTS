<!DOCTYPE html>
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
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM user WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql));
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Positif</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="" name="positif" value="<?php echo $data['positif'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Dirawat/td>
				<td><input type="" name="dirawat" value="<?php echo $data['dirawat'] ?>"></td>					
			</tr>	
			<tr>
				<td>Sembuh</td>
				<td><input type="" name="sembuh" value="<?php echo $data['sembuh'] ?>"></td>					
			</tr>	
			<tr>
				<td>Meninggal</td>
				<td><input type="" name="meninggal" value="<?php echo $data['meninggal'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>