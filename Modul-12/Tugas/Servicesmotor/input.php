<!DOCTYPE html>
<html>
<head>
    <title>Formulir Layanan Sepeda Motor</title>    
    <link rel="stylesheet" type="text/css" href="styles1.css">  
</head>
<body>

    <form action = "input_aksi.php" method = "post"> 
        <h2>Formulir Layanan Sepeda Motor</h2>
        
        <div class="form-row">

            <label for="id_service">ID Service</label>
            <input type="text" id="id" name="id">

            <label for="nama">Nama Pemilik</label>
            <input type="text" id="nama" name="nama">

            <label for="tgl">Tanggal Service</label>
            <input type="date" id="tgl" name="tgl">

            <label for="merk">Merk Motor</label>
            <input type="text" id="merk" name="merk">

            <button type="submit">Proses Layanan</button>
        </div>
    </form>

</body>
</html>
