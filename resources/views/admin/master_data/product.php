<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Master Data Produk</h3>
            <h6 class="op-7 mb-2">Konten ini menampilkan daftar produk</h6>
        </div>
    </div>
    <div>
        <div class="card">
            <div class="card-body">
                <div>
                    <table class="table" id="data-table">
                        <thead>
                            <tr>
                                <th scope="col">Nama produk</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Asal toko</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($params['products'] as $item) : ?>
                                <tr>
                                    <td><?= $item['nama_produk'] ?></td>
                                    <td><?= $item['nama_kategori'] ?></td>
                                    <td><?= $item['stock'] ?></td>
                                    <td>Rp.<?= $item['harga'] ?></td>
                                    <td><?= $item['nama_toko'] ?></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="">
                                                <button class="btn btn-primary"><i class="fas fa-info"></i></button>
                                            </a>
                                            <a href="">
                                                <button class="btn btn-danger"><i class="fas fa-ban"></i></button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>