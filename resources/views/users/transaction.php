<section class="container mx-auto px-12 text-gray-600">
    <div class="pt-36">
        <h1 class="font-extrabold text-3xl mb-2"><i class="fas fa-shopping-bag"></i> Transaksi</h1>
        <hr class="mb-3">
        <div class="flex gap-6 mb-5">
            <p id="queue" class="text-red-primary hover:text-red-primary font-bold p-1 border-b-2 border-red-primary cursor-pointer">Dalam antrian</p>
            <p id="send" class="font-semibold p-1 hover:text-red-primary cursor-pointer">Dikirim</p>
            <p id="finish" class="font-semibold p-1 hover:text-red-primary cursor-pointer">Selesai</p>
            <p id="comment" class="font-semibold p-1 hover:text-red-primary cursor-pointer">Sudah diulas</p>
        </div>
        <div id="slide-display1" class="block">
            <?php if ($params['antrian']) : ?>
                <?php foreach ($params['antrian'] as $item) : ?>
                    <a href="" class="inline-block">
                        <div class="flex items-center max-w-full w-full mb-4">
                            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-58296597/9_to_12_9_to_12_signature_overlap_semi_blazer_shirt_-_ballet_pink_full02_dl6mail5.jpeg?w=276" class="rounded-md" width="130" alt="">
                            <div class="text-xs ml-5 mr-16 self-center">
                                <h1 class="text-lg font-bold"><?= $item['nama_produk'] ?></h1>
                                <p>Ukuran : <?= $item['size'] ?></p>
                                <p>Jumlah : <?= $item['qty'] ?></p>
                                <p class="font-semibold">Pengiriman <?= $item['pengiriman'] ?> - Estimasi tiba <?= $item['estimasi'] ?></p>
                                <h1 class="text-lg font-bold text-red-primary">Rp.300.000</h1>
                                <p class="font-bold">By <?= $item['nama_toko'] ?></p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="flex justify-center">
                    <img src="https://img.freepik.com/free-vector/ecommerce-web-page-concept-illustration_114360-8204.jpg?t=st=1718598345~exp=1718601945~hmac=c43c1f2d9c8c3f1dd252459a0d9d12ccc479a0a4d0c007e33521db51a41f363e&w=826" alt="" srcset="" width="300" class="block">
                </div>
                <h1 class="text-black text-center text-lg font-semibold">Belum ada produk yang masuk ke antrian</h1>
            <?php endif; ?>
        </div>
        <div id="slide-display2" class="hidden">
            <?php if ($params['dikirim']) : ?>
                <?php foreach ($params['dikirim'] as $item) : ?>
                    <a href="" class="inline-block">
                        <div class="flex items-center max-w-full w-full mb-4">
                            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-58296597/9_to_12_9_to_12_signature_overlap_semi_blazer_shirt_-_ballet_pink_full02_dl6mail5.jpeg?w=276" class="rounded-md" width="130" alt="">
                            <div class="text-xs ml-5 mr-16 self-center">
                                <h1 class="text-lg font-bold"><?= $item['nama_produk'] ?></h1>
                                <p>Ukuran : <?= $item['size'] ?></p>
                                <p>Jumlah : <?= $item['qty'] ?></p>
                                <p class="font-semibold">Pengiriman <?= $item['pengiriman'] ?> - Estimasi tiba <?= $item['estimasi'] ?></p>
                                <h1 class="text-lg font-bold text-red-primary">Rp.300.000</h1>
                                <p class="font-bold">By <?= $item['nama_toko'] ?></p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="flex justify-center">
                    <img src="https://img.freepik.com/free-vector/ecommerce-web-page-concept-illustration_114360-8204.jpg?t=st=1718598345~exp=1718601945~hmac=c43c1f2d9c8c3f1dd252459a0d9d12ccc479a0a4d0c007e33521db51a41f363e&w=826" alt="" srcset="" width="300" class="block">
                </div>
                <h1 class="text-black text-center text-lg font-semibold">Belum ada produk yang dikirim penjual</h1>
            <?php endif; ?>
        </div>
        <div id="slide-display3" class="hidden">
            <?php if ($params['selesai']) : ?>
                <?php foreach ($params['selesai'] as $item) : ?>
                    <a href="" class="inline-block">
                        <div class="flex items-center max-w-full w-full mb-4">
                            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-58296597/9_to_12_9_to_12_signature_overlap_semi_blazer_shirt_-_ballet_pink_full02_dl6mail5.jpeg?w=276" class="rounded-md" width="130" alt="">
                            <div class="text-xs ml-5 mr-16 self-center">
                                <h1 class="text-lg font-bold"><?= $item['nama_produk'] ?></h1>
                                <p>Ukuran : <?= $item['size'] ?></p>
                                <p>Jumlah : <?= $item['qty'] ?></p>
                                <p class="font-semibold">Pengiriman <?= $item['pengiriman'] ?> - Estimasi tiba <?= $item['estimasi'] ?></p>
                                <h1 class="text-lg font-bold text-red-primary">Rp.300.000</h1>
                                <p class="font-bold">By <?= $item['nama_toko'] ?></p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="flex justify-center">
                    <img src="https://img.freepik.com/free-vector/ecommerce-web-page-concept-illustration_114360-8204.jpg?t=st=1718598345~exp=1718601945~hmac=c43c1f2d9c8c3f1dd252459a0d9d12ccc479a0a4d0c007e33521db51a41f363e&w=826" alt="" srcset="" width="300" class="block">
                </div>
                <h1 class="text-black text-center text-lg font-semibold">Belum ada produk yang selesai diproses</h1>
            <?php endif; ?>
        </div>
        <div id="slide-display4" class="hidden">
            <?php if ($params['diulas']) : ?>
                <?php foreach ($params['diulas'] as $item) : ?>
                    <a href="" class="inline-block">
                        <div class="flex items-center max-w-full w-full mb-4">
                            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-58296597/9_to_12_9_to_12_signature_overlap_semi_blazer_shirt_-_ballet_pink_full02_dl6mail5.jpeg?w=276" class="rounded-md" width="130" alt="">
                            <div class="text-xs ml-5 mr-16 self-center">
                                <h1 class="text-lg font-bold"><?= $item['nama_produk'] ?></h1>
                                <p>Ukuran : <?= $item['size'] ?></p>
                                <p>Jumlah : <?= $item['qty'] ?></p>
                                <p class="font-semibold">Pengiriman <?= $item['pengiriman'] ?> - Estimasi tiba <?= $item['estimasi'] ?></p>
                                <h1 class="text-lg font-bold text-red-primary">Rp.300.000</h1>
                                <p class="font-bold">By <?= $item['nama_toko'] ?></p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="flex justify-center">
                    <img src="https://img.freepik.com/free-vector/status-update-concept-illustration_114360-1567.jpg?w=826&t=st=1718601041~exp=1718601641~hmac=6f6bb3f9c3ee3f3bd06712581820c04a984cbf09f413d2d646fbc93cddcac274" alt="" srcset="" width="300" class="block">
                </div>
                <h1 class="text-black text-center text-lg font-semibold">Belum ada produk yang kamu ulas</h1>
            <?php endif; ?>
        </div>
    </div>
</section>

<script src="/js/transaksi.js"></script>