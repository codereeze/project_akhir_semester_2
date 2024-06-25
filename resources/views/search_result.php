<section class="container mx-auto px-12 text-gray-600">
    <div class="pt-36">
        <h1 class="text-lh font-bold mb-6">Hasil pencarian: <?= $params['query'] ?></h1>
        <?php if ($params['products']) : ?>
            <div class="grid grid-cols-7 gap-3">
                <?php foreach ($params['products'] as $item) : ?>
                    <div class="w-40">
                        <a href="/produk/<?= $item['id'] ?>">
                            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-58296597/9_to_12_9_to_12_signature_overlap_semi_blazer_shirt_-_ballet_pink_full02_dl6mail5.jpeg?w=276" alt="" srcset="" class="rounded-lg mb-2">
                            <p class="text-sm font-semibold"><?= $item['nama_produk'] ?></p>
                            <p class="text-lg font-bold text-red-primary">Rp<?= $item['harga'] ?></p>
                            <p class="text-xs font-medium">Kategori: <?= $item['nama_kategori'] ?>
                            </p>
                            <p class="text-xs font-medium"><i class="fas fa-star text-yellow-500"></i> <?= $params['countRating']($item['id']) ?> | Terjual <?= $params['countTransaction']($item['id']) ?>
                            </p>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <div class="flex justify-center">
                <img src="https://img.freepik.com/free-vector/alone-concept-illustration_114360-2393.jpg?t=st=1719286782~exp=1719290382~hmac=042a32bef22cd657a15a387dde3026df755b0f782287c13c50ead0fe2c6d2ebf&w=900" alt="" srcset="" width="300" class="block">
            </div>
            <h1 class="text-black text-center text-lg font-semibold">Tidak dapat menemukan pencarian "<?= $params['query'] ?>"</h1>
        <?php endif; ?>
    </div>
</section>