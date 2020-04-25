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

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>

	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Positif</th>
			<th>Dirawat</th>
			<th>Sembuh</th>
			<th>Meninggal</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query('SELECT * FROM user')or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['positif']; ?></td>
			<td><?php echo $data['dirawat']; ?></td>
			<td><?php echo $data['sembuh']; ?></td>
			<td><?php echo $data['meninggal']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
	<?php  }?>
	</table>
</body>
</html>