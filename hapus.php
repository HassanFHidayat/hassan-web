<?php
    include "koneksi.php";

    $get_id_user = $_GET['id_user'];

    $sqlUser = "SELECT * FROM user WHERE id='$get_id_user'";
    $hasil = mysqli_query($kon, $sqlUser);
    $rowUser = mysqli_fetch_assoc($hasil);

    $sqlUserHapus = "DELETE FROM user WHERE id='$get_id_user'";
    $hasilUserHapus = mysqli_query($kon, $sqlUserHapus);

    if ($hasilUserHapus) {
        header("location:user.php");
    } else {
        echo "Gagal hapus, silahkan diulang!";
        echo "<br/><input type='button' value='Kembali' onClick='self.history.back()' class='btn' />";
        exit;
    }
?>