<!DOCTYPE html>
<html>
<head>
    <title>Formulir Layanan Sepeda Motor</title>    
    <link rel="stylesheet" type="text/css" href="style10.css">  
</head>
<body>
    <?php
	    include 'koneksi.php';
	    $id = $_GET['id'];
	    $data = mysqli_query($koneksi,"select * from servis where id='$id'");
	    while($d = mysqli_fetch_array($data)){
	?>

    <form action = "edit_aksi.php" method = "post"> 
        <h2> Edit Formulir Layanan Sepeda Motor</h2>
        
        <div class="form-row">

             <label for="id">ID Service</label>
            <input type="text" id="id" name="id" value="<?php echo $d['id']; ?>">

            <label for="nama">Nama Pemilik</label>
            <input type="text" id="nama" name="nama" value="<?php echo $d['nama']; ?>">

            <label for="tgl">Tanggal Service</label>
            <input type="date" id="tgl" name="tgl" value="<?php echo $d['tgl']; ?>">

            <label for="merk">Merk Motor</label>
            <input type="text" id="merk" name="merk" value="<?php echo $d['merk']; ?>">

            <button type="submit">Submit</button>
        </div>
    </form>
    <?php
        }
    ?>
</body>
</html>
