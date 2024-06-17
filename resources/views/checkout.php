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
                        <a href="/atur_alamat" class="inline-block mb-3">
                            <button class="bg-red-primary text-red-primary bg-opacity-20 p-1 rounded-md text-xs font-semibold block">Ganti
                                alamat</button>
                        </a>
                        <textarea id="message" name="catatan_kurir" rows="3" class="block p-2.5 w-full text-sm bg-gray-50 rounded-lg border focus:ring-red-500 focus:border-red-500 outline-none" placeholder="Catatan untuk kurir (opsional)"></textarea>
                    </div>
                    <input type="text" name="alamat_id" value="">
                    <div class="w-full rounded-xl border p-4 mb-5">
                        <h2 class="text-xl font-bold mb-1.5">Detail pembelian <i class="fas fa-box-open text-red-primary"></i></h2>
                        <hr class="mb-4">
                        <div class="w-full p-1 bg-red-primary rounded-md mb-5">
                            <p class="text-xs text-white font-medium">
                                <i class="fas fa-store"></i> Abdul Store - Kota Tasikmalaya
                            </p>
                        </div>
                        <div class="flex gap-7 mb-3">
                            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-58296597/9_to_12_9_to_12_signature_overlap_semi_blazer_shirt_-_ballet_pink_full02_dl6mail5.jpeg?w=276" alt="" width="100" class="rounded-md self-start">
                            <div class="self-start">
                                <h3 class="font-bold text-lg mb-2">Baju Sweeter Wanita Lengan Panjang</h3>
                                <p class="text-xs font-medium">Type: Warna merah muda</p>
                                <p class="text-xs font-medium">Size: XL</p>
                                <p class="text-xs font-medium">Quantity: 10</p>
                                <p class="text-base font-medium"><span class="text-red-primary font-bold">30.000</span>/produk</p>
                            </div>
                        </div>
                        <input type="text" name="produk_id" value="">
                    </div>
                </div>
                <div class="self-start max-w-md w-full">
                    <!-- <div class="w-full rounded-xl border p-4 mb-5">
                        <h2 class="text-xl font-bold mb-1"><i class="fas fa-wallet text-red-primary"></i> Metode
                            pembayaran</h2>
                        <p class="mb-2 text-sm font-semibold text-red-primary">Pilih metode pembayaran yang kamu sukai
                        </p>
                        <hr class="mb-4">
                        <div class="flex items-center gap-2">
                            <img src="https://i.pinimg.com/originals/2b/1f/11/2b1f11dec29fe28b5137b46fffa0b25f.png" alt="" width="50">
                            <div class="flex items-center">
                                <p class="text-sm font-semibold mr-40">Pembayaran elektronik <br><span class="text-base">DANA</span></p>
                                <span class="text-red-primary font-bold text-sm cursor-pointer">Ganti</span>
                            </div>
                        </div>
                    </div> -->
                    <div class="w-full rounded-xl border p-4 mb-5">
                        <h2 class="text-xl font-bold mb-1"><i class="fas fa-truck text-red-primary"></i> Jasa Ekspedisi
                        </h2>
                        <p class="mb-2 text-sm font-semibold text-red-primary">Pilih kecepatan pengiriman paket
                        </p>
                        <hr class="mb-4">
                        <div class="flex items-center gap-4">
                            <img src="https://www.static-src.com/siva/coreasset/04_2023/1681788768456/standard-09-2023.svg?w=48" alt="" width="45">
                            <div class="flex items-center">
                                <p class="text-base font-bold mr-36">Express <br><span class="text-sm font-semibold">Estimasi tiba 24 - 25 Mei</span></p>
                                <span class="text-red-primary font-bold text-sm cursor-pointer">Ganti</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full rounded-xl border p-4 mb-5">
                        <h2 class="text-xl font-bold mb-1">Cek pembayaran</h2>
                        <hr class="mb-4">
                        <p class="p-1 rounded-md bg-red-50 flex justify-between text-sm">
                            <span class="font-semibold">Harga produk (10)</span>
                            <span class="font-bold">Rp.300.000</span>
                        </p>
                        <p class="p-1 rounded-md flex justify-between text-sm">
                            <span class="font-semibold">Ongkir</span>
                            <span class="font-bold">Rp.20.000</span>
                        </p>
                        <p class="p-1 rounded-md bg-red-50 flex justify-between text-sm mb-3">
                            <span class="font-semibold">Biaya admin</span>
                            <span class="font-bold">Rp.500</span>
                        </p>
                        <hr class="border-2 bg-gray-400 mb-3">
                        <p class="font-semibold flex items-center justify-between mb-3">Total bayar <span class="text-2xl font-bold text-red-primary">300.000</span></p>
                        <button class="bg-red-primary hover:bg-red-500 p-2.5 text-white w-full font-bold rounded-lg"><i class="fas fa-money-bill-wave-alt"></i> Bayar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>