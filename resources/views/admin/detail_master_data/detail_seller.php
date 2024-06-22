<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Detail Seller</h3>
            <h6 class="op-7 mb-2">Cek detail seller yang terdaftar</h6>
        </div>
    </div>
    <div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <img src="https://avatars.githubusercontent.com/u/159593076?v=4" class="rounded-circle" style="width: 8rem;" alt="" id="preview-profile">
                    <input type="file" name="foto_profile" accept=".png, .jpg, .jpeg" class="d-none" id="file-input">
                    <div>
                        <h2><?= $params['dataSeller']['nama'] ?></h2>
                    </div>
                </div>
                <div>
                    <div class="mb-4">
                        <h3>Biodata</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Nama lengkap</label>
                                <input type="text" name="nama" id="" class="form-control mb-4" value="<?= $params['dataSeller']['nama'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Username</label>
                                <input type="text" name="username" id="" class="form-control mb-4" value="<?= $params['dataSeller']['username'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Email</label>
                                <input type="text" name="email" id="" class="form-control mb-4" value="<?= $params['dataSeller']['email'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Gender</label>
                                <input type="text" name="jk" id="" class="form-control mb-4" value="<?= $params['dataSeller']['jk'] ?>" readonly>
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
                <div class="d-flex align-items-center gap-3 mb-4">
                    <img src="https://avatars.githubusercontent.com/u/159593076?v=4" class="rounded-circle" style="width: 8rem;" alt="" id="preview-profile">
                    <input type="file" name="foto_profile" accept=".png, .jpg, .jpeg" class="d-none" id="file-input">
                    <div>
                        <h2><?= $params['dataStore']['nama_toko'] ?></h2>
                    </div>
                </div>
                <div>
                    <div class="mb-4">
                        <h3>Data Toko</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Nama toko</label>
                                <input type="text" id="" class="form-control mb-4" value="<?= $params['dataStore']['nama_toko'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Jam buka</label>
                                <input type="text" id="" class="form-control mb-4" value="<?= $params['dataStore']['jam_buka'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Jam tutup</label>
                                <input type="text" id="" class="form-control mb-4" value="<?= $params['dataStore']['jam_tutup'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Tahun bergabung</label>
                                <input type="text" id="" class="form-control mb-4" value="<?= $params['dataStore']['tahun_bergabung'] ?>" readonly>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="fw-bold mb-2">Deskripsi toko</label>
                                <textarea class="form-control mb-4" rows="10" id="" readonly><?= $params['dataStore']['deskripsi'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Nama jalan</label>
                                <input type="text" id="" class="form-control mb-4" value="<?= $params['dataStore']['nama_jalan'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">RT/RW</label>
                                <input type="text" id="" class="form-control mb-4" value="<?= $params['dataStore']['rt_rw'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Kelurahan</label>
                                <input type="text" id="" class="form-control mb-4" value="<?= $params['dataStore']['kelurahan'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Kecamatan</label>
                                <input type="text" id="" class="form-control mb-4" value="<?= $params['dataStore']['kecamatan'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Kabupaten/Kota</label>
                                <input type="text" id="" class="form-control mb-4" value="<?= $params['dataStore']['kab_kot'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Provinsi</label>
                                <input type="text" id="" class="form-control mb-4" value="<?= $params['dataStore']['provinsi'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold mb-2">Kode POS</label>
                                <input type="text" id="" class="form-control mb-4" value="<?= $params['dataStore']['kode_pos'] ?>" readonly>
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