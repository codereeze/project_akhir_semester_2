<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Buat Notifikasi</h3>
            <h6 class="op-7 mb-2">Anda hanya dapat mengirim notifikasi kepada user dan seller</h6>
        </div>
    </div>
    <div>
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <label for="" class="fw-bold mb-2">Judul notifikasi</label>
                            <input type="text" name="judul" class="form-control mb-4" required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="fw-bold mb-2">Nama penerima</label>
                            <select name="penerima_id" class="form-select mb-2" required>
                                <option selected>-- Pilih penerima --</option>
                                <?php foreach ($params['receivers'] as $item) : ?>
                                    <option value="<?= $item['id'] ?>"><?= $item['nama'] ?> - <?= $item['email'] ?> - <?= $item['role'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="" class="fw-bold mb-2">Pesan notifikasi</label>
                            <textarea name="pesan" class="form-control" id=""></textarea>
                        </div>
                    </div>
                    <button type="submit" name="postRequest" value="insert" class="btn btn-primary">Kirim notifikasi</button>
                </form>
            </div>
        </div>
    </div>
    <div>
        <div class="card">
            <div class="card-body">
                <h5 class="mb-3">Notifikasi yang pernah Anda buat sebelumnya</h5>
                <div>
                    <table class="table" id="data-table">
                        <thead>
                            <tr>
                                <th scope="col">Penerima</th>
                                <th scope="col">Role</th>
                                <th scope="col">Email</th>
                                <th scope="col">Judul Notifikasi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($params['notifications'] as $item) : ?>
                                <tr>
                                    <td><?= $item['nama'] ?></td>
                                    <td><?= $item['role'] ?></td>
                                    <td><?= $item['email'] ?></td>
                                    <td><?= $item['judul'] ?></td>
                                    <td>
                                        <form method="post">
                                            <input type="hidden" name="notif_id" value="<?= $item['primary_id'] ?>">
                                            <button type="submit" class="btn btn-danger" name="postRequest" value="delete"><i class="fas fa-trash"></i></button>
                                        </form>
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