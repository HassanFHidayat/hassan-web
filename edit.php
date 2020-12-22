<?php
    include "koneksi.php";
    $get_id_user = $_GET['id_user'];
    $sql_data_user = "SELECT * FROM user WHERE id='$get_id_user'";
    $hasil = mysqli_query($kon, $sql_data_user);
    $row_data_user = mysqli_fetch_assoc($hasil);
?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Mengubah Users</h1>
            <form method="post" action="user.php?link=update.php" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $row_data_user['id']; ?>">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="masukkan nama Anda" name="nama" value="<?php echo $row_data_user['nama'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Alamat E-Mail</label>
                    <input type="text" class="form-control" id="email" placeholder="masukkan email Anda" name="email" value="<?php echo $row_data_user['email']; ?>">
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <select class="custom-select" name="jabatan" id="jabatan">
                        <option value="Administrator" <?php if($row_data_user['job'] == "Administrator"): ?> selected <?php endif; ?> >Administrator</option>
                        <option value="Operator" <?php if($row_data_user['job'] == "Opertaor"): ?> selected <?php endif; ?> >Opertaor</option>
<option value="User-Client" <?php if($row_data_user['job'] == "User-Client"): ?> selected <?php endif; ?> >User-Client</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Foto</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="foto">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <img src="<?php echo $row_data_user['foto'] ?>" style="width: 200px; height: 200px;" alt="foto">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>