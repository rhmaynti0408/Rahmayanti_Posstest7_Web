<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="hem.css">
    <title> pesanan anda</title>
    <link rel="stylesheet" href="css2.css"/>
</head>
<body>
    <section class="aku">
	<h1>Yanti Coffee</h1>
    <h2>Coffee anda akan segera datang</h2><br>
	Nama :<?php echo $_POST["nama"];?><br>
	tingkatan :<?php echo $_POST["tingkatan"];?><br>
    Jenis takaran :<?php echo $_POST["Jenistakaran"];?><br>
	Nomor Meja :<?php echo $_POST["nomormeja"];?><br>
    tambahan toping :<?php echo $_POST["toping"];?><br>

    <label for="tingkatan">ukur rating</label> <br>
                <input
                id="isian-volume"
                name="foto"
                type="range"
                ><br>

    <a href="home.php"><button class="keranjang"><u class="fas fa-star">HOME MENU LAIN</i></a>
</section>        

</body>


</html>