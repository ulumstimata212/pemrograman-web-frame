<?php 
require'functions.php';
$database_mhs = query("SELECT * FROM tbl_mhs");

if(isset($_POST["cari"])){
    $database_mhs = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>꧅Daftar Informasi Buku Telepon Mahasiswa꧅</h1>
    <div class="add">
        <a href="create.php">Tambah Data</a>
    </div>
    <br><br>

    <form action="" method="POST">
    <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan kata kunci pencarian" autocomplete="off">
    <button type="submit" name="cari">Cari</button>
    </form>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach ($database_mhs as $row ): ?>
        <tr>
            <td><?=$i?></td>
            <td>
                <a href="update.php?no=<?= $row['no'];?>">ubah</a> |
                <a href="delete.php?no=<?= $row['no'];?>">hapus</a>
            </td>
            <td><?= $row['nama']?></td>
            <td><?= $row['nim']?></td>
            <td><?= $row['notelp']?></td>
            <td><?= $row['email']?></td>
          
        </tr>
        <?php $i++;?>
        <?php endforeach; ?>
    </table>
</body>
</html>