<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Kirim email</h3>
            <h6 class="op-7 mb-2">Anda hanya dapat mengirim email kepada user dan seller</h6>
        </div>
    </div>
    <form action="" method="post">
        <div class="row mb-5">
            <div class="col-md-6">
                <label for="" class="fw-bold mb-2">Judul email</label>
                <input type="text" name="judul" class="form-control mb-4" required>
            </div>
            <div class="col-md-6">
                <label for="" class="fw-bold mb-2">Email penerima</label>
                <select name="user_id" class="form-select mb-2" required>
                    <option selected>-- Pilih penerima --</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="" class="fw-bold mb-2">Pesan email</label>
                <textarea name="pesan" class="form-control" id=""></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Kirim email</button>
    </form>
</div>