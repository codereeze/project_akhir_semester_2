<section class="container mx-auto pl-16 text-gray-600 mb-14">
    <div class="pt-36">
        <?php include_once 'partials/sidebar.php' ?>
        <div class="px-4 sm:ml-64">
            <h1 class="font-bold text-2xl">Buat Notifikasi</h1>
            <span class="text-sm font-medium mb-7 block">Anda hanya dapat mengirimkan notifikasi hanya kepada followers toko Anda</span>
            <div class="border shadow-sm rounded-md p-4 mb-5">
                <form action="" method="post">
                    <div class="grid grid-cols-2 gap-3 mb-3">
                        <div>
                            <p class="font-semibold mb-1">Judul</p>
                            <input type="text" class="p-2 rounded-md border w-full font-medium" name="judul">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Penerima</p>
                            <select class="p-2 rounded-md border w-full font-medium" name="penerima_id">
                                <option selected>-- Pilih penerima --</option>
                                <?php foreach ($params['receivers'] as $item) : ?>
                                    <option value="<?= $item['id'] ?>"><?= $item['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div>
                        <p class="font-semibold mb-1">Pesan notifikasi</p>
                        <textarea class="p-2 rounded-md border w-full font-medium" name="pesan"></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" name="postRequest" value="insert" class="bg-red-primary hover:bg-red-500 rounded-md text-white text-sm p-2.5 font-bold mt-4">Kirim notifikasi</button>
                    </div>
                </form>
            </div>
            <div class="border shadow-sm rounded-md p-4 mb-5">
                <h3 class="font-semibold text-lg mb-3">Notifikasi yang pernah Anda buat sebelumnya</h3>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Penerima
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Judul
                                </th>
                                <th scope="col" class="px-6 py-3">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($params['notifications'] as $item) : ?>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $item['nama'] ?>
                                    </th>
                                    <td class="px-6 py-4">
                                        <?= $item['email'] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $item['judul'] ?>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <form action="" method="post">
                                            <input type="hidden" name="notif_id" value="<?= $item['primary_id'] ?>">
                                            <button type="submit" name="postRequest" value="delete" class="font-medium text-red-primary hover:underline">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>