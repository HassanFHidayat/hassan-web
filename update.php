<?php
    include "koneksi.php";

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $job = $_POST['jabatan'];
    
    $dir = "foto/";
    if (!empty($_FILES['foto']['tmp_name'])) {
        $ekstensi = $_FILES['foto']['type'];
        if ($ekstensi = "image/jpg" || $ekstensi == "image/jpeg" || $ekstensi == "image/png") {
            $file = $dir.basename($_FILES['foto']['name']);
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $file)) {
                $sqlUserUpdate = "UPDATE user SET nama='$nama', email='$email',
                                job='$job', foto='$file' WHERE id='$id'";
                $hasilUserUpdate = mysqli_query($kon, $sqlUserUpdate);

                if (!$hasilUserUpdate) {
                    echo "Gagal update, silahkan diulang!";
                    echo mysqli_error($kon)."<br/>";
                    echo "<br/><input type='button' value='Kembali' onClick='self.history.back()' class='btn' />";
                    exit;
                } else {
                    header("location:user.php");
                }
            }
        }
    } else {
        $sqlUserUpdate = "UPDATE user SET nama='$nama', email='$email',
                        job='$job' WHERE id='$id'";
        $hasilUserUpdate = mysqli_query($kon, $sqlUserUpdate);

        if (!$hasilUserUpdate) {
            echo "Gagal update, silahkan diulang!";
            echo mysqli_error($kon)."<br/>";
            echo "<br/><input type='button' value='Kembali' onClick='self.history.back()' class='btn' />";
            exit;
        } else {
           header("location:user.php");
        }
    }
?>
