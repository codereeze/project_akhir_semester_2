<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Detail Berkas</h3>
            <h6 class="op-7 mb-2">Cek kebenaran berkas yang dikirimkan oleh calon seller</h6>
        </div>
    </div>
    <form method="post">
        <div class="card">
            <div class="card-body">
                <h3 class="fw-bold mb-3">Informasi User</h3>
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Nama pemilik</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['data']['nama_pemilik'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Nomor Induk Kependudukan</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['data']['nik'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Telepon</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['data']['telepon'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Nama jalan</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['data']['nama_jalan'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">RT/RW</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['data']['rt_rw'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Kelurahan</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['data']['kelurahan'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Kecamatan</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['data']['kecamatan'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Kabupaten/Kota</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['data']['kab_kot'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Provinsi</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['data']['provinsi'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Kode POS</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['data']['kode_pos'] ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 class="fw-bold mb-3">Informasi Toko</h3>
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Nama toko</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['data']['nama_toko'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Jam buka</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['data']['jam_buka'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Jam tutup</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['data']['jam_tutup'] ?>" readonly>
                    </div>
                    <div class="col-md-12">
                        <label for="" class="fw-bold mb-2">Deskripsi toko</label>
                        <textarea id="" class="form-control mb-4" readonly><?= $params['data']['deskripsi'] ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 class="fw-bold mb-3">Dokumen User</h3>
                <div class="row">
                    <div class="col-md-4">
                        <p class="mb-1">Foto diri</p>
                        <div class="mb-2">
                            <img id="preview-photo" src="https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636" alt="" srcset="" width="100" class="h-25">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="mb-1">Foto KTP</p>
                        <div class="mb-2">
                            <img id="preview-ktp" src="https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636" alt="" srcset="" width="100" class="h-25">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="mb-1">Foto toko atau produk</p>
                        <div class="mb-2">
                            <img id="preview-store" src="https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636" alt="" srcset="" width="100" class="h-25">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex gap-3 justify-content-end">
            <div class="dropdown">
                <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tolak pendaftaran
                </button>
                <ul class="dropdown-menu">
                    <li><button type="submit" class="dropdown-item">Tolak saja</button></li>
                    <li><button type="submit" class="dropdown-item">Tolak permanen</button></li>
                </ul>
            </div>
            <button class="btn btn-primary" type="submit">Terima pendaftaran</button>
        </div>
    </form>
</div>