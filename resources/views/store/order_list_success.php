<section class="container mx-auto pl-16 text-gray-600 mb-14">
    <div class="pt-36">
        <?php include_once 'partials/sidebar.php' ?>
        <div class="px-4 sm:ml-64">
            <h1 class="font-bold text-2xl">Daftar Pesanan Sukses</h1>
            <span class="text-sm font-medium mb-7 block">Pesanan yang sudah di ulas tidak dapat di ubah status pengrimannya</span>
            <div class="shadow-md p-4">
                <?php foreach ($params['transactions'] as $item) : ?>
                    <div class="flex justify-between items-center mb-5">
                        <div class="flex gap-3">
                            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-58296597/9_to_12_9_to_12_signature_overlap_semi_blazer_shirt_-_ballet_pink_full02_dl6mail5.jpeg?w=276" alt="" srcset="" width="100" class="rounded-lg">
                            <div class="max-w-lg">
                                <a href="/cetak-resi/<?= $item['id'] ?>">
                                    <h2 class="text-lg font-bold leading-6 mb-2 max-w-md"><?= $params['product_name']($item['produk_id']) ?></h2>
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
                        <?php else: ?>
                            <p class="text-red-primary font-semibold"><?= $item['status_pengiriman'] ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>