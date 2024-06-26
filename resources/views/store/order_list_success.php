<section class="container mx-auto pl-16 text-gray-600 mb-14">
    <div class="pt-36">
        <?php include_once 'partials/sidebar.php' ?>
        <div class="px-4 sm:ml-64">
            <h1 class="font-bold text-2xl">Daftar Pesanan Sukses</h1>
            <span class="text-sm font-medium mb-7 block">Pesanan yang sudah di ulas tidak dapat di ubah status pengrimannya</span>
            <div class="shadow-md p-4">
                <?php if ($params['transactions']) : ?>
                    <?php foreach ($params['transactions'] as $item) : ?>
                        <div class="flex justify-between items-center mb-5">
                            <div class="flex gap-3">
                                <img src="<?= $params['product']($item['produk_id'])['cover'] ?? 'https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636' ?>" alt="" srcset="" width="100" class="rounded-lg">
                                <div class="max-w-lg">
                                    <a href="/cetak-resi/<?= $item['id'] ?>">
                                        <h2 class="text-lg font-bold leading-6 mb-2 max-w-md"><?= $params['product']($item['produk_id'])['nama_produk'] ?></h2>
                                    </a>
                                    <div class="text-xs font-medium">
                                        <p>Ukuran: <?= $item['size'] ?></p>
                                        <p>Qty: <?= $item['qty'] ?></p>
                                        <p>Harga total: Rp<?= $item['total_harga'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php if ($item['status_pengiriman'] !== 'Sudah diulas') : ?>
                                <form class="flex gap-2" method="post">
                                    <input type="hidden" name="trans_id" value="<?= $item['id'] ?>">
                                    <select name="status_pengiriman" class="bg-gray-50 self-center border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        <option value="<?= $item['status_pengiriman'] ?>" selected><?= $item['status_pengiriman'] ?></option>
                                        <option value="Dalam antrian">Dalam antrian</option>
                                        <option value="Dikirim">Dikirim</option>
                                        <option value="Selesai">Selesai</option>
                                    </select>
                                    <button type="submit" class="border-red-primary border p-2 rounded-md font-semibold text-sm text-red-primary hover:bg-red-500 duration-300 hover:text-white self-center w-full"></i> Ubah status</button>
                                </form>
                            <?php else : ?>
                                <p class="text-red-primary font-semibold"><?= $item['status_pengiriman'] ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="flex justify-center">
                        <img src="https://img.freepik.com/free-vector/waiting-concept-illustration_114360-5941.jpg?t=st=1719323331~exp=1719326931~hmac=f11dfd2501a7d28c57157555d7e7e9804c7755e5455661f7fb675e700f17d0b6&w=740" alt="" class="block" srcset="" width="200">
                    </div>
                    <h2 class="text-xl font-bold block text-center">Belum ada pesanan yang selesai</h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>