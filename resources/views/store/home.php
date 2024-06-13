<section class="container mx-auto pl-16 text-gray-600 mb-14">
    <div class="pt-36">
        <?php include_once 'partials/sidebar.php' ?>
        <div class="px-4 sm:ml-64">
            <div class="p-4 bg-red-primary rounded-xl text-white">
                <h1 class="text-2xl font-bold">Selamat Datang di <?= $params['store']['nama_toko'] ?></h1>
                <p class="mb-3 font-medium text-sm"><?= $params['store']['copywriting'] ?></p>
                <div class="bg-white rounded-xl w-full text-gray-600 p-6">
                    <div class="flex justify-between text-center">
                        <div>
                            <p class="text-lg font-semibold mb-1">Tahun bergabung</p>
                            <hr>
                            <h1 class="text-2xl font-bold text-yellow-500"><?= $params['store']['tahun_bergabung'] ?></h1>
                        </div>
                        <div>
                            <p class="text-lg font-semibold mb-1">Total produk</p>
                            <hr>
                            <h1 class="text-2xl font-bold text-yellow-500">200</h1>
                        </div>
                        <div>
                            <p class="text-lg font-semibold mb-1">Jam operasional</p>
                            <hr>
                            <h1 class="text-2xl font-bold text-yellow-500"><?= $params['store']['jam_buka'] ?> - <?= $params['store']['jam_tutup'] ?></h1>
                        </div>
                        <div>
                            <p class="text-lg font-semibold mb-1">Ulasan toko</p>
                            <hr>
                            <h1 class="text-2xl font-bold text-yellow-500">200</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex flex-wrap gap-5">
                <?php foreach($params['products'] as $item): ?>
                <div class="w-40">
                    <a href="/produk">
                        <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-58296597/9_to_12_9_to_12_signature_overlap_semi_blazer_shirt_-_ballet_pink_full02_dl6mail5.jpeg?w=276" alt="" srcset="" class="rounded-lg mb-2">
                        <p class="text-sm font-semibold"><?= $item['nama_produk'] ?></p>
                        <p class="text-lg font-bold text-red-primary">Rp<?= $item['harga'] ?></p>
                        <p class="text-xs font-medium">Kategori: Anak-anak
                        </p>
                        <p class="text-xs font-medium"><i class="fas fa-star text-yellow-500"></i> 5.0 | Terjual 300
                        </p>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>