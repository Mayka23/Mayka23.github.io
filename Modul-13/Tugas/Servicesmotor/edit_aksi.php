<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$merk = $_POST['merk'];

mysqli_query($koneksi,"update servis set nama='$nama', tgl='$tgl', merk='$merk' where id='$id'");

header("location:index.php?pesan=update"); 
?>