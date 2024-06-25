<section class="container mx-auto px-12 text-gray-600">
    <div class="pt-36">
        <div class="flex flex-wrap gap-12">
            <div class="self-start max-w-sm w-full">
                <img src="<?= $params['product']['cover'] ?? 'https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636' ?>" class="rounded-2xl shadow-md" alt="" srcset="">
            </div>
            <div class="self-start max-w-2xl w-full">
                <div class="w-full self-start">
                    <h1 class="text-xl font-bold mb-1"><?= $params['product']['nama_produk'] ?></h1>
                    <p class="text-sm font-semibold"><i class="fas fa-star text-yellow-300"></i> <?= $params['countRating']($params['product']['id']) ?> Rating | Terjual <?= $params['productTransaction'] ?> | <?= $params['productComment'] ?> Ulasan</p>
                    <p class="text-2xl font-bold text-red-primary mb-3">Rp.<?= $params['product']['harga'] ?></p>
                    <p class="text-sm font-semibold mb-2">Ukuran tersedia</p>
                    <form class="max-w-xs" method="post">
                        <div class="text-sm font-semibold flex flex-wrap gap-3 mb-3">
                            <?php if ($params['product']['size_s'] === 'Yes') : ?>
                                <label for="size_s">
                                    <div class="bg-gray-300 px-2 py-1 rounded-md inline-block cursor-pointer">
                                        <div class="flex items-center gap-2">
                                            <input type="radio" name="size" id="size_s" value="S" class="cursor-pointer" required> S
                                        </div>
                                    </div>
                                </label>
                            <?php endif; ?>
                            <?php if ($params['product']['size_m'] === 'Yes') : ?>
                                <label for="size_m">
                                    <div class="bg-gray-300 px-2 py-1 rounded-md inline-block cursor-pointer">
                                        <div class="flex items-center gap-2">
                                            <input type="radio" name="size" id="size_m" value="M" class="cursor-pointer" required> M
                                        </div>
                                    </div>
                                </label>
                            <?php endif; ?>
                            <?php if ($params['product']['size_l'] === 'Yes') : ?>
                                <label for="size_l">
                                    <div class="bg-gray-300 px-2 py-1 rounded-md inline-block cursor-pointer">
                                        <div class="flex items-center gap-2">
                                            <input type="radio" name="size" id="size_l" value="L" class="cursor-pointer" required> L
                                        </div>
                                    </div>
                                </label>
                            <?php endif; ?>
                            <?php if ($params['product']['size_xl'] === 'Yes') : ?>
                                <label for="size_xl">
                                    <div class="bg-gray-300 px-2 py-1 rounded-md inline-block cursor-pointer">
                                        <div class="flex items-center gap-2">
                                            <input type="radio" name="size" id="size_xl" value="XL" class="cursor-pointer" required> XL
                                        </div>
                                    </div>
                                </label>
                            <?php endif; ?>
                            <?php if ($params['product']['size_xxl'] === 'Yes') : ?>
                                <label for="size_xxl">
                                    <div class="bg-gray-300 px-2 py-1 rounded-md inline-block cursor-pointer">
                                        <div class="flex items-center gap-2">
                                            <input type="radio" name="size" id="size_xxl" value="XXL" class="cursor-pointer" required> XXL
                                        </div>
                                    </div>
                                </label>
                            <?php endif; ?>
                        </div>
                        <p class="text-sm font-semibold mb-2">Tersedia <?= $params['product']['stock'] ?></p>
                        <div class="relative flex items-center max-w-[11rem]">
                            <button type="button" id="decrement-button" data-input-counter-decrement="bedrooms-input" class="bg-red-primary hover:bg-red-500 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                </svg>
                            </button>
                            <input type="text" name="qty" id="bedrooms-input" data-input-counter data-input-counter-min="1" data-input-counter-max="10" aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 font-medium text-center text-gray-900 text-sm w-11 focus:ring-blue-500 focus:border-blue-500 block h-11" placeholder="" value="1" required />
                            <button type="button" id="increment-button" data-input-counter-increment="bedrooms-input" class="bg-red-primary hover:bg-red-500 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                </svg>
                            </button>
                            <input type="hidden" name="produk_id" value="<?= $params['product']['id'] ?>">
                            <input type="hidden" name="toko_id" value="<?= $params['store']['id'] ?>">
                                <button type="submit" id="checkout" name="form" class="bg-red-primary hover:bg-red-500 rounded-md text-white ml-4 text-base px-7 py-2.5 font-semibold ">Checkout</button>
                                <button type="submit" id="keranjang" name="form" class="border border-red-primary text-red-primary hover:bg-red-500 rounded-md hover:text-white ml-4 text-base px-7 py-2.5 font-semibold duration-300 flex items-center gap-2">
                                    <i class="fas fa-cart-plus"></i>
                                    <span>Keranjang</span>
                                </button>
                    </form>
                </div>
                <div class="mt-5 border rounded-lg p-3">
                    <div class="flex items-center gap-3">
                        <img src="<?= $params['store']['foto_toko'] ?? 'https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636' ?>" width="40" alt="" srcset="" class="rounded-full">
                        <div>
                            <p class="font-bold leading-5"><?= $params['store']['nama_toko'] ?></p>
                            <p class="text-xs font-medium"><?= $params['followers'] ?> Followers</p>
                        </div>
                        <a href="/toko/<?= $params['store']['id'] ?>">
                            <button class="border border-red-primary hover:bg-red-500 text-sm font-semibold p-2 text-red-primary duration-300 hover:text-white"><i class="fas fa-store"></i> Kunjungi toko</button>
                        </a>
                        <form action="" method="post">
                            <input type="hidden" name="produk_id" value="<?= $params['product']['id'] ?>" id="">
                            <?php if (!$params['isFollow']) : ?>
                                <input type="hidden" name="toko_id" id="" value="<?= $params['store']['id'] ?>">
                                <button name="form" value="follow" class="bg-red-primary hover:bg-red-500 text-sm font-semibold p-2 duration-300 text-white">
                                    <i class="fas fa-user-plus"></i> Ikuti toko
                                </button>
                            <?php else : ?>
                                <button name="form" value="unfollow" class="bg-red-primary hover:bg-red-500 text-sm font-semibold p-2 duration-300 text-white">
                                    <i class="fas fa-check"></i> Mengikuti
                                </button>
                            <?php endif; ?>
                        </form>
                    </div>
                    <hr class="mt-2">
                    <div class="flex justify-between">
                        <p class="text-sm mt-3 font-semibold">Tahun bergabung: <?= $params['store']['tahun_bergabung'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="mt-7 mb-4 border border-gray-500">
    <div>
        <h1 class="font-extrabold text-3xl mb-3">Deskripsi produk</h1>
        <div class="font-medium">
            <ul>
                <li>- Kategori: <?= $params['category']['nama_kategori'] ?></li>
                <li class="mb-3">- Merk/brand: <?= $params['product']['merk'] ?></li>
                <li class="font-bold text-lg">Deskripsi: </li>
                <li class="text-justify"><?= $params['product']['deskripsi'] ?></li>
            </ul>
        </div>
    </div>
    <hr class="mt-7 mb-4 border border-gray-500">
    <div>
        <h1 class="font-extrabold text-3xl mb-1">Ulasan produk</h1>
        <p class="mb-7 font-medium">Baca ulasan terlebih dahulu sebelum membeli dan lihat pendapat dari para
            pembeli.</p>
        <div class="flex gap-7">
            <div class="w-full self-start">
                <?php if ($params['comments']) : ?>
                    <?php foreach ($params['comments'] as $item) : ?>
                        <div class="border border-gray-400 rounded-xl p-5 shadow-sm mb-5">
                            <div class="flex items-center gap-3 mb-2">
                                <img src="<?= $params['profile']($item['user_id']) ? $params['profile']($item['user_id']) : '/img/unknown_profile.jpg' ?>" class="rounded-full" width="40" alt="" srcset="">
                                <div>
                                    <p class="font-bold text-sm"><?= $item['username'] ?></p>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 <?= $item['rating'] >= 1 ? 'text-yellow-300' : 'text-gray-300' ?>" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 <?= $item['rating'] >= 2 ? 'text-yellow-300' : 'text-gray-300' ?> ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 <?= $item['rating'] >= 3 ? 'text-yellow-300' : 'text-gray-300' ?> ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 <?= $item['rating'] >= 4 ? 'text-yellow-300' : 'text-gray-300' ?> ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 <?= $item['rating'] == 5 ? 'text-yellow-300' : 'text-gray-300' ?>" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="text-xs font-semibold"><?= $item['tanggal'] ?></span>
                            </div>
                            <div class="font-medium flex items-start gap-5 mt-4">
                                <?php if ($item['gambar']) : ?>
                                    <img src="<?= $item['gambar'] ?>" width="50" alt="" srcset="">
                                <?php endif; ?>
                                <p><?= $item['komentar'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="flex justify-center">
                        <img src="https://img.freepik.com/free-vector/hidden-person-concept-illustration_114360-8814.jpg?t=st=1718434515~exp=1718438115~hmac=62a428c6b62ee81638d60bff20d55f64fb9d8f27f0691d84cc1310b25fbbbd68&w=826" alt="" srcset="" width="300">
                    </div>
                    <h1 class="text-black text-center text-lg font-semibold">Belum ada komentar terkait produk ini</h1>
                <?php endif; ?>
            </div>
            <!-- <div class="max-w-md w-full self-start">
                <div class="border border-gray-400 rounded-xl p-3">
                    <h1 class="font-semibold text-lg mb-2">Upload gambar (opsional)</h1>
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-40 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                    800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div>
                    <h1 class="font-semibold text-lg mb-2 mt-2">Tulis ulasan anda</h1>
                    <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 mb-5" placeholder="Masukkan komentar disini..."></textarea>
                    <button class="bg-red-primary p-2 rounded-md text-white font-semibold text-sm">Kirim
                        ulasan</button>
                </div>
            </div> -->
        </div>
    </div>
    </div>
</section>

<script src="/js/checkoutOrCart.js"></script>