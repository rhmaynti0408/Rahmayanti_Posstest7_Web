<?php
require "config.php";
if(isset($_GET['id'])){
    $query = mysqli_query($db,"SELECT * FROM pesanan WHERE id=$_GET[id]");
    $result = mysqli_fetch_assoc($query);
    $nama = $result['nama'];
    $nomor = $result['nomor'];
    $caption = $result['caption'];
}

if(isset($_POST['submit'])){
    $query = mysqli_query($db,"UPDATE pesanan SET nama='$_POST[nama]',nomor='$_POST[nomor]',caption='$_POST[caption]' WHERE id=$_GET[id]");
    if($query){
        header("Location:index.php");
    } else {
        echo "Update gagal";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIA UNMUL</title>
    <link rel="stylesheet" href="css2.css">
</head>
<body>
        <h1 class="judul">Yanti coffee</h1>
    
    <div class="form-class">
        <h3>Edit pesanan</h3>
        <form action="" method="post">
            <label for="">Nama Lengkap</label><br>
            <input type="text" name="nama" class="form-text" value='<?=$nama?>'><br>
            
            <label for="">nomor atrian</label><br>
            <input type="text" name="nim" class="form-text" value='<?=$nomor?>'><br>

            <label for="">caption</label><br>
            <textarea name="caption" cols="64" rows="10" ><?=$captiont?></textarea><br>
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        </form>
    </div>

</body>
</html>