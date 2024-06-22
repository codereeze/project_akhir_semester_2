<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Detail User</h3>
            <h6 class="op-7 mb-2">Cek detail pengguna yang terdaftar</h6>
        </div>
    </div>
    <div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <img src="https://avatars.githubusercontent.com/u/159593076?v=4" class="rounded-circle" style="width: 8rem;" alt="" id="preview-profile">
                    <input type="file" name="foto_profile" accept=".png, .jpg, .jpeg" class="d-none" id="file-input">
                    <div>
                        <h2><?= $params['dataUser']['nama'] ?></h2>
                    </div>
                </div>
                <div>
                    <div class="mb-4">
                        <h3>Biodata</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Nama lengkap</label>
                                <input type="text" name="nama" id="" class="form-control mb-4" value="<?= $params['dataUser']['nama'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Username</label>
                                <input type="text" name="username" id="" class="form-control mb-4" value="<?= $params['dataUser']['username'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Email</label>
                                <input type="text" name="email" id="" class="form-control mb-4" value="<?= $params['dataUser']['email'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Gender</label>
                                <input type="text" name="jk" id="" class="form-control mb-4" value="<?= $params['dataUser']['jk'] ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="card">
            <div class="card-body">
                <div class="mb-4">
                    <h3>Alamat pengiriman</h3>
                    <?php foreach ($params['addresses'] as $item) : ?>
                        <div class="rounded-md p-1">
                            <p class="d-inline-flex">
                            <h6 type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="px-4 fw-bold border p-3 rounded">
                                Nama Penerima: <?= $item['nama_penerima'] ?>
                                <div class="badge bg-<?= $item['status'] == 'Utama' ? 'primary' : 'danger' ?>"><?= $item['status'] ?></div>
                            </h6>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    Alamat: <?= $item['nama_jalan'] ?>, <?= $item['rt_rw'] ?>, <?= $item['kelurahan'] ?>, <?= $item['kecamatan'] ?>, <?= $item['kab_kot'] ?>, <?= $item['provinsi'] ?>, <?= $item['kode_pos'] ?> <br>
                                    No. telepon: <?= $item['telepon'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>