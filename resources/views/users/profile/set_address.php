<section class="container mx-auto px-12 text-gray-600">
    <div class="pt-36">
        <div class="flex gap-3">
            <?php include_once 'partials/profile_nav.php' ?>
            <div class="self-start w-full border shadow-md rounded-md p-4">
                <h1 class="text-xl font-bold mb-1">Atur alamat</h1>
                <hr class="mb-3">
                <div class="mb-5">
                    <?php if(count($params['addresses']) > 0): ?>
                    <div class="flex gap-5 font-bold">
                        <p id="slide1" class="cursor-pointer text-red-primary border-b-2 border-red-primary pb-1 hover:text-red-primary">Alamat saya</p>
                        <p id="slide2" class="cursor-pointer hover:text-red-primary">Tambah alamat</p>
                    </div>
                    <?php endif; ?>
                </div>
                <div id="slide-display1" class="<?= count($params['addresses']) < 0 ? 'hidden' : 'block' ?>">
                    <?php foreach ($params['addresses'] as $key => $item) : ?>
                        <div class="flex justify-between items-center border p-3 rounded-md mb-3">
                            <div>
                                <h4 class="text-lg font-bold">Nama penerima: <?= $item['nama_penerima'] ?></h4>
                                <p class="text-xs">Telepon: <?= $item['telepon'] ?></p>
                                <p class="text-xs"><?= $item['nama_jalan'] ?>, <?= $item['rt_rw'] ?>, <?= $item['kelurahan'] ?>, <?= $item['kecamatan'] ?>, <?= $item['kab_kot'] ?>, <?= $item['provinsi'] ?> <?= $item['kode_pos'] ?></p>
                            </div>
                            <?php if ($item['status'] == 'Utama') : ?>
                                <div class="py-1 px-3 rounded-lg text-sm font-semibold text-white bg-red-primary">
                                    Alamat utama
                                </div>
                            <?php else : ?>
                                <div class="flex gap-2">
                                    <form action="" method="post">
                                        <input type="hidden" name="delete_address_id" value="<?= $item['id'] ?>">
                                        <button type="submit" class="py-1 px-3 rounded-lg text-sm font-semibold text-white bg-red-primary hover:bg-red-500 border border-red-primary">
                                            Hapus
                                        </button>
                                    </form>
                                    <form action="" method="post">
                                        <input type="hidden" name="address_id" value="<?= $item['id'] ?>">
                                        <button type="submit" class="py-1 px-3 rounded-lg text-sm font-semibold text-red-primary border border-red-primary">
                                            Jadikan utama
                                        </button>
                                    </form>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div id="slide-display2" class="<?= count($params['addresses']) > 0 ? 'hidden' : 'block' ?>">
                    <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="font-semibold">
                            <span class="font-bold">Penting!</span> Pasikan alamat terlampir dengan benar. kesalahan pengiriman diluar tanggung jawab kami.
                        </div>
                    </div>
                    <form action="" method="post">
                        <div class="grid grid-cols-2 gap-3">
                            <div>
                                <p class="font-semibold mb-1">Nama penerima</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" value="" name="nama_penerima" required>
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Telepon</p>
                                <input type="number" class="p-2 rounded-md border w-full font-medium" value="" name="telepon" required>
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Nama jalan</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" value="" name="nama_jalan" required>
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Rt/Rw</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" value="" name="rt_rw" required>
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Desa/kelurahan</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" value="" name="kelurahan" required>
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Kecamatan</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" value="" name="kecamatan" required>
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Kabupaten/Kota</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" value="" name="kab_kot" required>
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Provinsi</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" value="" name="provinsi" required>
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Kode pos</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" value="" name="kode_pos" required>
                            </div>
                            <?php if(count($params['addresses']) == 0): ?>
                                <input type="hidden" name="status" value="Utama" required>
                            <?php endif; ?>
                        </div>
                        <button type="submit" class="bg-red-primary hover:bg-red-500 rounded-md text-white text-sm p-2.5 font-bold mt-4"><i class="fas fa-save"></i> Tambah alamat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="/js/atur_alamat.js"></script>