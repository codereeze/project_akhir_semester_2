<section class="container mx-auto pl-16 text-gray-600 mb-14">
    <div class="pt-36">
        <div class="flex justify-center mb-5 printable" id="content-print">
            <div class="max-w-2xl w-full p-3 border-2 border-black">
                <div class="flex items-center justify-between mb-1">
                    <div class="flex items-center gap-1">
                        <img src="/assets/logo-resi.png" width="35" alt="" srcset="">
                        <h4 class="text-xl font-bold">Redybag</h4>
                    </div>
                    <img src="/assets/logo-jne.png" width="70" alt="" srcset="">
                </div>
                <hr class="border-t-2 border-dashed border-black mb-2">
                <div class="w-full border-2 border-black mb-2 p-1 text-center font-bold text-sm">
                    No. pesanan: <?= $params['resi']['no_pesanan'] ?>
                </div>
                <div class="flex justify-center mb-2"><?= $params['barcode']($params['resi']['no_pesanan'], 3, 80) ?></div>
                <hr class="border-t-2 border-dashed border-black mb-2">
                <div class="flex justify-between items-center text-sm font-semibold mb-3">
                    <p>Nama penerima: <?= $params['address']['nama_penerima'] ?></p>
                    <p>Pengirim: <?= $params['sender']['nama_toko'] ?></p>
                </div>
                <div class="flex justify-between items-start text-sm font-semibold mb-5">
                    <p class="max-w-sm"> <?= $params['address']['nama_jalan'] ?>, <?= $params['address']['rt_rw'] ?>, <?= $params['address']['kelurahan'] ?>, <?= $params['address']['kecamatan'] ?>, <?= $params['address']['kab_kot'] ?>, <?= $params['address']['provinsi'] ?>, <?= $params['address']['kode_pos'] ?></p>
                    <p><?= $params['sender']['telepon'] ?> <br> <?= $params['sender']['kab_kot'] ?></p>
                </div>
                <p class="max-w-sm text-xs text-justify font-semibold mb-5"><b>Catatan untuk kurir:</b> <?= $params['resi']['catatan_kurir'] ?></p>
                <div class="flex justify-between items-start text-sm font-semibold mb-3 gap-2 text-center">
                    <div class="border-2 border-black p-1 text-sm w-full"><?= $params['sender']['kab_kot'] ?></div>
                    <div class="border-2 border-black p-1 text-sm w-full"><?= $params['sender']['kecamatan'] ?></div>
                </div>
                <div class="flex justify-between items-start text-sm font-medium mb-3 gap-2">
                    <div class="">
                        <p><span class="font-bold">Berat:</span> 500g</p>
                        <p><span class="font-bold">Harga satuan:</span> Rp.<?= $params['resi']['harga_satuan'] ?> | x<?= $params['resi']['qty'] ?></p>
                        <p><span class="font-bold">Biaya pengriman:</span> Rp.<?= $params['resi']['ongkir'] ?></p>
                        <p><span class="font-bold">Harga total:</span> Rp.<?= $params['resi']['total_harga'] ?></p>
                        <p><span class="font-bold">Pembayaran:</span> <?= $params['resi']['pembayaran'] ?></p>
                    </div>
                    <div class="self-center">
                        <p><?= $params['barcode']($params['resi']['no_pesanan'], 1, 40) ?></p>
                        <p><?= $params['resi']['no_pesanan'] ?></p>
                    </div>
                </div>
                <hr class="border-t-2 border-dashed border-black mb-2">
                <p class="text-sm"><span class="font-bold">Nama produk:</span> <?= $params['product']['nama_produk'] ?></p>
            </div>
        </div>
        <br>
        <div class="flex justify-center">
            <div class="max-w-2xl">
                <button class="p-2 bg-red-primary rounded-md text-white hover:bg-red-500 duration-300 font-semibold print-button" onclick="printPDF()">Cetak resi</button>
            </div>
        </div>
    </div>
</section>

<script src="/js/printPDF.js"></script>