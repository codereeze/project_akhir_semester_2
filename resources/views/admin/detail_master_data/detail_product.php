<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Detail Produk</h3>
            <h6 class="op-7 mb-2">Periksa detail produk yang tersedia dan tidak tersedia</h6>
        </div>
    </div>
    <div>
        <div class="card">
            <div class="card-body">
                <h3 class="fw-bold mb-3">Informasi Produk</h3>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Toko asal</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['dataProduct']['nama_toko'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Nama produk</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['dataProduct']['nama_produk'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Kategori produk</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['dataProduct']['nama_kategori'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Merk</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['dataProduct']['merk'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Ukuran tersedia</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['checkSize']('S,', $params['dataProduct']['size_s']) ?><?= $params['checkSize']('M,', $params['dataProduct']['size_m']) ?><?= $params['checkSize']('L,', $params['dataProduct']['size_l']) ?><?= $params['checkSize']('XL,', $params['dataProduct']['size_xl']) ?><?= $params['checkSize']('XXL', $params['dataProduct']['size_xxl']) ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Stock</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['dataProduct']['stock'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Harga</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['dataProduct']['harga'] ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Harga</label>
                        <input type="text" id="" class="form-control mb-4" value="<?= $params['dataProduct']['status_produk'] ?>" readonly>
                    </div>
                    <div class="col-md-12">
                        <label for="" class="fw-bold mb-2">Deskripsi produk</label>
                        <textarea class="form-control" rows="5" id="" readonly><?= $params['dataProduct']['deskripsi'] ?></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="card">
            <div class="card-body">
                <h3 class="fw-bold mb-3">Informasi Gambar Produk</h3>
                <div class="row">
                    <div class="col-md-4">
                        <h6>Gambar cover</h6>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-58296597/9_to_12_9_to_12_signature_overlap_semi_blazer_shirt_-_ballet_pink_full02_dl6mail5.jpeg?w=276" width="200" alt="" srcset="" class="rounded">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h6>Gambar carousel produk</h6>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-3">
                                <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-58296597/9_to_12_9_to_12_signature_overlap_semi_blazer_shirt_-_ballet_pink_full02_dl6mail5.jpeg?w=276" width="45" alt="" srcset="" class="rounded">
                                <span>Hahaha acumaalaka.jpg</span>
                            </div>
                            <button class="btn btn-sm btn-danger">-</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>