<section class="container mx-auto px-12 text-gray-600">
    <div class="pt-36">
        <div class="flex gap-3">
            <?php include_once 'partials/profile_nav.php' ?>
            <div class="self-start w-full border shadow-md rounded-md p-4">
                <h1 class="text-xl font-bold mb-1">Atur alamat</h1>
                <hr class="mb-3">
                <div class="mb-5">
                    <div class="flex gap-5 font-bold">
                        <p id="slide1" class="cursor-pointer text-red-primary border-b-2 border-red-primary pb-1 hover:text-red-primary">Edit alamat</p>
                    </div>
                </div>
                <div id="slide-display1" class="block">
                    <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="font-semibold">
                            <span class="font-bold">Penting!</span> Pasikan alamat di edit dengan benar. kesalahan pengiriman diluar tanggung jawab kami.
                        </div>
                    </div>
                    <form action="" method="post">
                        <div class="grid grid-cols-2 gap-3">
                            <div>
                                <p class="font-semibold mb-1">Nama penerima</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" name="nama_penerima" value="<?= $params['address']['nama_penerima'] ?>" required>
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Telepon</p>
                                <input type="number" class="p-2 rounded-md border w-full font-medium" name="telepon" value="<?= $params['address']['telepon'] ?>" required>
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Nama jalan</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" name="nama_jalan" value="<?= $params['address']['nama_jalan'] ?>" required>
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Rt/Rw</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" name="rt_rw" value="<?= $params['address']['rt_rw'] ?>" required>
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Desa/kelurahan</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" name="kelurahan" value="<?= $params['address']['kelurahan'] ?>" required>
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Kecamatan</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" name="kecamatan" value="<?= $params['address']['kecamatan'] ?>" required>
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Kabupaten/Kota</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" name="kab_kot" value="<?= $params['address']['kab_kot'] ?>" required>
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Provinsi</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" name="provinsi" value="<?= $params['address']['provinsi'] ?>" required>
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Kode pos</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" name="kode_pos" value="<?= $params['address']['kode_pos'] ?>" required>
                            </div>
                        </div>
                        <button type="submit" class="bg-red-primary hover:bg-red-500 rounded-md text-white text-sm p-2.5 font-bold mt-4"><i class="fas fa-save"></i> Edit alamat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="/js/atur_alamat.js"></script>