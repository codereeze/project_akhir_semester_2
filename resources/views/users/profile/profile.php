<section class="container mx-auto px-12 text-gray-600">
    <div class="pt-36">
        <div class="flex gap-3">
            <?php include_once 'partials/profile_nav.php'?>
            <div class="self-start w-full border shadow-md rounded-md p-4">
                <h1 class="text-xl font-bold mb-1">Profile saya</h1>
                <hr class="mb-3">
                <p class="font-semibold mb-2">Foto profile</p>
                <div class="flex gap-4 items-center mb-1">
                    <img src="https://assets.skilvul.com/users/cltqq5evn03jr01s4f3gdwlfz-1711958320000.jpg" width="90" alt="" class="rounded-full">
                    <button class="bg-red-primary hover:bg-red-500 rounded-md text-white text-sm p-2 font-bold"><i class="fas fa-upload"></i> Upload
                        foto</button>
                    <button class="border border-red-primary text-red-primary hover:bg-red-primary hover:text-white duration-300 rounded-md text-sm p-2 font-bold">Hapus
                        foto</button>
                </div>
                <p class="text-sm mb-3">Ukuran foto maksimal sebesar 2MB dan harus berformat jpg, jpeg, atau png.
                </p>
                <form action="" method="post">
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <p class="font-semibold mb-1">Nama lengkap</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="" name="nama">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Username</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="" name="username">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Alamat email</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="" name="email">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">No. Telepon</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" value="" name="no_telp">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Jenis kelamin</p>
                            <select class="p-2 rounded-md border w-full font-medium cursor-pointer" name="jk">
                                <option value="Laki-laki" selected>Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <button class="bg-red-primary hover:bg-red-500 rounded-md text-white text-sm p-2.5 font-bold mt-4"><i class="fas fa-save"></i> Simpan perubahan</button>
                </form>
            </div>
        </div>
    </div>
</section>