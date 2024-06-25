<section class="container mx-auto pl-16 text-gray-600 mb-14">
    <div class="pt-36">
        <?php include_once 'partials/sidebar.php' ?>
        <div class="px-4 sm:ml-64">
            <h1 class="font-bold text-2xl">Detail Produk</h1>
            <span class="text-sm font-medium mb-7 block">Detail produk</span>
            <div class="mb-5 shadow-md p-4 rounded-md">
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <p class="font-semibold mb-1">Nama produk</p>
                        <input type="text" class="p-2 rounded-md border w-full font-medium" value="<?= $params['product']['nama_produk'] ?>" disabled>
                    </div>
                    <div>
                        <p class="font-semibold mb-1">Harga per-pcs</p>
                        <input type="number" class="p-2 rounded-md border w-full font-medium" value="<?= $params['product']['harga'] ?>" disabled>
                    </div>
                    <div>
                        <p class="font-semibold mb-1">Nama Brand/Merk</p>
                        <input type="text" class="p-2 rounded-md border w-full font-medium" value="<?= $params['product']['merk'] ?>" disabled>
                    </div>
                    <div>
                        <p class="font-semibold mb-1">Kategori</p>
                        <select class="p-2 rounded-md border w-full font-medium" disabled>
                            <option value="<?= $params['category']['nama_kategori'] ?>" selected><?= $params['category']['nama_kategori'] ?></option>
                        </select>
                    </div>
                    <div>
                        <p class="font-semibold mb-1">Stock</p>
                        <input type="number" class="p-2 rounded-md border w-full font-medium" value="<?= $params['product']['stock'] ?>" disabled>
                    </div>
                    <div>
                        <p class="font-semibold mb-1">Size Tersedia</p>
                        <div class="flex items-center gap-5">
                            <div class="flex items-center mb-4 h-10">
                                <input id="default-checkbox1" type="checkbox" value="Yes" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded" <?= $params['product']['size_s'] == 'Yes' ? 'checked' : '' ?> disabled>
                                <label for="default-checkbox1" class="ms-2 text-sm font-medium text-gray-900">S</label>
                            </div>
                            <div class="flex items-center mb-4 h-10">
                                <input id="default-checkbox2" type="checkbox" value="Yes" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded" <?= $params['product']['size_m'] == 'Yes' ? 'checked' : '' ?> disabled>
                                <label for="default-checkbox2" class="ms-2 text-sm font-medium text-gray-900">M</label>
                            </div>
                            <div class="flex items-center mb-4 h-10">
                                <input id="default-checkbox3" type="checkbox" value="Yes" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded" <?= $params['product']['size_l'] == 'Yes' ? 'checked' : '' ?> disabled>
                                <label for="default-checkbox3" class="ms-2 text-sm font-medium text-gray-900">L</label>
                            </div>
                            <div class="flex items-center mb-4 h-10">
                                <input id="default-checkbox4" type="checkbox" value="Yes" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded" <?= $params['product']['size_xl'] == 'Yes' ? 'checked' : '' ?> disabled>
                                <label for="default-checkbox4" class="ms-2 text-sm font-medium text-gray-900">XL</label>
                            </div>
                            <div class="flex items-center mb-4 h-10">
                                <input id="default-checkbox5" type="checkbox" value="Yes" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded" <?= $params['product']['size_xxl'] == 'Yes' ? 'checked' : '' ?> disabled>
                                <label for="default-checkbox5" class="ms-2 text-sm font-medium text-gray-900">XXL</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <p class="font-semibold mb-1">Deskripsi Produk</p>
                    <textarea rows="5" class="p-2 rounded-md border w-full font-medium block" disabled><?= $params['product']['deskripsi'] ?></textarea>
                </div>
            </div>
            <div class="p-4 rounded-md shadow-md">
                <h2 class="text-xl font-bold">Gambar Produk</h2>
                <span class="text-sm font-medium mb-7 block">Gambar produk yang Anda gunakan</span>
                <div class="flex mt-5 gap-7">
                    <div class="max-w-xs w-full">
                        <p class="font-bold mb-4">Cover Produk</p>
                        <img src="<?= $params['product']['cover'] ?? 'https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636' ?>" class="rounded-md" alt="" srcset="">
                    </div>
                    <!-- <div class="w-full">
                        <p class="font-bold mb-4">Gambar Pendukung</p>
                        <div>
                            <div class="flex justify-between mb-3">
                                <div class="flex items-center gap-3">
                                    <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-58296597/9_to_12_9_to_12_signature_overlap_semi_blazer_shirt_-_ballet_pink_full02_dl6mail5.jpeg?w=276" class="rounded-md w-10" alt="">
                                    <span class="font-medium text-sm">Acumalaka.jpg</span>
                                </div>
                            </div>
                            <div class="flex justify-between mb-3">
                                <div class="flex items-center gap-3">
                                    <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-58296597/9_to_12_9_to_12_signature_overlap_semi_blazer_shirt_-_ballet_pink_full02_dl6mail5.jpeg?w=276" class="rounded-md w-10" alt="">
                                    <span class="font-medium text-sm">Acumalaka.jpg</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="text-end">
                    <a href="/edit_produk/<?= $params['product']['id'] ?>">
                        <button type="button" class="bg-red-primary p-2 rounded-md font-semibold text-sm text-white hover:bg-red-500 duration-300">Edit Produk</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>