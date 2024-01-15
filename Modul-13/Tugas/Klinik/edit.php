<!DOCTYPE html>
<html>
<head>
    <title>Formulir Klinik Kesehatan</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from klinik where id='$id'");
	while($d = mysqli_fetch_array($data)){
	?>

    <form action = "edit_aksi.php" method = "post">      

            <h2> Edit Formulir Klinik Kesehatan</h2>

        <div class="form-row">
            
            <label for="id">ID Pasien:</label>
            <input type="text" id="id_pasien" name="id" value="<?php echo $d['id']; ?>">

            <label for="nama">Nama Pasien:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $d['nama']; ?>">

            <label for="usia">Usia:</label>
            <input type="number" id="usia" name="usia" value="<?php echo $d['usia']; ?>">

            <label for="jenis-kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>">
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>

            <label for="keluhan">Keluhan:</label>
            <textarea id="keluhan" name="keluhan" rows="5" cols="20" value="<?php echo $d['keluhan']; ?>"></textarea>

            <button type="submit">Kirim Formulir</button>
            
        </div>
    </form>
    <?php
        }
    ?>
</body>
</html>