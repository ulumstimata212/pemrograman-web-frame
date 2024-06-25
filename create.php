<?php 
require "functions.php";

if(isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "
        <script>alert('Data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";

    }else {
        echo "Data Gagal ditambahkan";
    }
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
    <link rel="stylesheet" href="styles.css">  
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" required id="nama">
            </li>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" required id="nim">
            </li>
            <li>
                <label for="notelp">Nomor Telepon :</label>
                <input type="text" name="notelp" required id="notelp">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" required id="email">
            </li>
            <br>
            <br>
            <li>
                <button type="submit" name="submit">Simpan</button>
            </li>
        </ul>
    </form>
</body>
</html>