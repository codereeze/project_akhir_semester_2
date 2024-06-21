<div class="page-inner">
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center gap-3 mb-4">
                <img src="https://avatars.githubusercontent.com/u/159593076?v=4" class="rounded-circle" style="width: 8rem;" alt="">
                <div>
                    <h2><?= $dataUser['nama'] ?></h2>
                    <div class="d-flex">
                        <button class="btn btn-primary"><i class="fas fa-upload"></i> Upload photo</button>
                        <button class="btn btn fw-bold">Hapus photo</button>
                    </div>
                </div>
            </div>
            <div>
                <div class="mb-4">
                    <h3>Biodata</h3>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Nama lengkap</label>
                                <input type="text" name="nama" id="" class="form-control mb-4" value="<?= $dataUser['nama'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Username</label>
                                <input type="text" name="username" id="" class="form-control mb-4" value="<?= $dataUser['username'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Email</label>
                                <input type="text" name="email" id="" class="form-control mb-4" value="<?= $dataUser['email'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Gender</label>
                                <select name="jk" class="form-select mb-4" id="">
                                    <option selected><?= $dataUser['jk'] ?></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
                <div class="mb-4">
                    <h3>Ganti Password</h3>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Password Saat Ini</label>
                                <input type="password" name="" id="" class="form-control mb-4">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Password Baru</label>
                                <input type="password" name="" id="" class="form-control mb-4">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Konfirmasi Password</label>
                                <input type="password" name="" id="" class="form-control mb-4">
                            </div>
                            </div>
                        <button type="submit" class="btn btn-primary">Ganti Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>