<!DOCTYPE html>
<html>
<head>
    <title>Formulir Layanan Sepeda Motor</title>    
    <link rel="stylesheet" type="text/css" href="styles.css"> 
</head>
<body>

    <form>
        <h2>Formulir Layanan Sepeda Motor</h2>
        
        <div class="form-row">

        <label for="nama">Nama Pemilik</label>
        <input type="text" id="nama" name="nama">

        <label for="tgl">Tanggal Service</label>
        <input type="date" id="tgl" name="tgl">

        <label for="merk">Merk Motor</label>
        <input type="text" id="merk" name="merk">

        <button type="submit">Proses Layanan</button>

        </div>
    </form>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>ID Service</th>
                <th>Nama Pelanggan</th>
                <th>Merk Motor</th>
                <th>Tanggal Service</th>
            </tr>
        </thead>

        <?php
        include "koneksi.php";
        $nomor = 1;
        $data = mysqli_query($koneksi,"select * from servis");
        while($d = mysqli_fetch_array($data)){
        ?>

        <tbody>
            <!-- Data dari formulir akan ditampilkan di sini -->
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['merk']; ?></td>
                <td><?php echo $d['tgl']; ?></td>
            </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
</body>
</html>
