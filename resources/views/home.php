<section class="container mx-auto">
    <div class="pt-20">
        <div class="flex justify-center py-7 mb-1">
            <div class="w-full bg-gray-secondary py-2">
                <div class="swiper" style="width: 1200px;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/assets/carousel-1.jpg" alt="" srcset="" class="w-full rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="/assets/carousel-2.jpg" alt="" srcset="" class="w-full rounded-lg">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>
        <div class="px-8">
            <h1 class="text-2xl mb-4 font-bold">Rekomendasi untuk mu</h1>
            <div class="grid grid-cols-7 gap-3">
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