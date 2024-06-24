<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="mb-3">Dashboard</h3>
            <h6 class="op-7 mb-2"><?= $params['sayHelloAdmin']() ?></h6>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <a href="/admin/buat_notifikasi" class="btn btn-primary btn-round">Buat Notifikasi</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-primary bubble-shadow-small">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Users</p>
                                <h4 class="card-title"><?= $params['users'] ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-info bubble-shadow-small">
                                <i class="fas fa-store"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Sellers</p>
                                <h4 class="card-title"><?= $params['sellers'] ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-success bubble-shadow-small">
                                <i class="fas fa-user-cog"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Admins</p>
                                <h4 class="card-title"><?= $params['admins'] ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                <i class="fas fa-tag"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Category</p>
                                <h4 class="card-title"><?= $params['categories'] ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-round">
                <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                        <div class="card-title">Transaction History</div>
                        <div class="card-tools">
                            <div class="dropdown">
                                <button class="btn btn-icon btn-clean me-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center mb-0" id="data-table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Username</th>
                                    <th scope="col" class="text-end">Produk</th>
                                    <th scope="col" class="text-end">Qty</th>
                                    <th scope="col" class="text-end">Size</th>
                                    <th scope="col" class="text-end">Payment</th>
                                    <th scope="col" class="text-end">Total</th>
                                    <th scope="col" class="text-end">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($params['transactions'] as $item) : ?>
                                    <tr>
                                        <td scope="row">
                                            <?= $item['username'] ?>
                                        </td>
                                        <td class="text-end">
                                            <?= $item['nama_produk'] ?>
                                        </td>
                                        <td class="text-end">
                                            <?= $item['qty'] ?>
                                        </td>
                                        <td class="text-end">
                                            <?= $item['size'] ?>
                                        </td>
                                        <td class="text-end">
                                            <?= $item['pembayaran'] ?>
                                        </td>
                                        <td class="text-end">
                                            Rp.<?= $item['total_harga'] ?>
                                        </td>
                                        <td class="text-end">
                                            <span class="badge badge-success"> <?= $item['status_pengiriman'] ?>
                                            </span>
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
</div>