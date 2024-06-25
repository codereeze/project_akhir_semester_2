<section class="container mx-auto px-12 text-gray-600">
    <div class="pt-36">
        <h1 class="font-extrabold text-3xl mb-2"><i class="fas fa-shopping-cart"></i> Keranjang</h1>
        <hr class="mb-5">
        <?php if ($params['carts']) : ?>
            <?php foreach ($params['carts'] as $item) : ?>
                <div class="flex items-center max-w-full w-full mb-4">
                    <img src="<?= $item['cover'] ?? 'https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636' ?>" class="rounded-md" width="130" alt="">
                    <div class="text-xs ml-5 mr-16 self-center">
                        <h1 class="text-lg font-bold"><?= $item['nama_produk'] ?></h1>
                        <p>Ukuran : <?= $item['size'] ?></p>
                        <p>Jumlah : <?= $item['qty'] ?></p>
                        <h1 class="text-lg font-bold text-red-primary">Rp.<?= $item['harga'] ?></h1>
                        <p class="font-bold">By <?= $item['nama_toko'] ?></p>
                    </div>
                    <a href="/produk/<?= $item['produk_id'] ?>">
                        <button class="p-2 mr-2 rounded-md bg-red-primary hover:bg-red-500 text-white font-bold text-base text-end self-center">
                            Checkout
                        </button>
                    </a>
                    <form action="" method="post">
                        <input type="hidden" name="id_keranjang" value="<?= $item['cart_id'] ?>">
                        <button type="submit" class="p-2 rounded-md border text-red-primary border-red-primary duration-300 hover:bg-red-primary hover:text-white font-bold text-base"><i class="fas fa-trash"></i> Hapus</button>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="flex justify-center">
                <img src="https://img.freepik.com/free-vector/shopping-cart-with-boxes-concept-illustration_114360-22402.jpg?t=st=1718539036~exp=1718542636~hmac=6311c7f4ed1802f76b28ae505cd0312c9eb9a2c279bd4d555b14c305b9864005&w=740" alt="" srcset="" width="300" class="block">
            </div>
            <h1 class="text-black text-center text-lg font-semibold">Belum ada produk yang ditambahkan di dalam keranjang</h1>
        <?php endif; ?>
    </div>
</section>