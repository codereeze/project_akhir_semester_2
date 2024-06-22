<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Pendaftaran Seller</h3>
            <h6 class="op-7 mb-2">Konten ini menampilkan daftar pendaftaran calon seller</h6>
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
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($params['registrations'] as $item) : ?>
                                <tr>
                                    <td><?= $item['username'] ?></td>
                                    <td><?= $item['nama'] ?></td>
                                    <td><?= $item['email'] ?></td>
                                    <td>
                                        <a href="/admin/detail-register/<?= $item['primary_id'] ?>">
                                            <button class="btn btn-primary">Cek berkas</button>
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