<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIA UNMUL</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="judul">Yanti Coffee</h1>
    <div class="list-table center" style="overflow-x: auto;">
        <table>
            <thead>
                    <th style="width: 20px;" colspan="2">
                        <a href="form.php" class="tambah">Tambah</a>
                    </th>
                </tr>
                <tr>
                    <th>No</th>
                    <th nowrap>Nama Lengkap</th>
                    <th>nomor</th>
                    <th>caption</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require "config.php";
                $query = mysqli_query($db, "SELECT * FROM pesanan"); //099
                $i = 1;
                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                <table>
                    <tr>
                        <td><?= $i ?></td>
                        <td nowrap><?=$row['nama']?></td>
                        <td><?=$row['nim']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['telpon']?></td>
                        <td><?=$row['alamat']?></td>
                        <td class="edit">
                            <a href="edit.php?id=<?=$row['id']?>">
                            </a>
                        </td>
                        <td class="hapus">
                            <a href="hapus.php?id=<?=$row['id']?>">
              </table>
</body>

</html>