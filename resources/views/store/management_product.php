<section class="container mx-auto pl-16 text-gray-600 mb-14">
    <div class="pt-36">
        <?php include_once 'partials/sidebar.php' ?>
        <div class="px-4 sm:ml-64">
            <h1 class="font-bold text-2xl">Daftar Produk Toko</h1>
            <span class="text-sm font-medium">Manajemen produk yang tersedia di toko Anda</span>
            <div class="flex justify-end mb-7">
                <a href="/tambah_produk">
                    <button class="bg-red-primary p-2 rounded-md font-semibold text-sm text-white hover:bg-red-500 duration-300"><i class="fas fa-plus"></i> Tambah Produk</button>
                </a>
            </div>
            <div class="shadow-md p-4">
                <?php if (count($params['products']) < 1) : ?>
                    <div class="flex justify-center">
                        <img src="https://img.freepik.com/free-vector/shrug-concept-illustration_114360-8843.jpg?t=st=1716968704~exp=1716972304~hmac=773aa72deafa8b0587a4b35a6ca9338196cae4d7b920bffded7fbca8025a99f1&w=740" alt="" class="block" srcset="" width="200">
                    </div>
                    <h2 class="text-xl font-bold block text-center">Belum ada produk yang ditambahkan di toko</h2>
                <?php endif; ?>
                <?php foreach ($params['products'] as $item) : ?>
                    <div class="flex justify-between items-center mb-5">
                        <div class="flex gap-3">
                            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-58296597/9_to_12_9_to_12_signature_overlap_semi_blazer_shirt_-_ballet_pink_full02_dl6mail5.jpeg?w=276" alt="" srcset="" width="100" class="rounded-lg">
                            <div class="max-w-lg">
                                <h2 class="text-lg font-bold leading-6 mb-2"><?= $item['nama_produk'] ?></h2>
                                <div class="text-xs font-medium">
                                    <p>Ukuran tersedia:
                                        <?= $item['size_s'] == "No" ? '' : "S," ?>
                                        <?= $item['size_m'] == "No" ? '' : "M," ?>
                                        <?= $item['size_l'] == "No" ? '' : "L," ?>
                                        <?= $item['size_xl'] == "No" ? '' : "XL," ?>
                                        <?= $item['size_xxl'] == "No" ? '' : "XXL," ?></p>
                                    <p>Stock: <?= $item['stock'] ?></p>
                                    <p>Harga: Rp<?= $item['harga'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <form action="" method="post" class="inline">
                                <input type="hidden" value="<?= $item['id'] ?>" name="product_id">
                                <button type="submit" class="bg-red-primary p-2 rounded-md font-semibold text-sm text-white hover:bg-red-500 duration-300 mr-1"><i class="fas fa-trash"></i> Hapus</button>
                            </form>
                            <a href="">
                                <button class="border-red-primary border p-2 rounded-md font-semibold text-sm text-red-primary hover:bg-red-500 duration-300 hover:text-white"><i class="fas fa-pen"></i> Edit produk</button>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>