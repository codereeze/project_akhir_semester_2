<section class="container mx-auto pl-16 text-gray-600">
    <div class="pt-36">
        <?php include_once 'partials/sidebar.php' ?>
        <div class="px-4 sm:ml-64">
            <h1 class="font-bold text-2xl">Edit Produk Toko</h1>
            <span class="text-sm font-medium mb-7 block">Periksa kembali secara berkala untuk menghindari kesalahan input</span>
            <div class="mb-5">
                <form action="">
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <p class="font-semibold mb-1">Nama produk</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Harga per-pcs</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Nama Brand/Merk</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Kategori</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Stock</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Size Tersedia</p>
                            <div class="flex items-center gap-5">
                                <div class="flex items-center mb-4 h-10">
                                    <input id="default-checkbox1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded cursor-pointer">
                                    <label for="default-checkbox1" class="ms-2 text-sm font-medium text-gray-900">S</label>
                                </div>
                                <div class="flex items-center mb-4 h-10">
                                    <input id="default-checkbox2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded cursor-pointer">
                                    <label for="default-checkbox2" class="ms-2 text-sm font-medium text-gray-900">M</label>
                                </div>
                                <div class="flex items-center mb-4 h-10">
                                    <input id="default-checkbox3" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded cursor-pointer">
                                    <label for="default-checkbox3" class="ms-2 text-sm font-medium text-gray-900">L</label>
                                </div>
                                <div class="flex items-center mb-4 h-10">
                                    <input id="default-checkbox4" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded cursor-pointer">
                                    <label for="default-checkbox4" class="ms-2 text-sm font-medium text-gray-900">XL</label>
                                </div>
                                <div class="flex items-center mb-4 h-10">
                                    <input id="default-checkbox5" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded cursor-pointer">
                                    <label for="default-checkbox5" class="ms-2 text-sm font-medium text-gray-900">XXL</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <p class="font-semibold mb-1">Deskripsi Produk</p>
                        <textarea rows="5" name="" id="" class="p-2 rounded-md border w-full font-medium block"></textarea>
                    </div>
                    <div class="text-end">
                        <button class="bg-red-primary p-2 rounded-md font-semibold text-sm text-white hover:bg-red-500 duration-300">Simpan perubahan</button>
                    </div>
                </form>
            </div>
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
                    <div class="w-full">
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
                    </div>
                </div>
                <div class="text-end">
                    <button class="bg-red-primary p-2 rounded-md font-semibold text-sm text-white hover:bg-red-500 duration-300">Simpan perubahan</button>
                </div>
            </div>
        </div>
    </div>
</section>