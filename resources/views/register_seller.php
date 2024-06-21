<section class="container mx-auto">
    <div class="pt-28 text-black">
        <div class="py-7 px-8">
            <div class="p-4 shadow-md flex gap-5">
                <ol class="relative border-s border-gray-200 max-w-md w-full self-start">
                    <li class="mb-8 ms-6">
                        <span class="absolute flex items-center justify-center w-6 h-6 bg-white text-red-primary rounded-full -start-3 ring-8 ring-white">
                            <i class="fas fa-user text-2xl"></i>
                        </span>
                        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm">
                            <div class="items-center justify-between mb-3 sm:flex">
                                <div class="text-lg font-bold lex">Input Informasi Calon Seller</div>
                            </div>
                            <div class="p-3 text-xs font-medium text-white border border-gray-200 rounded-md bg-red-primary">Masukkan data informasi calon pemilik toko seperti biodata pribadi dan alamat terkini.</div>
                        </div>
                    </li>
                    <li class="mb-8 ms-6">
                        <span class="absolute flex items-center justify-center w-6 h-6 bg-white text-red-primary rounded-full -start-3 ring-8 ring-white">
                            <i class="fas fa-store text-2xl"></i>
                        </span>
                        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm">
                            <div class="items-center justify-between mb-3 sm:flex">
                                <div class="text-lg font-bold lex">Input Informasi Toko</div>
                            </div>
                            <div class="p-3 text-xs font-medium text-white border border-gray-200 rounded-md bg-red-primary">Masukkan informasi toko yang akan Anda buat</div>
                        </div>
                    </li>
                    <li class="mb-8 ms-6">
                        <span class="absolute flex items-center justify-center w-6 h-6 bg-white text-red-primary rounded-full -start-3 ring-8 ring-white">
                            <i class="fas fa-folder-open text-2xl"></i> </span>
                        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm">
                            <div class="items-center justify-between mb-3 sm:flex">
                                <div class="text-lg font-bold lex">Upload Dokumen</div>
                            </div>
                            <div class="p-3 text-xs font-medium text-white border border-gray-200 rounded-md bg-red-primary">Upload dokumen untuk verifikasi data, upload dokumen foto pribadi, dan KTP</div>
                        </div>
                    </li>
                </ol>
                <div class="w-full p-4 border rounded-lg self-start">
                    <form action="" method="post">
                        <div class="block" id="information-seller">
                            <h1 class="text-2xl font-bold">Input Informasi Calon Seller</h1>
                            <p class="mb-7 text-sm">Pastikan Anda memasukan informasi calon seller dengan benar</p>
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <p class="font-semibold mb-1">Nama pemilik</p>
                                    <input type="text" class="p-2 rounded-md border w-full font-medium" name="nama_pemilik" required>
                                </div>
                                <div>
                                    <p class="font-semibold mb-1">NIK</p>
                                    <input type="text" class="p-2 rounded-md border w-full font-medium" name="nik" required>
                                </div>
                                <div>
                                    <p class="font-semibold mb-1">Email</p>
                                    <input type="email" class="p-2 rounded-md border w-full font-medium" name="email" required>
                                </div>
                                <div>
                                    <p class="font-semibold mb-1">Telepon</p>
                                    <input type="text" class="p-2 rounded-md border w-full font-medium" name="telepon" required>
                                </div>
                                <div>
                                    <p class="font-semibold mb-1">Nama Jalan</p>
                                    <input type="text" class="p-2 rounded-md border w-full font-medium" name="nama_jalan" required>
                                </div>
                                <div>
                                    <p class="font-semibold mb-1">Desa/kelurahan</p>
                                    <input type="text" class="p-2 rounded-md border w-full font-medium" name="kelurahan" required>
                                </div>
                                <div>
                                    <p class="font-semibold mb-1">Kecamatan</p>
                                    <input type="text" class="p-2 rounded-md border w-full font-medium" name="kecamatan" required>
                                </div>
                                <div>
                                    <p class="font-semibold mb-1">Kabupaten</p>
                                    <input type="text" class="p-2 rounded-md border w-full font-medium" name="kabupaten" required>
                                </div>
                                <div>
                                    <p class="font-semibold mb-1">Provinsi</p>
                                    <input type="text" class="p-2 rounded-md border w-full font-medium" name="provinsi" required>
                                </div>
                                <div>
                                    <p class="font-semibold mb-1">Kode Pos</p>
                                    <input type="text" class="p-2 rounded-md border w-full font-medium" name="kode_pos" required>
                                </div>
                            </div>
                        </div>
                        <div class="hidden" id="information-store">
                            <h1 class="text-2xl font-bold">Input Informasi Toko</h1>
                            <p class="mb-7 text-sm">Pastikan Anda memasukan informasi toko dengan benar</p>
                            <div class="grid grid-cols-2 gap-3 mb-1">
                                <div>
                                    <p class="font-semibold mb-1">Nama toko</p>
                                    <input type="text" class="p-2 rounded-md border w-full font-medium" name="nama_toko" required>
                                </div>
                                <div>
                                    <p class="font-semibold mb-1">Jam buka</p>
                                    <input type="time" class="p-2 rounded-md border w-full font-medium" name="jam_buka" required>
                                </div>
                                <div>
                                    <p class="font-semibold mb-1">Jam tutup</p>
                                    <input type="time" class="p-2 rounded-md border w-full font-medium" name="jam_tutup" required>
                                </div>
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Deskripsi toko</p>
                                <textarea class="p-2 rounded-md border w-full font-medium" name="deskripsi" required></textarea>
                            </div>
                        </div>
                        <div class="hidden" id="upload-document">
                            <h1 class="text-2xl font-bold">Upload Dokumen</h1>
                            <p class="mb-7 text-sm">Pastikan Anda mengupload dokumen file yang benar</p>
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <div class="flex justify-center mb-2">
                                        <img id="preview-photo" src="https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636" alt="" srcset="" width="100" class="h-20">
                                    </div>
                                    <p class="font-semibold mb-1">Foto diri</p>
                                    <input id="file-input1" type="file" class="p-2 rounded-md border w-full font-medium cursor-pointer" name="foto_diri" required>
                                </div>
                                <div>
                                    <div class="flex justify-center mb-2">
                                        <img id="preview-ktp" src="https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636" alt="" srcset="" width="100" class="h-20">
                                    </div>
                                    <p class="font-semibold mb-1">Foto KTP</p>
                                    <input id="file-input2" type="file" class="p-2 rounded-md border w-full font-medium cursor-pointer" name="foto_ktp" required>
                                </div>
                                <div>
                                    <div class="flex justify-center mb-2">
                                        <img id="preview-store" src="https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636" alt="" srcset="" width="100" class="h-20">
                                    </div>
                                    <p class="font-semibold mb-1">Foto toko atau produk</p>
                                    <input id="file-input3" type="file" class="p-2 rounded-md border w-full font-medium cursor-pointer" name="foto_toko_produk" required>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-3 justify-end">
                            <button type="button" class="border-2 border-red-primary py-2.5 px-5 rounded-full mt-5 text-sm text-red-primary font-semibold hover:text-white hover:bg-red-primary duration-300 hidden" id="previous-button"><i class="fas fa-chevron-left"></i> Sebelumnya</button>
                            <button type="button" class="bg-red-primary py-2.5 px-5 rounded-full mt-5 text-sm text-white font-semibold hover:bg-red-500 duration-300" id="next-button">Selanjutnya <i class="fas fa-chevron-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="/js/pendaftaran_seller.js"></script>