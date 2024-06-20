<header class="container mx-auto">
    <nav class="container mx-auto bg-red-primary w-full text-white fixed z-50 shadow-lg">
        <div class="flex justify-between items-center py-3 px-7">
            <div class="flex gap-5 items-center">
                <a href="/">
                    <img src="/assets/logo.svg" width="145" alt="" srcset="">
                </a>
                <div class="relative">
                    <input type="text" class="bg-white py-2.5 px-3 rounded-md w-[24rem] text-sm placeholder:text-black text-black font-semibold outline-none border-none" placeholder="Cari baju yang kamu sukai...">
                    <div class="absolute right-0 top-0" style="margin-top: 4px; margin-right: 8px;">
                        <button type="submit" class="bg-red-primary hover:bg-red-500 rounded-full p-1 w-8 text-center">
                            <i class="fas fa-search text-white text-sm"></i>
                        </button>
                    </div>
                </div>
                <a href="/keranjang">
                    <div class="bg-red-primary rounded-full p-1 w-9 text-center border-2 border-white hover:border-red-primary duration-500 cursor-pointer">
                        <i class="fas fa-shopping-cart text-white text-sm"></i>
                    </div>
                </a>
                <a href="/transaksi">
                    <div class="bg-red-primary rounded-full p-1 w-9 text-center border-2 border-white hover:border-red-primary duration-500 cursor-pointer">
                        <i class="fas fa-shopping-bag text-white text-sm"></i>
                    </div>
                </a>
                <a href="/notifikasi">
                    <div class="bg-red-primary rounded-full p-1 w-9 text-center border-2 border-white hover:border-red-primary duration-500 cursor-pointer">
                        <i class="fas fa-bell text-white text-sm"></i>
                    </div>
                </a>
                <a href="/chat-penjual">
                    <div class="bg-red-primary rounded-full p-1 w-9 text-center border-2 border-white hover:border-red-primary duration-500 cursor-pointer">
                        <i class="fas fa-comments text-white text-sm"></i>
                    </div>
                </a>
            </div>
            <?php if (isset($_SESSION['user_id'])) : ?>
                <div class="flex items-center gap-3 cursor-pointer group" id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="100" data-dropdown-trigger="hover">
                    <span class="font-semibold group-hover:text-red-200 duration-200"><?= $dataUser['username'] ?></span>
                    <img src="https://avatars.githubusercontent.com/u/159593076?v=4" class="rounded-full p-0.5 border-2 border-white" width="45" alt="" srcset="">
                </div>
                <div id="dropdownDelay" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 font-semibold">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
                        <li>
                            <a href="/" class="block px-4 py-2 hover:bg-gray-100"><i class="fas fa-home"></i> Beranda</a>
                        </li>
                        <li>
                            <a href="/profile" class="block px-4 py-2 hover:bg-gray-100"><i class="fas fa-user"></i> Profile</a>
                        </li>
                        <?php if ($dataUser['role'] == 'User') : ?>
                            <li>
                                <a href="/menjadi_seller" class="block px-4 py-2 hover:bg-gray-100"><i class="fas fa-coins"></i> Menjadi Seller</a>
                            </li>
                        <?php endif; ?>
                        <?php if ($dataUser['role'] == 'Seller') : ?>
                            <li>
                                <a href="/toko_saya" class="block px-4 py-2 hover:bg-gray-100"><i class="fas fa-store"></i> Toko Saya</a>
                            </li>
                        <?php endif; ?>
                        <hr class="border">
                        <li>
                            <a href="/logout" class="block px-4 py-2 hover:bg-gray-100"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            <?php else : ?>
                <div class="flex items-center gap-2">
                    <a href="/login">
                        <button class="bg-white border-2 border-white hover:bg-transparent hover:text-white duration-300 rounded-lg py-1.5 px-4 text-red-primary text-sm font-bold"><i class="fas fa-sign-in-alt"></i> Login</button>
                    </a>
                    <a href="/register">
                        <button class="border-2 border-white hover:bg-white hover:text-red-primary duration-300 text-white rounded-lg py-1.5 px-4 text-sm font-bold">Register</button>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <div class="flex justify-between items-center text-black font-semibold text-sm">
            <div class="bg-white p-2 rounded-tr-md">
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <a href="/atur_alamat">
                        <i class="fas fa-map-marker-alt text-red-primary"></i>
                        <?= isset($dataUser['nama_penerima']) ? "Penerima: " . ($dataUser['nama_penerima']) : 'Atur alamat pengiriman' ?>
                    </a>
                <?php else : ?>
                    <div>
                        Selamat Datang
                    </div>
                <?php endif; ?>
            </div>
            <div class="flex gap-7 text-white">
                <a href="" class="hover:text-red-200 duration-150">T-Shirt</a>|
                <a href="" class="hover:text-red-200 duration-150">Kemeja</a>|
                <a href="" class="hover:text-red-200 duration-150">Jaket Tracker</a>|
                <a href="" class="hover:text-red-200 duration-150">Anak-anak</a>|
                <a href="" class="hover:text-red-200 duration-150">Baju Muslim</a>|
                <a href="" class="hover:text-red-200 duration-150">Olahraga</a>|
                <a href="" class="hover:text-red-200 duration-150">Remaja</a>
            </div>
            <div class="bg-white p-2 rounded-tl-md">
                <div class="flex items-center gap-3 cursor-pointer">
                    <span>Bahasa Indonesia</span>
                    <img src="/assets/id.svg" width="20" class="border rounded-full" alt="" srcset="">
                </div>
            </div>
        </div>
    </nav>
</header>