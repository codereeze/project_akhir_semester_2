<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Master Data User</h3>
            <h6 class="op-7 mb-2">Konten ini menampilkan daftar user</h6>
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
                                <th scope="col">Nama pengguna</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($params['users'] as $item): ?>
                            <tr>
                                <th scope="row"><?= $item['username'] ?></th>
                                <td><?= $item['nama'] ?></td>
                                <td><?= $item['email'] ?></td>
                                <td><?= $item['jk'] ?></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="/admin/detail-user/<?= $item['id'] ?>">
                                            <button class="btn btn-primary"><i class="fas fa-info"></i></button>
                                        </a>
                                        <!-- <a href="">
                                            <button class="btn btn-danger"><i class="fas fa-ban"></i></button>
                                        </a> -->
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