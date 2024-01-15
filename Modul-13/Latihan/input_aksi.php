<?php 
include 'koneksi.php';

$id = $_POST['id'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi,"insert into mahasiswa values('$id','$npm','$nama','$alamat','$kelas')");

header("location:index.php?pesan=input");

?>