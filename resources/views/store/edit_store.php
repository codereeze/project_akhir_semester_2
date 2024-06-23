<section class="container mx-auto pl-16 text-gray-600 mb-14">
    <div class="pt-36">
        <?php include_once 'partials/sidebar.php' ?>
        <div class="px-4 sm:ml-64">
            <h1 class="font-bold text-2xl">Edit Toko</h1>
            <span class="text-sm font-medium mb-7 block">Edit profile toko Anda dan buat agar pembeli tertarik mengunjungi toko Anda</span>
            <div class="border shadow-sm rounded-md p-4 mb-5">
                <p class="font-bold mb-2 text-lg">Profile toko</p>
                <div class="flex gap-4 items-center mb-1">
                    <img src="https://assets.skilvul.com/users/cltqq5evn03jr01s4f3gdwlfz-1711958320000.jpg" width="90" alt="" class="rounded-full">
                    <button class="bg-red-primary hover:bg-red-500 rounded-md text-white text-sm p-2 font-bold"><i class="fas fa-upload"></i> Upload
                        foto</button>
                    <button class="border border-red-primary text-red-primary hover:bg-red-primary hover:text-white duration-300 rounded-md text-sm p-2 font-bold">Hapus
                        foto</button>
                </div>
                <p class="text-sm mb-3">Ukuran foto maksimal sebesar 2MB dan harus berformat jpg, jpeg, atau png.
                </p>
                <form action="" method="post">
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <p class="font-semibold mb-1">Nama toko</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="<?= $params['store']['nama_toko'] ?>" name="nama_toko">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Jam buka</p>
                            <input type="time" class="p-2 rounded-md border w-full font-medium" value="<?= $params['store']['jam_buka'] ?>" name="jam_buka">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Jam tutup</p>
                            <input type="time" class="p-2 rounded-md border w-full font-medium" value="<?= $params['store']['jam_tutup'] ?>" name="jam_tutup">
                        </div>
                    </div>
                    <div class="mt-3">
                        <p class="font-semibold mb-1">Deskripsi toko</p>
                        <textarea class="p-2 rounded-md border w-full font-medium" name="deskripsi"><?= $params['store']['deskripsi'] ?></textarea>
                    </div>
                    <input type="hidden" name="data_1" value="init" id="">
                    <button type="submit" class="bg-red-primary hover:bg-red-500 rounded-md text-white text-sm p-2.5 font-bold mt-4">Simpan perubahan</button>
                </form>
            </div>
            <div class="border shadow-sm rounded-md p-4">
                <p class="font-bold text-lg">Alamat toko</p>
                <span class="mb-4 text-sm block">Pastikan alamat di atur dengan benar</span>
                <form action="" method="post">
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <p class="font-semibold mb-1">Jalan</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="<?= $params['store']['nama_jalan'] ?>" name="nama_jalan">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Rt/Rw</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="<?= $params['store']['rt_rw'] ?>" name="rt_rw">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Kelurahan/Desa</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="<?= $params['store']['kelurahan'] ?>" name="kelurahan">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Kecamatan</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="<?= $params['store']['kecamatan'] ?>" name="kecamatan">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Kabupaten</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="<?= $params['store']['kab_kot'] ?>" name="kab_kot">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Provinsi</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="<?= $params['store']['provinsi'] ?>" name="provinsi">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Kode Pos</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="<?= $params['store']['kode_pos'] ?>" name="kode_pos">
                        </div>
                    </div>
                    <input type="hidden" name="data_2" value="init" id="">
                    <button class="bg-red-primary hover:bg-red-500 rounded-md text-white text-sm p-2.5 font-bold mt-4">Simpan perubahan</button>
                </form>
            </div>
        </div>
    </div>
</section>