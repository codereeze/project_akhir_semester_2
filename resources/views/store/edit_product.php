<section class="container mx-auto pl-16 text-gray-600 mb-14">
    <div class="pt-36">
        <?php include_once 'partials/sidebar.php' ?>
        <div class="px-4 sm:ml-64">
            <h1 class="font-bold text-2xl">Edit Produk Toko</h1>
            <span class="text-sm font-medium mb-7 block">Periksa kembali secara berkala untuk menghindari kesalahan input</span>
            <form action="" method="post">
                <div class="mb-5">
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <p class="font-semibold mb-1">Nama produk</p>
                            <input type="text" name="nama_produk" class="p-2 rounded-md border w-full font-medium" value="<?= $params['product']['nama_produk'] ?>">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Harga per-pcs</p>
                            <input type="text" name="harga" class="p-2 rounded-md border w-full font-medium" value="<?= $params['product']['harga'] ?>">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Nama Brand/Merk</p>
                            <input type="text" name="merk" class="p-2 rounded-md border w-full font-medium" value="<?= $params['product']['merk'] ?>">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Kategori</p>
                            <select class="p-2 rounded-md border w-full font-medium" name="kategori_id">
                                <option value="<?= $params['category']['id'] ?>" selected><?= $params['category']['nama_kategori'] ?></option>
                                <?php foreach ($params['categories'] as $item) : ?>
                                    <option value="<?= $item['id'] ?>"><?= $item['nama_kategori'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Stock</p>
                            <input type="text" name="stock" class="p-2 rounded-md border w-full font-medium" value="<?= $params['product']['stock'] ?>">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Status produk</p>
                            <select class="p-2 rounded-md border w-full font-medium" name="status_produk">
                                <option value="<?= $params['product']['status_produk'] ?>" selected><?= $params['product']['status_produk'] ?></option>
                                <option value="Tersedia">Tersedia</option>
                                <option value="Tidak tersedia">Tidak tersedia</option>
                            </select>
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Size Tersedia</p>
                            <div class="flex items-center gap-5">
                                <div class="flex items-center mb-4 h-10">
                                    <input id="default-checkbox1" type="checkbox" name="size_s" value="Yes" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded cursor-pointer" <?= $params['product']['size_s'] == 'Yes' ? 'checked' : '' ?>>
                                    <label for="default-checkbox1" class="ms-2 text-sm font-medium text-gray-900">S</label>
                                </div>
                                <div class="flex items-center mb-4 h-10">
                                    <input id="default-checkbox2" type="checkbox" name="size_m" value="Yes" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded cursor-pointer" <?= $params['product']['size_m'] == 'Yes' ? 'checked' : '' ?>>
                                    <label for="default-checkbox2" class="ms-2 text-sm font-medium text-gray-900">M</label>
                                </div>
                                <div class="flex items-center mb-4 h-10">
                                    <input id="default-checkbox3" type="checkbox" name="size_l" value="Yes" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded cursor-pointer" <?= $params['product']['size_l'] == 'Yes' ? 'checked' : '' ?>>
                                    <label for="default-checkbox3" class="ms-2 text-sm font-medium text-gray-900">L</label>
                                </div>
                                <div class="flex items-center mb-4 h-10">
                                    <input id="default-checkbox4" type="checkbox" name="size_xl" value="Yes" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded cursor-pointer" <?= $params['product']['size_xl'] == 'Yes' ? 'checked' : '' ?>>
                                    <label for="default-checkbox4" class="ms-2 text-sm font-medium text-gray-900">XL</label>
                                </div>
                                <div class="flex items-center mb-4 h-10">
                                    <input id="default-checkbox5" type="checkbox" name="size_xxl" value="Yes" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded cursor-pointer" <?= $params['product']['size_xxl'] == 'Yes' ? 'checked' : '' ?>>
                                    <label for="default-checkbox5" class="ms-2 text-sm font-medium text-gray-900">XXL</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <p class="font-semibold mb-1">Deskripsi Produk</p>
                        <textarea rows="5" name="deskripsi" id="" class="p-2 rounded-md border w-full font-medium block"><?= $params['product']['deskripsi'] ?></textarea>
                    </div>
                    <input type="hidden" name="toko_id" value="<?= $params['store']['id'] ?>" id="">
                    <div class="text-end">
                        <button type="submit" class="bg-red-primary p-2 rounded-md font-semibold text-sm text-white hover:bg-red-500 duration-300">Simpan perubahan</button>
                    </div>
                </div>
            </form>
            <div>
                <h2 class="text-xl font-bold">Gambar Produk</h2>
                <span class="text-sm font-medium mb-7 block">Pastikan Anda mengupload gambar produk yang sesuai dengan produk yang dijual</span>
                <div class="flex mt-5 gap-7">
                    <div class="max-w-xs w-full">
                        <p class="font-bold mb-4">Cover Produk</p>
                        <div class="flex justify-center flex-col">
                            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-58296597/9_to_12_9_to_12_signature_overlap_semi_blazer_shirt_-_ballet_pink_full02_dl6mail5.jpeg?w=276" class="rounded-md mb-3" alt="">
                            <button class="border-red-primary border p-2 text-sm rounded-md font-semibold text-red-primary hover:bg-red-500 hover:text-white duration-300">Upload Cover</button>
                        </div>
                    </div>
                    <!-- <div class="w-full">
                        <p class="font-bold mb-4">Gambar Pendukung</p>
                        <div class="text-end mb-5">
                            <button class="border-red-primary border p-2 text-sm rounded-md font-semibold text-red-primary hover:bg-red-500 hover:text-white duration-300">Upload Gambar</button>
                        </div>
                        <div>
                            <div class="flex justify-between mb-3">
                                <div class="flex items-center gap-3">
                                    <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-58296597/9_to_12_9_to_12_signature_overlap_semi_blazer_shirt_-_ballet_pink_full02_dl6mail5.jpeg?w=276" class="rounded-md w-10" alt="">
                                    <span class="font-medium text-sm">Acumalaka.jpg</span>
                                </div>
                                <button class="bg-red-primary px-2 py-1 self-center text-xs rounded-md font-semibold text-white hover:bg-red-500 duration-300"><i class="fas fa-minus"></i></button>
                            </div>
                            <div class="flex justify-between mb-3">
                                <div class="flex items-center gap-3">
                                    <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/MTA-58296597/9_to_12_9_to_12_signature_overlap_semi_blazer_shirt_-_ballet_pink_full02_dl6mail5.jpeg?w=276" class="rounded-md w-10" alt="">
                                    <span class="font-medium text-sm">Acumalaka.jpg</span>
                                </div>
                                <button class="bg-red-primary px-2 py-1 self-center text-xs rounded-md font-semibold text-white hover:bg-red-500 duration-300"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="text-end">
                    <button class="bg-red-primary p-2 rounded-md font-semibold text-sm text-white hover:bg-red-500 duration-300">Simpan perubahan</button>
                </div>
            </div>
        </div>
    </div>
</section>