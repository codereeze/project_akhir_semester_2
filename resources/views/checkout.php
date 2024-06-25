<section class="container mx-auto px-12 text-gray-600">
    <div class="pt-36">
        <form method="post">
            <div class="flex flex-wrap justify-between">
                <div class="self-start max-w-2xl w-full">
                    <div class="w-full rounded-xl border p-4 mb-5">
                        <h2 class="text-xl font-bold mb-1.5">Alamat pengiriman <i class="fas fa-map-marker-alt text-red-primary"></i></h2>
                        <hr class="mb-4">
                        <div class="flex justify-between items-center">
                            <p class="font-semibold text-base">Penerima : <?= $params['address']['nama_penerima'] ?> | <?= $params['address']['telepon'] ?></p>
                            <div class="bg-red-primary text-white p-1 rounded-md text-xs font-semibold block"><?= $params['address']['status'] ?>
                            </div>
                        </div>
                        <p class="text-sm mb-2 font-medium"><i class="fas fa-map-marker-alt text-red-primary"></i> <?= $params['address']['nama_jalan'] ?>, <?= $params['address']['kelurahan'] ?>, <?= $params['address']['kecamatan'] ?>, <?= $params['address']['kab_kot'] ?>, <?= $params['address']['provinsi'] ?> <?= $params['address']['kode_pos'] ?>
                        </p>
                        <input type="hidden" name="alamat_id" value="<?= $params['address']['id'] ?>">
                        <input type="hidden" name="user_id" value="<?= $params['address']['user_id'] ?>">

                        <a href="/atur_alamat" class="inline-block mb-3">
                            <button class="bg-red-primary text-red-primary bg-opacity-20 p-1 rounded-md text-xs font-semibold block">Ganti
                                alamat</button>
                        </a>
                        <textarea id="message" name="catatan_kurir" rows="3" class="block p-2.5 w-full text-sm bg-gray-50 rounded-lg border focus:ring-red-500 focus:border-red-500 outline-none" placeholder="Catatan untuk kurir (opsional)"></textarea>
                    </div>
                    <div class="w-full rounded-xl border p-4 mb-5">
                        <h2 class="text-xl font-bold mb-1.5">Detail pembelian <i class="fas fa-box-open text-red-primary"></i></h2>
                        <hr class="mb-4">
                        <div class="w-full p-1 bg-red-primary rounded-md mb-5">
                            <p class="text-xs text-white font-medium">
                                <i class="fas fa-store"></i> <?= $params['store']['nama_toko'] ?> - <?= $params['store']['kab_kot'] ?>
                            </p>
                            <input type="hidden" name="toko_id" value="<?= $params['checkout']['toko_id'] ?>">
                        </div>
                        <div class="flex gap-7 mb-3">
                            <img src="<?= $params['product']['cover'] ?? 'https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636' ?>" alt="" width="100" class="rounded-md self-start">
                            <div class="self-start">
                                <h3 class="font-bold text-lg mb-2"><?= $params['product']['nama_produk'] ?></h3>
                                <p class="text-xs font-medium">Size: <?= $params['checkout']['size'] ?></p>
                                <p class="text-xs font-medium">Quantity: <?= $params['checkout']['qty'] ?></p>
                                <p class="text-base font-medium"><span class="text-red-primary font-bold">Rp.<?= $params['product']['harga'] ?></span>/produk</p>
                            </div>
                            <input type="hidden" name="produk_id" value="<?= $params['product']['id'] ?>">
                            <input type="hidden" name="size" value="<?= $params['checkout']['size'] ?>">
                            <input type="hidden" name="qty" value="<?= $params['checkout']['qty'] ?>">
                        </div>
                    </div>
                </div>
                <div class="self-start max-w-md w-full">
                    <div class="w-full rounded-xl border p-4 mb-5">
                        <h2 class="text-xl font-bold mb-1"><i class="fas fa-wallet text-red-primary"></i> Metode
                            pembayaran</h2>
                        <p class="mb-2 text-sm font-semibold text-red-primary">Pilih metode pembayaran yang kamu sukai
                        </p>
                        <hr class="mb-4">
                        <div class="flex items-center gap-2">
                            <img src="https://i.pinimg.com/originals/2b/1f/11/2b1f11dec29fe28b5137b46fffa0b25f.png" alt="" width="50">
                            <div class="flex items-center">
                                <p class="text-sm font-semibold mr-40">Pembayaran elektronik <br><span class="text-base">DANA</span></p>
                                <input type="hidden" name="pembayaran" value="DANA">
                            </div>
                        </div>
                    </div>
                    <div class="w-full rounded-xl border p-4 mb-5">
                        <h2 class="text-xl font-bold mb-1"><i class="fas fa-truck text-red-primary"></i> Jasa Ekspedisi
                        </h2>
                        <p class="mb-2 text-sm font-semibold text-red-primary">Pilih jasa pengiriman paket
                        </p>
                        <hr class="mb-4">
                        <div class="flex items-center gap-4">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/9/92/New_Logo_JNE.png" alt="" width="45">
                            <div class="flex items-center">
                                <p class="text-base font-bold mr-36">JNE <br><span class="text-sm font-semibold">Estimasi tiba <?= $params['estimation'] ?></span></p>
                                <input type="hidden" name="pengiriman" value="JNE">
                                <input type="hidden" name="estimasi" value="<?= $params['estimation'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="w-full rounded-xl border p-4 mb-5">
                        <h2 class="text-xl font-bold mb-1">Cek pembayaran</h2>
                        <hr class="mb-4">
                        <p class="p-1 rounded-md bg-red-50 flex justify-between text-sm">
                            <span class="font-semibold">Subtotal produk (x<?= $params['checkout']['qty'] ?>)</span>
                            <span class="font-bold">Rp.<?= $params['product']['harga'] * $params['checkout']['qty'] ?></span>
                            <input type="hidden" name="subtotal_produk" value="<?= $params['product']['harga'] * $params['checkout']['qty'] ?>" id="">
                        </p>
                        <p class="p-1 rounded-md flex justify-between text-sm">
                            <span class="font-semibold">Ongkir</span>
                            <span class="font-bold">Rp.20000</span>
                            <input type="hidden" name="ongkir" value="20000">
                        </p>
                        <p class="p-1 rounded-md bg-red-50 flex justify-between text-sm mb-3">
                            <span class="font-semibold">Biaya admin</span>
                            <span class="font-bold">Rp.5000</span>
                            <input type="hidden" name="biaya_admin" value="5000">
                        </p>
                        <hr class="border-2 bg-gray-400 mb-3">
                        <p class="font-semibold flex items-center justify-between mb-3">Total bayar <span class="text-2xl font-bold text-red-primary">Rp.<?= $params['product']['harga'] * $params['checkout']['qty'] + 20000 + 5000 ?></span></p>
                        <input type="hidden" name="total_harga" value="<?= $params['product']['harga'] * $params['checkout']['qty'] + 20000 + 5000 ?>">
                        <button type="submit" class="bg-red-primary hover:bg-red-500 p-2.5 text-white w-full font-bold rounded-lg"><i class="fas fa-money-bill-wave-alt"></i> Bayar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

