<section class="container mx-auto">
    <div class="pt-28 text-black">
        <div class="py-7 px-8">
            <div class="p-4 shadow-md flex gap-5">
                <ol class="relative border-s border-gray-200 max-w-md w-full">
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
                <div class="w-full p-4 border rounded-lg">
                    <form action="" method="post">
                        <h1 class="text-2xl font-bold">Input Informasi Calon Seller</h1>
                        <p class="mb-7 text-sm">Pastikan Anda memasukan informasi calon seller dengan benar</p>
                        <div class="grid grid-cols-2 gap-3">
                            <div>
                                <p class="font-semibold mb-1">Nama pemilik</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" name="nama_pemilik">
                            </div>
                            <div>
                                <p class="font-semibold mb-1">NIK</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" name="nik">
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Email</p>
                                <input type="email" class="p-2 rounded-md border w-full font-medium" name="email">
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Telepon</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" name="telepon">
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Nama Jalan</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" name="nama_jalan">
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Desa/kelurahan</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" name="kelurahan">
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Kecamatan</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" name="kecamatan">
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Kabupaten</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" name="kabupaten">
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Provinsi</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" name="provinsi">
                            </div>
                            <div>
                                <p class="font-semibold mb-1">Kode Pos</p>
                                <input type="text" class="p-2 rounded-md border w-full font-medium" name="kode_pos">
                            </div>
                        </div>
                        <div class="flex gap-3 justify-end">
                            <button class="border-2 border-red-primary py-2.5 px-5 rounded-full mt-5 text-sm text-red-primary font-semibold hover:text-white hover:bg-red-primary duration-300"><i class="fas fa-chevron-left"></i> Sebelumnya</button>
                            <button class="bg-red-primary py-2.5 px-5 rounded-full mt-5 text-sm text-white font-semibold hover:bg-red-500 duration-300">Selanjutnya <i class="fas fa-chevron-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>