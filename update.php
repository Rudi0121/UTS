<?php 

include 'koneksi.php';
$id = $_POST['id'];
$positif = $_POST['positif'];
$dirawat = $_POST['dirawat'];
$sembuh = $_POST['sembuh'];
$meninggal = $_POST['meninggal'];

mysql_query("UPDATE user SET positif='$positif', dirawat='$dirawat', sembuh='$sembuh', meninggal='$meninggal' WHERE id='$id'");

header("location:index.php?pesan=update");

?>