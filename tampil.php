<?php
    include "koneksi.php";
    $dataUser = mysqli_query($kon, "SELECT * FROM user ORDER BY id");
    if (!$dataUser) {
        die("Gagal mengambil data user".mysqli_error($kon));
    }
?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Tabel Rekaman Users</h1>
            <a href="user.php?link=tambah.php" class="btn btn-primary my-3">Tambah Data User</a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">e-mail</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row_data_user = mysqli_fetch_assoc($dataUser)) {
                            echo "<tr>";
                            echo "<td>".$row_data_user['id']."</td>";
                            echo "<td><img src='".$row_data_user['foto']."' style='width: 50px; height: 50px; border-radius: 50%;' alt='foto'></td>";
                            echo "<td>".$row_data_user['nama']."</td>";
                            echo "<td>".$row_data_user['email']."</td>";
                            echo "<td>".$row_data_user['job']."</td>";
                            echo "
                            <td>
                                <a href='user.php?link=edit.php&id_user=".$row_data_user['id']."' class='btn btn-primary'>Edit</a>
                                <a href='user.php?link=hapus.php&id_user=".$row_data_user['id']."' class='btn btn-danger'>Hapus</a>
                            </td>
                            ";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>