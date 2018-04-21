<?php
    $host = 'localhost';
    $username = 'root'; // username untuk database
    $password = ''; // password untuk database
    $database = 'primakara'; // nama database yang ingin digunakan

    $nim = $_GET['nim'];
    $nama = $_GET['nama'];
    $jurusan = $_GET['jurusan'];

    $connect = mysqli_connect($host, $username, $password, $database); // cara mengkoneksikan database

    $kode_insert = "INSERT INTO mahasiswa(nim, nama, jurusan) values( '$nim', '$nama', '$jurusan')";

    $execute = mysqli_query($connect, $kode_insert);

    if($execute) {
        echo "Berhasil";
    } else {
        echo "Gagal";
    }
?>