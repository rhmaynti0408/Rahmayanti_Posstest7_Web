<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="hem.css">
    <title> pesan kopi</title>
    <link rel="stylesheet" href="css2.css"/>
</head>
<body>
<h1>SILAHKAN PESAN DULU KAKAK</h1>
    <section class="container">
        <form action="catatan.php" method="POST">
            <div>
                <label>Nama pemesan :</label> <br>
                <input name="nama" type="text">
            </div>
			<div>
                <label>tingkatan :</label> <br>                
                <input name="tingkatan" value="panas" type="radio">panas
                <input name="tingkatan" value="sedang" type="radio">hangat
                <input name="tingkatan" value="dingin" type="radio">dingin
            </div>
			<div>
                <label>Jenis takaran :</label> <br>                
                <input name="Jenistakaran" value="manis" type="radio">manis
                <input name="Jenistakaran" value="sedang" type="radio">sedang
                <input name="Jenistakaran" value="tanpagula" type="radio">tanpagula
            </div>
            <div>
                <label>Nomor Meja :</label> <br>
                <input name="nomormeja" type="number">
            </div>
            <div>
                <label>tambahan toping :</label> <br>
                <input name="toping" type="text">
            </div>
                <label for="isian-tanggal-pesanan">Tanggal pesanan</label> <br>
                <input
                id="isian-tanggal-lahir"
                name="tanggal_lahir"
                type="date"
                >
            <div>
                <input type="submit" value="Lihat">
            </div>
        </form>
</section>        
</body>
</html>