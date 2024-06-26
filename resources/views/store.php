<section class="container mx-auto px-12 text-gray-600">
    <div class="pt-36">
        <div class="border rounded-md p-6 shadow-sm mb-7">
            <h1 class="text-2xl mb-4 font-bold">Informasi Toko</h1>
            <div class="flex items-center gap-20">
                <div class="rounded-md p-5 flex items-center gap-4 store-bg brightness-100 text-white self-center">
                    <img src="<?= $params['store']['foto_toko'] ?? '/img/unknown_profile.jpg' ?>" width="80" alt="" srcset="" class="rounded-full border-4 border-slate-400">
                    <div>
                        <h1 class="text-2xl font-extrabold mb-3 text-slate-200"><?= $params['store']['nama_toko'] ?></h1>
                        <div class="flex gap-5">
                            <form action="" method="post">
                                <input type="hidden" name="seller_id" value="<?= $params['store']['seller_id'] ?>">
                                <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
                                <input type="hidden" name="sender" value="User">
                                <input type="hidden" name="kode_chat" value="<?= uniqid() ?>" id="">
                                <button type="submit" name="form" value="chat" class="border border-white text-sm font-semibold p-2 duration-300 text-white">
                                    <i class="fas fa-comments"></i> Chat penjual
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="font-medium self-start">
                    <p class="mb-5">Produk: <span class="text-red-primary"><?= $params['countProduct'] ?></span></p>
                    <p class="mb-5">Pengikut: <span class="text-red-primary"><?= $params['countFollower'] ?></span></p>
                    <p>Tahun bergabung: <span class="text-red-primary"><?= $params['store']['tahun_bergabung'] ?></span></p>
                </div>
                <div class="font-medium self-start">
                    <p class="mb-5">Jam buka: <span class="text-red-primary"><?= $params['store']['jam_buka'] ?></span></p>
                    <p>Jam tutup: <span class="text-red-primary"><?= $params['store']['jam_tutup'] ?></span></p>
                </div>
            </div>
            <p class="mt-3 font-bold">Deskripsi toko:</p>
            <p class="mt-3 text-justify text-sm"><?= $params['store']['deskripsi'] ?></p>
        </div>
        <div class="border rounded-md p-5 shadow-sm">
            <h1 class="text-2xl mb-4 font-bold block">Semua produk</h1>
            <div class="grid grid-cols-6 gap-7">
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
        </div>
    </div>
</section>