<?php
    include "koneksi.php";

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $job = $_POST['jabatan'];

    $dataValid = "YA";
    if (strlen(trim($nama)) == 0) {
        echo "Nama Harus Diisi!";
        $dataValid = "TIDAK";
    } if (strlen(trim($email)) == 0) {
        echo "E-Mail Harus Diisi!";
        $dataValid = "TIDAK";
    } if (strlen(trim($job)) == 0) {
        echo "Jabatan Harus Diisi!";
        $dataValid = "TIDAK";
    } if ($dataValid == "TIDAK") {
        echo "Masih ada kesalahan, silahkan diperbaiki!<br/>";
        echo "<input type='button' value='Kembali' onClick='self.history.back()' class='btn' />";
        exit;
    }

    $dir = "foto/";
    if (!empty($_FILES['foto']['tmp_name'])) {
        $ekstensi = $_FILES['foto']['type'];
        if ($ekstensi = "image/jpg" || $ekstensi == "image/jpeg" || $ekstensi == "image/png") {
            $file = $dir.basename($_FILES['foto']['name']);
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $file)) {
                $sqlUser = "INSERT INTO user (nama, email, job, foto) VALUES ('$nama', '$email',
                                '$job', '$file')";
                $hasilUser = mysqli_query($kon, $sqlUser);

                if (!$hasilUser) {
                    echo "Gagal simpan, silahkan diulang!";
                    echo mysqli_error($kon)."<br/>";
                    echo "<br/><input type='button' value='Kembali' onClick='self.history.back()' class='btn' />";
                    exit;
                } else {
                    header("location:user.php");
                }
            }
        }
    }
?>