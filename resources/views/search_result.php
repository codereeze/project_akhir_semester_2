<section class="container mx-auto px-12 text-gray-600">
    <div class="pt-36">
        <h1 class="text-lh font-bold mb-6">Hasil pencarian: <?= $params['query'] ?></h1>
        <?php if ($params['products']) : ?>
            <div class="grid grid-cols-7 gap-3">
                <?php foreach ($params['products'] as $item) : ?>
                    <div class="w-40">
                        <a href="/produk/<?= $item['id'] ?>">
                            <img src="<?= $item['cover'] ?? 'https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636' ?>" alt="" srcset="" class="rounded-lg mb-2">
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
        <?php else : ?>
            <div class="flex justify-center">
                <img src="https://img.freepik.com/free-vector/alone-concept-illustration_114360-2393.jpg?t=st=1719286782~exp=1719290382~hmac=042a32bef22cd657a15a387dde3026df755b0f782287c13c50ead0fe2c6d2ebf&w=900" alt="" srcset="" width="300" class="block">
            </div>
            <h1 class="text-black text-center text-lg font-semibold">Tidak dapat menemukan pencarian "<?= $params['query'] ?>"</h1>
        <?php endif; ?>
    </div>
</section>