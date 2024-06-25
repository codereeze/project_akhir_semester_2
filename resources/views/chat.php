<section class="container mx-auto px-12 text-gray-600">
    <div class="pt-36">
        <div class="border rounded-md p-6 shadow-sm mb-7">
            <h1 class="text-2xl mb-4 font-bold block">Chat Penjual</h1>
            <div class="flex gap-5 h-72">
                <div class="overflow-y-scroll p-3 border rounded-md max-w-xs w-full">
                    <?php foreach ($params['contacts'] as $item) : ?>
                        <a href="/read-chat/<?= $item['id'] ?>">
                            <button class="border rounded-md p-3 mr-5 mb-3 block w-full">
                                <div class="flex items-center gap-3">
                                    <img src="<?= $params['user']($item['seller_id'], $item['user_id'])['foto_profile'] ?>" width="40" alt="" srcset="" class="rounded-full">
                                    <h2 class="font-semibold text-base block text-start"><?= $params['user']($item['seller_id'], $item['user_id'])['nama'] ?></h2>
                                </div>
                            </button>
                        </a>
                    <?php endforeach; ?>
                </div>
                <div class="overflow-y-scroll p-3 border rounded-md w-full pt-7">
                    <div class="flex flex-col justify-center items-center">
                        <img src="https://img.freepik.com/free-vector/messages-concept-illustration_114360-583.jpg?t=st=1719328038~exp=1719331638~hmac=bad6c1947de83c03f5fb58fb6d85ee68b52e7bd84af35c6dc2cf10605b2b2d54&w=740" width="220" alt="" srcset="">
                        <p class="font-semibold">Selamat datang di fitur chat kami</p>
                    </div>
                </div>
            </div>
            <div class="flex mt-7">
                <form class="w-full" method="post">
                    <div class="relative">
                        <input type="text" name="pesan" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50" placeholder="Tulis pesan Anda disini..." required />
                        <button type="submit" class="text-white absolute end-2.5 bottom-1 bg-red-primary hover:bg-red-800 focus:ring-4 focus:outline-none font-medium rounded-full text-sm px-4 py-3"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>