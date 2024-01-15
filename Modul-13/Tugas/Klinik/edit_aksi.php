<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$usia = $_POST['usia'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$keluhan = $_POST['keluhan'];

mysqli_query($koneksi,"update klinik set nama='$nama', usia='$usia', jenis_kelamin='$jenis_kelamin', keluhan='$keluhan' where id='$id'");

header("location:index.php?pesan=update"); 
?>