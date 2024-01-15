<?php
session_start(); // Mulai sesi

include "koneksi.php";

// Tangkap data dari formulir
$id = $_POST['id'];
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$merk = $_POST['merk'];

// Query untuk menambah data
$query = "INSERT INTO servis (id, nama, tgl, merk ) VALUES ('$id', '$nama', '$tgl', '$merk')";

if (mysqli_query($koneksi, $query)) {
    $_SESSION['pesan'] = 'Data berhasil ditambahkan';
    header('Location: index.php');
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>