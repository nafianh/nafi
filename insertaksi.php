<?php
include "koneksi.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$simpan=mysql_query("INSERT INTO biodata VALUES('','$nama','$alamat', '$usia')");
header("location:home.php");
?>