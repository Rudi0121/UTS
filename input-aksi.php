<?php
include "koneksi.php";
$positif = $_POST['positif'];
$dirawat = $_POST['dirawat'];
$sembuh = $_POST['sembuh'];
$meninggal = $_POST['meninggal'];
 
mysqli_query("INSERT INTO user VALUES('','$positif','$dirawat','$sembuh','$meninggal')");
 
header("location:index.php?pesan=input");
?>