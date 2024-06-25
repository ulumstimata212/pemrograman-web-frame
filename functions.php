<?php

$koneksi = mysqli_connect("localhost","root","","database_mhs");
function query ($query){
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;

}

function tambah($data){
    global $koneksi;
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $notelp = htmlspecialchars($data["notelp"]);
    $email = htmlspecialchars($data["email"]);

     
       $query = "INSERT INTO tbl_mhs VALUES(DEFAULT, '$nama','$nim','$notelp','$email')";

       mysqli_query($koneksi,$query);
       return mysqli_affected_rows($koneksi);
}

function hapus($no){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tbl_mhs WHERE no = $no");
    return mysqli_affected_rows($koneksi);
}


function cari($keyword){
    $query = "SELECT * FROM tbl_mhs
                WHERE 
                nama LIKE '%$keyword%' OR
                nim LIKE '%$keyword%' OR
                notelp LIKE '%$keyword%' OR
                email LIKE '%$keyword%' 
               
    ";
    return query($query);
}

function ubah($data){
    global $koneksi;
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $notelp = htmlspecialchars($data["notelp"]);
    $email = htmlspecialchars($data["email"]);


       $query = "UPDATE tbl_mhs SET 
       nama ='$nama',
       nim = '$nim',
       notelp = '$notelp',
       email = '$email' 
       WHERE no = $no
       ";

       mysqli_query($koneksi,$query);
       return mysqli_affected_rows($koneksi);
}
?>