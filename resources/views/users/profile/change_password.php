<section class="container mx-auto px-12 text-gray-600">
    <div class="pt-36">
        <div class="flex gap-3">
            <?php include_once 'partials/profile_nav.php' ?>
            <div class="self-start w-full border shadow-md rounded-md p-4">
                <h1 class="text-xl font-bold mb-1">Ganti password</h1>
                <hr class="mb-3">
                <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="font-semibold">
                        <span class="font-bold">Penting!</span> ubah password secara berkala untuk menghindari
                        transaksi tak terduga.
                    </div>
                </div>
                <form action="" method="post">
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <p class="font-semibold mb-1">Password saat ini</p>
                            <input type="password" class="p-2 rounded-md border w-full font-medium" value="" name="password">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Password baru</p>
                            <input type="password" class="p-2 rounded-md border w-full font-medium" value="" name="new_password">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Konfirmasi password</p>
                            <input type="password" class="p-2 rounded-md border w-full font-medium" value="" name="cnfrm_password">
                        </div>
                    </div>
                    <button class="bg-red-primary hover:bg-red-500 rounded-md text-white text-sm p-2.5 font-bold mt-4"><i class="fas fa-save"></i> Ganti password</button>
                </form>
            </div>
        </div>
    </div>
</section>