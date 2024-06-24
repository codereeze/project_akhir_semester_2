<section class="container mx-auto px-12 text-gray-600">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="pt-36">
            <?php if ($session->indicatorMessage('success')) : ?>
                <div id="alert-1" class="flex items-center p-4 mb-4 text-indigo-800 rounded-lg bg-indigo-100" role="alert">
                    <div class="text-sm font-semibold">
                        <?= $session->displaySuccessMessage(); ?>
                    </div>
                </div>
            <?php elseif ($session->indicatorMessage('error')) : ?>
                <div id="alert-1" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-100" role="alert">
                    <div class="text-sm font-semibold">
                        <?= $session->displayErrorMessage(); ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="flex gap-3">
                <?php include_once 'partials/profile_nav.php' ?>
                <div class="self-start w-full border shadow-md rounded-md p-4">
                    <h1 class="text-xl font-bold mb-1">Profile saya</h1>
                    <hr class="mb-3">
                    <p class="font-semibold mb-2">Foto profile</p>
                    <div class="flex gap-4 items-center mb-1">
                        <img src="<?= $dataUser['foto_profile'] ? $dataUser['foto_profile'] : '/img/unknown_profile.jpg' ?>" width="90" id="preview-profile" class="rounded-full">
                        <input type="file" name="foto_profile" accept=".png, .jpg, .jpeg" class="hidden" id="file-input">
                        <button type="button" id="trigger-input-file" class="bg-red-primary hover:bg-red-500 rounded-md text-white text-sm p-2 font-bold"><i class="fas fa-upload"></i> Upload
                            foto</button>
                        <button class="border border-red-primary text-red-primary hover:bg-red-primary hover:text-white duration-300 rounded-md text-sm p-2 font-bold">Hapus
                            foto</button>
                    </div>
                    <p class="text-sm mb-3">Ukuran foto maksimal sebesar 5MB dan harus berformat jpg, jpeg, atau png.
                    </p>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <p class="font-semibold mb-1">Nama lengkap</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="<?= $dataUser['nama'] ?>" name="nama">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Username</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="<?= $dataUser['username'] ?>" name="username">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Alamat email</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="<?= $dataUser['email'] ?>" name="email">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Jenis kelamin</p>
                            <select class="p-2 rounded-md border w-full font-medium cursor-pointer" name="jk">
                                <option value="<?= $dataUser['jk'] ?>" selected><?= $dataUser['jk'] ?></option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="bg-red-primary hover:bg-red-500 rounded-md text-white text-sm p-2.5 font-bold mt-4"><i class="fas fa-save"></i> Simpan perubahan</button>
                </div>
            </div>
        </div>
    </form>
</section>

<script src="/js/profile.js"></script>