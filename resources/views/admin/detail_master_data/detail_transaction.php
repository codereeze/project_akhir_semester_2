<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Detail Berkas</h3>
            <h6 class="op-7 mb-2">Cek kebenaran berkas yang dikirimkan oleh calon seller</h6>
        </div>
    </div>
    <div>
        <div class="card">
            <div class="card-body">
                <div class="container-envelope w-full">
                    <div class="inner-envelope p-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3 class="text-lg fw-bold">Alamat pengiriman</h3>
                            <div class="text-sm fw-semibold">
                                <p>Pengiriman: <?= $params['transaction']['pengiriman'] ?></p>
                                <p>9123888237482</p>
                            </div>
                        </div>
                        <div class="row align-items-start text-sm fw-medium">
                            <div class="col-md-4">
                                <p class="mb-1">Penerima: <?= $params['transaction']['nama_penerima'] ?></p>
                                <p><?= $params['transaction']['telepon'] ?></p>
                                <p><?= $params['transaction']['nama_jalan'] ?>, <?= $params['transaction']['rt_rw'] ?>, <?= $params['transaction']['kelurahan'] ?>, <?= $params['transaction']['kecamatan'] ?>, <?= $params['transaction']['kab_kot'] ?>, <?= $params['transaction']['provinsi'] ?>, <?= $params['transaction']['kode_pos'] ?></p>
                            </div>
                            <div class="col-md-8">
                                <p class="mb-1 fw-bold">Catatan untuk kurir:</p>
                                <p><?= $params['transaction']['catatan_kurir'] ?></p>
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
                <h3 class="fw-bold mb-3">Informasi Pembelian</h3>
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Nama produk</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['transaction']['nama_produk'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">No.Resi</label>
                        <input type="text" id="" class="form-control mb-4" value="" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Toko penjual</label>
                        <input type="text" id="" class="form-control mb-4" value="" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Nama pembeli</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['transaction']['nama'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Size</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['transaction']['size'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Quantity</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['transaction']['qty'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Estimasi</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['transaction']['estimasi'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Pengiriman</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['transaction']['pengiriman'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Pembayaran</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['transaction']['pembayaran'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Status pembelian</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['transaction']['status_pengiriman'] ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>