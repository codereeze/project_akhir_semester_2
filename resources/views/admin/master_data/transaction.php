<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Manajemen Transaksi</h3>
            <h6 class="op-7 mb-2">Konten ini menampilkan daftar transaksi</h6>
        </div>
    </div>
    <div>
        <div class="card">
            <div class="card-body">
                <div>
                    <table class="table" id="data-table">
                        <thead>
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Size</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($params['transactions'] as $item) : ?>
                                <tr>
                                    <td><?= $item['username'] ?></td>
                                    <td><?= $item['nama_produk'] ?></td>
                                    <td><?= $item['qty'] ?></td>
                                    <td><?= $item['size'] ?></td>
                                    <td><?= $item['pembayaran'] ?></td>
                                    <td><?= $item['total_harga'] ?></td>
                                    <td><?= $item['status'] ?></td>
                                    <td>
                                        <a href="/admin/detail-transaksi">
                                            <button class="btn btn-primary">Cek</button>
                                        </a>
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