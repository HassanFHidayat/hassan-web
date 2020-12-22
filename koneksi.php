<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    $host   = "localhost";
    $user   = "root";
    $pass   = "123";
    $dbName = "hassanweb";

    $kon = mysqli_connect($host, $user, $pass);
    if (!$kon) {
        die("Gagal Koneksi...");
    }

    $hasil = mysqli_select_db($kon, $dbName);
    if (!$hasil) {
        $hasil = mysqli_query($kon, "CREATE DATABASE $dbName");
        mysqli_select_db($kon, $dbName);
    } else {
        $hasil = mysqli_select_db($kon, $dbName);
        if (!$hasil) die ("Gagal Konek Database <br/>".mysqli_error($kon));
    }

    $sqlTabelUser = "CREATE TABLE IF NOT EXISTS user (
                    id int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
                    nama varchar(25) NOT NULL,
                    email varchar(50) NOT NULL,
                    job varchar(50) NOT NULL,
                    foto varchar(1024) NOT NULL
                    )";
    mysqli_query($kon, $sqlTabelUser) or die ("Gagal Buat Tabel User <br/>".mysqli_error($kon));

    $sql = "SELECT * FROM user";
    $hasil = mysqli_query($kon, $sql);
    $jumlah = mysqli_num_rows($hasil);
    if ($jumlah == 0) {
        $sql = "INSERT INTO user (nama, email, job, foto)
        values ('Hassan Fasya Hidayat', 'hassanfhidayat@gmail.com', 'Administrator', 'foto/pp.jpg')";
        mysqli_query($kon, $sql);
    }
?>
