<section class="container mx-auto pl-16 text-gray-600">
    <div class="pt-36">
        <?php include_once 'partials/sidebar.php' ?>
        <div class="px-4 sm:ml-64">
            <h1 class="font-bold text-2xl">Tambah Produk Toko</h1>
            <span class="text-sm font-medium mb-7 block">Tambah produk baru dan pastikan data yang di inputkan sudah sesuai yang akan dijual</span>
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
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
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