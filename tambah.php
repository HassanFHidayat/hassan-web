<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Menambah Users</h1>
            <form method="post" action="user.php?link=simpan.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="masukkan nama Anda" name="nama">
                </div>
                <div class="form-group">
                    <label for="email">Alamat E-Mail</label>
                    <input type="text" class="form-control" id="email" placeholder="masukkan email Anda" name="email">
                </div>
                <div class="form-group">
                    <label for="Jabatan">Jabatan</label>
                    <select class="custom-select" name="jabatan" id="jabatan">
                        <option value="Administrator">Administrator</option>
                        <option value="Operator">Opertaor</option>
                        <option value="User-Client">User-Client</option>
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
                <button type="submit" class="btn btn-primary">Tambah User</button>
            </form>
        </div>
    </div>
</div>