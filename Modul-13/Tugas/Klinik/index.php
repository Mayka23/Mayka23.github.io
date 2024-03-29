<!DOCTYPE html>
<head>
    <title>Formulir Data Pasien</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    
    <div class="container">
        <div class="data-container">
            <h1>Data Pasien - Formulir Kesehatan</h1>

            <a href="input.php">
                <button id="tambah">Tambah Data</button>
            </a>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Usia</th>
                        <th>Jenis Kelamin</th>
                        <th>Keluhan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <?php
                    include "koneksi.php";
                    $nomor = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM klinik");
                    while($d = mysqli_fetch_array($data)){
                ?>

                <tbody>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $d['id']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['usia']; ?></td>
                        <td><?php echo $d['jenis_kelamin']; ?></td>
                        <td><?php echo $d['keluhan']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $d['id']; ?>">
                                <button id="update-btn">Update</button>
                            </a>
                            <a href="hapus_aksi.php?id=<?php echo $d['id']; ?>">
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
