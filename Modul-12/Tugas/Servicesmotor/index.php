<!DOCTYPE html>
<html>
<head>
    <title>Formulir Layanan Sepeda Motor</title>    
    <link rel="stylesheet" type="text/css" href="styles1.css"> 
</head>
<body>

<div class="container">
        <div class="data-container">
            <h1>Data Servis </h1>

            <a href="input.php">
                <button id="tambah">Tambah Data</button>
            </a>

        <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Service</th>
                        <th>Nama Pengunjung</th>
                        <th>Merk Motor</th>
                        <th>Tanggal Service</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <?php
                    include "koneksi.php";
                    $nomor = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM servis");
                    while($d = mysqli_fetch_array($data)){
                ?>

                <tbody>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $d['id']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['merk']; ?></td>
                        <td><?php echo $d['tgl']; ?></td>
                        <td>
                        <a href="edit.php?id=<?php echo $d['id']; ?>">
                            <button id="update-btn">Update</button>
                        </a>
                        <a href="hapus.php?id=<?php echo $d['id']; ?>">
                            <button id="aksi-btn">Delete</button>
                        </a>
                        </td>                        
                <?php
                    }
                ?>                       
                    </tr>                    
                </tbody>
            </table>
        </div>
    </div>

               

    <script>
        function tambahData() {
            // Redirect ke halaman formulir untuk menambah data baru
            window.location.href = 'input.php';
        }
    </script>
</body>
</html>
