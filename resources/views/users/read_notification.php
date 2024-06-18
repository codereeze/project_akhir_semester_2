<section class="container mx-auto px-12 text-gray-600">
    <div class="pt-36">
        <div class="flex">
            <div class="self-start w-full border shadow-md rounded-md p-4">
                <h1 class="text-xl font-bold mb-1">Notifikasi dari <?= $params['sender']['nama_toko'] ?></h1>
                <hr class="mb-3">
                <div class="border rounded-lg p-2">
                    <div class="flex items-center gap-4">
                        <img src="https://avatars.githubusercontent.com/u/159593076?v=4" width="70" class="rounded-full" alt="" srcset="">
                        <div>
                            <h1 class="text-lg font-bold"><?= $params['readNotif']['judul'] ?></h1>
                            <p class="text-xs font-bold">From: <?= $params['sender']['nama_toko'] ?></p>
                        </div>
                    </div>
                    <hr class="my-4">
                    <p class="text-justify mb-6"><?= $params['readNotif']['pesan'] ?></p>
                    <a href="/notifikasi" class="inline-block">
                        <button class="bg-red-primary p-2 text-sm font-semibold rounded-md text-white hover:bg-red-500 text-end">Kembali</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>