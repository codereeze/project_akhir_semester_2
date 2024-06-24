<section class="container mx-auto pl-16 text-gray-600 mb-14">
    <div class="pt-36">
        <?php include_once 'partials/sidebar.php' ?>
        <div class="px-4 sm:ml-64">
            <h1 class="font-bold text-2xl">Dagangan Saya</h1>
            <span class="text-sm font-medium mb-7 block">Daftar dagangan yang dijual di toko Anda</span>
            <div class="flex flex-wrap gap-5">
                <?php foreach ($params['products'] as $item) : ?>
                    <div class="w-40">
                        <a href="/produk/<?= $item['id'] ?>">
                            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-58296597/9_to_12_9_to_12_signature_overlap_semi_blazer_shirt_-_ballet_pink_full02_dl6mail5.jpeg?w=276" alt="" srcset="" class="rounded-lg mb-2">
                            <p class="text-sm font-semibold"><?= $item['nama_produk'] ?></p>
                            <p class="text-lg font-bold text-red-primary">Rp<?= $item['harga'] ?></p>
                            <p class="text-xs font-medium">Kategori: <?= $params['categoryName']($item['kategori_id']) ?>
                            </p>
                            <p class="text-xs font-medium"><i class="fas fa-star text-yellow-500"></i> <?= $params['countRating']($item['id']) ?> | Terjual <?= $params['countTransaction']($item['id']) ?>
                            </p>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>